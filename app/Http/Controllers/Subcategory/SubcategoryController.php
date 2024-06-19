<?php

namespace App\Http\Controllers\Subcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Subcategory;
use DB;
use File;
use Illuminate\Http\Request;
use Session;


class SubcategoryController extends Controller
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
            $subcategory = Subcategory::where('name', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $subcategory = Subcategory::latest()->paginate($perPage);
        }

        return view('subcategory.subcategory.index', compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('subcategory.subcategory.create');
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
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
        }

        
        if($file = $request->hasFile('image')) {
             
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/subcategory/';
            $destinationPath = public_path().$folderName;
            // dd($destinationPath);
            $file->move($destinationPath,$fileName);
           
            $requestData['image'] = $folderName.$fileName;

        }
    
        
        
        Subcategory::create($requestData);

        return redirect('admin/subcategory')->with('flash_message', 'Subcategory added!');
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
        $subcategory = Subcategory::findOrFail($id);

        return view('subcategory.subcategory.show', compact('subcategory'));
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
        $subcategory = Subcategory::findOrFail($id);

        return view('subcategory.subcategory.edit', compact('subcategory'));
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
        
        if($request->hasFile('image')) {
            
            $requestData['image'] = $request->file('image')->store('uploads', 'public');
            
        }

        
        $subcategory = Subcategory::findOrFail($id);
        
        
        if($file = $request->hasFile('image')) {
             
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/subcategory/';
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
        
        // dd($requestData);
        
        
        $subcategory->update($requestData);

        return redirect('admin/subcategory')->with('flash_message', 'Subcategory updated!');
    
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
        Subcategory::destroy($id);

        return redirect('admin/subcategory')->with('flash_message', 'Subcategory deleted!');
    }
}
