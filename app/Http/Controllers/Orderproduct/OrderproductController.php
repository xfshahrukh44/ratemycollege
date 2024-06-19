<?php

namespace App\Http\Controllers\Orderproduct;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Orderproduct;
use DB;
use File;
use Illuminate\Http\Request;
use Session;


class OrderproductController extends Controller
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
        
        $ID = '';
        if(isset($_GET['id'])){
            
            $ID = $_GET['id'];
            
        }else{
            return redirect('admin/order');
        }

        if (!empty($keyword)) {
            $orderproduct = Orderproduct::where('order_id', 'LIKE', "%$keyword%")
                ->orWhere('order_product_id', 'LIKE', "%$keyword%")
                ->orWhere('order_product_name', 'LIKE', "%$keyword%")
                ->orWhere('order_product_price', 'LIKE', "%$keyword%")
                ->orWhere('order_product_qty', 'LIKE', "%$keyword%")
                ->orWhere('order_product_subtotal', 'LIKE', "%$keyword%")
                ->orWhere('order_user_id', 'LIKE', "%$keyword%")
                ->orWhere('variation_price', 'LIKE', "%$keyword%")
                ->orWhere('variants', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $orderproduct = Orderproduct::where(['order_id'=>$ID])->paginate($perPage);
            // dd($orderproduct);
        }

        return view('orderproduct.orderproduct.index', compact('orderproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('orderproduct.orderproduct.create');
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
            $folderName = '/upload_files/orderproduct/';
            $destinationPath = public_path().$folderName;
            // dd($destinationPath);
            $file->move($destinationPath,$fileName);
           
            $requestData['image'] = $folderName.$fileName;

        }
        
        Orderproduct::create($requestData);

        return redirect('admin/orderproduct')->with('flash_message', 'Orderproduct added!');
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
        $orderproduct = Orderproduct::findOrFail($id);

        return view('orderproduct.orderproduct.show', compact('orderproduct'));
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
        $orderproduct = Orderproduct::findOrFail($id);

        return view('orderproduct.orderproduct.edit', compact('orderproduct'));
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
        
        
        $orderproduct = Orderproduct::findOrFail($id);
        
        
        if($file = $request->hasFile('image')) {
             
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/orderproduct/';
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
        
        
        $orderproduct->update($requestData);

        return redirect('admin/orderproduct')->with('flash_message', 'Orderproduct updated!');
    
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
        Orderproduct::destroy($id);

        return redirect('admin/orderproduct')->with('flash_message', 'Orderproduct deleted!');
    }
}
