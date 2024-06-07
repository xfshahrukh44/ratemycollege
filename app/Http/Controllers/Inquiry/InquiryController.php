<?php

namespace App\Http\Controllers\Inquiry;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Inquiry;
use DB;
use File;
use Illuminate\Http\Request;
use Session;


class InquiryController extends Controller
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
            $inquiry = Inquiry::where('formname', 'LIKE', "%$keyword%")
                ->orWhere('fname', 'LIKE', "%$keyword%")
                ->orWhere('lname', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('isread', 'LIKE', "%$keyword%")
                ->orWhere('message', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $inquiry = Inquiry::latest()->paginate($perPage);
        }

        return view('inquiry.inquiry.index', compact('inquiry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('inquiry.inquiry.create');
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
            $folderName = '/upload_files/inquiry/';
            $destinationPath = public_path().$folderName;
            // dd($destinationPath);
            $file->move($destinationPath,$fileName);
           
            $requestData['image'] = $folderName.$fileName;

        }
        
        Inquiry::create($requestData);

        return redirect('admin/inquiry')->with('flash_message', 'Inquiry added!');
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
        $inquiry = Inquiry::findOrFail($id);

        return view('inquiry.inquiry.show', compact('inquiry'));
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
        $inquiry = Inquiry::findOrFail($id);

        return view('inquiry.inquiry.edit', compact('inquiry'));
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
        
        
        $inquiry = Inquiry::findOrFail($id);
        
        
        if($file = $request->hasFile('image')) {
             
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/inquiry/';
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
        
        
        $inquiry->update($requestData);

        return redirect('admin/inquiry')->with('flash_message', 'Inquiry updated!');
    
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
        Inquiry::destroy($id);

        return redirect('admin/inquiry')->with('flash_message', 'Inquiry deleted!');
    }
}
