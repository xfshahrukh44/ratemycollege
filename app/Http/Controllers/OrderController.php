<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use Illuminate\Support\Facades\Redirect;
use App\newsletter;
use App\Program;
use App\Product;
use App\Banner;
use App\Models\Order;
use App\Models\Orderproduct;
use App\Http\Requests\OrderRequest;
use DB;
use View;
use Session;
use App\Http\Traits\HelperTrait;
use Auth;
use Hash;
use Stripe;
use Stripe\Customer;
use Stripe\Charge;

class OrderController extends Controller
{

// 	use HelperTrait;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// use Helper;



	public function __construct()
	{
            
	}


	public function placeOrder(Request $request)
	{

        $Auth_user = session()->get('get_auth_user');

        // dd($request->all());
 
        // $order = new Order(); 
    
        $requestData = $request->all();
      
		
        $cart = Session::get('cart');
        
      	$total = 0;
        foreach ($cart as $key => $value) {
            
            $total += $value['price'] * $value['quantity'];
            
        }
		
		
		if(isset($request->payment_method) && $request->payment_method == 'paypal'){

            $requestData['total'] = $total;
			$requestData['transaction_id'] = '';
			$requestData['customer_id'] =  $request->customer_id;
			$requestData['card_payment'] = $request->card_payment;
			$requestData['token'] = '';
			$requestData['order_status'] = $request->order_status;;
			$requestData['payment_method'] = $request->payment_method;
            $requestData['invoice_number'] = rand(0, 999999);
            $trackno = rand(0, 999999999999999);
	        $requestData['tracking_no'] = $trackno;
	        $requestData['receipt_url'] = '';
	        $requestData['order_shipped_or_pending'] = 'Pending';
	    
            // dd($requestData);
	        
		
		}
		elseif (isset($request->payment_method) && $request->payment_method == 'stripe') {
                

			try {


				try {
				    
					Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

					$customer = \Stripe\Customer::create(array(
						'email' => $request->email,
						'name' => $request->first_name,
						'phone' => $request->phone_no,
						'description' => "Client Created From Website",
						'source'  => $request->stripeToken,
					));
				} catch (Exception $e) {
					return redirect()->back()->with('stripe_error', $e->getMessage());
				}

				try {
				   
					$charge = \Stripe\Charge::create(array( 
						'customer' => $customer->id,
						'amount'   => $total * 100,
						'currency' => 'USD',
						'description' => "Payment From Website",
						'metadata' => array("name" => $request->first_name, "email" => $request->email),
					));
					
					
					
				} catch (Exception $e) {
					return redirect()->back()->with('stripe_error', $e->getMessage());
				}
			} catch (Exception $e) {
				return redirect()->back()->with('stripe_error', $e->getMessage());
			}
			
			
			$chargeJson = $charge->jsonSerialize();
			
			//dd($chargeJson);
			
			// Check whether the charge is successful 
			if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
				
				
				$transactionID = $chargeJson['balance_transaction'];
				$payment_status = $chargeJson['status'];
				$customer_id  = $chargeJson['customer'];
				$card_payment = $chargeJson['payment_method'];
				$receipt_url  = $chargeJson['receipt_url'];
				
                $requestData['total'] = $total;
				$requestData['transaction_id'] = $transactionID;
				$requestData['customer_id'] = $customer_id;
				$requestData['card_payment'] = $card_payment;
				$requestData['token'] = $request->stripeToken;
				$requestData['order_status'] = $payment_status;
				$requestData['payment_method'] = $request->payment_method;
                $requestData['invoice_number'] = rand(0, 999999);
                $trackno = rand(0, 999999999999999);
		        $requestData['tracking_no'] = $trackno;
		        $requestData['receipt_url'] = $receipt_url;
		        $requestData['order_shipped_or_pending'] = 'Pending';
		    
			}

		}
		elseif (isset($request->payment_method) && $request->payment_method == 'authorize') {
		
			
			dd("Authorize");

		
		} 
		
        //dd($requestData);

		$save_order = Order::create($requestData);
		
        // dd($save_order);
		
		if($save_order){
		  
		    $order_table = Order::latest()->first();

        // dd($order_table);

			$subtotal = 0;

    	        
            foreach(session('cart') as $key => $details){
			
                $order_products = new Orderproduct();
				
				$order_products->order_id = $order_table->id;
				$order_products->order_product_id = $details['id'];
				// $order_products->order_user_id = $Auth_user->id;
				$order_products->order_user_id = Auth::user()->id;
				$order_products->order_product_name = $details['name'];
				$order_products->order_product_price =  $details['price'];
				$order_products->order_product_qty = $details['quantity'];
				$order_products->order_product_subtotal = $details['price'] * $details['quantity'];
		        $order_products->image = $details['image'];
		
	            $order_products->save();
                
            }
	        
            
    	    Session::forget('cart');
    	

			Session::flash('message', 'Your Order has been placed Successfully');
			Session::flash('alert-class', 'alert-success');
			//echo "data saved";
			//return;
			if (Auth::check()) {
				return redirect('/');
			} else {
				return redirect('/');
			}
			
			
			
		}

		
	}



}
