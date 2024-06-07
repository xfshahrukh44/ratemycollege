<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Category;
use DB;
use File;
use Illuminate\Http\Request;
use Session;


class CategoryController extends Controller
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
            $category = Category::where('name', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $category = Category::latest()->paginate($perPage);
        }

        return view('category.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('category.category.create');
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
            $folderName = '/upload_files/category/';
            $destinationPath = public_path().$folderName;
            // dd($destinationPath);
            $file->move($destinationPath,$fileName);
           
            $requestData['image'] = $folderName.$fileName;

        }
        
        Category::create($requestData);

        return redirect('admin/category')->with('flash_message', 'Category added!');
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
        $category = Category::findOrFail($id);

        return view('category.category.show', compact('category'));
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
        $category = Category::findOrFail($id);

        return view('category.category.edit', compact('category'));
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
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
        }

        // dd($request->all);
        
        $category = Category::findOrFail($id);
        
        
        if($file = $request->hasFile('image')) {
             
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/category/';
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
        
        
        $category->update($requestData);

        return redirect('admin/category')->with('flash_message', 'Category updated!');
    
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
        Category::destroy($id);

        return redirect('admin/category')->with('flash_message', 'Category deleted!');
    }
}
