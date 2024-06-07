<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Order;
use DB;
use File;
use Illuminate\Http\Request;
use Session;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $order = Order::where('full_name', 'LIKE', "%$keyword%")
                ->orWhere('country', 'LIKE', "%$keyword%")
                ->orWhere('city', 'LIKE', "%$keyword%")
                ->orWhere('state', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('zipcode', 'LIKE', "%$keyword%")
                ->orWhere('phoneno', 'LIKE', "%$keyword%")
                ->orWhere('qty', 'LIKE', "%$keyword%")
                ->orWhere('total', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('order_email', 'LIKE', "%$keyword%")
                ->orWhere('order_status', 'LIKE', "%$keyword%")
                ->orWhere('order_notes', 'LIKE', "%$keyword%")
                ->orWhere('order_company', 'LIKE', "%$keyword%")
                ->orWhere('transaction_id', 'LIKE', "%$keyword%")
                ->orWhere('card_token', 'LIKE', "%$keyword%")
                ->orWhere('invoice_number', 'LIKE', "%$keyword%")
                ->orWhere('payment_method', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $order = Order::latest()->paginate($perPage);
        }

        return view('order.order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('order.order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        
        if($file = $request->hasFile('image')) {
             
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/order/';
            $destinationPath = public_path().$folderName;
            // dd($destinationPath);
            $file->move($destinationPath,$fileName);
           
            $requestData['image'] = $folderName.$fileName;

        }
        
        Order::create($requestData);

        return redirect('admin/order')->with('flash_message', 'Order added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('order.order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('order.order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
     
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        
        $order = Order::findOrFail($id);
        
        
        if($file = $request->hasFile('image')) {
             
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/order/';
            $destinationPath = public_path().$folderName;
            // dd($destinationPath);
            $file->move($destinationPath,$fileName);
           
            $requestData['image'] = $folderName.$fileName;

        }
        
        
        if($request->status == 'on')
        {
            $requestData['status'] = '1';
        }
        else
        {
            $requestData['status'] = '0';
        }
        
        
        $order->update($requestData);

        return redirect('admin/order')->with('flash_message', 'Order updated!');
    
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Order::destroy($id);

        return redirect('admin/order')->with('flash_message', 'Order deleted!');
    }
    

    
    
}
