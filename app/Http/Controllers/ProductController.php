<?php
  
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;
use Mail;
use View;
use Session;
use Auth;

class ProductController extends Controller
{
    /**
     * Write code on Method
     * 
     * @return response()
     */
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }
  
  
      
    public function product()
    {
        
        $product = DB::table('products')->get();
        
        // dd($product);
        
        return view('product', compact('product'));
        
    }
    
    
    public function product_detail($id = '')
    {
        
        $decrypted_id = Crypt::decryptString($id);
        
        // dd($decrypted_id);
        
        $product_detail = DB::table('products')->where(['id'=>$decrypted_id, 'status'=>'1'])->first();
        
        // dd($roduct_detail);
        
        return view('product_detail', compact('product_detail'));
        
    }
  
  
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }

  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        
        $product = Product::findOrFail($id);
        // session()->flush();
        $cart = session()->get('cart', []);
        // dd($cart[$id]);
        
        if(isset($cart[$id])) {
            
            $cart[$id]['quantity']++;
        
        }else {
            
            $cart[$id] = [
                
                "id" => $product->id,
                "name" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
                
            ];
            
        }
          
        $cart = session()->put('cart', $cart);
        // $cartt = session()->get('cart');
        // dd($cartt);
        
        return redirect()->back()->with('success', 'Product added to cart successfully!');
        
    }
  
    /** 
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
            
        }
    }
    
    
    
        
    public function checkout()
    {
        return view('checkout');
    }
    
    
    
}


?>