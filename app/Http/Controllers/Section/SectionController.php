<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
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
            $section = Section::where('label', 'LIKE', "%$keyword%")
                ->orWhere('slug', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->orWhere('value', 'LIKE', "%$keyword%")
                ->orWhere('page_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $section = Section::latest()->paginate($perPage);
        }

        return view('section.section.index', compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('section.section.create');
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
        
        
        if(isset($request->value_text))
        {
        
            $requestData['value'] = $request->value_text;
            
        }
        
        
        if(isset($request->value_textarea))
        {
        
            $requestData['value'] = $request->value_textarea;
            
        }
        
        
        
        if($file = $request->hasFile('image')) {

    
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/pages/';
            $destinationPath = public_path().$folderName;
            // dd($destinationPath);
            $file->move($destinationPath,$fileName);
            
            $requestData['value'] = $folderName.$fileName;
        
        }
        
        
        if($request->status == 'on'){
            
             $requestData['status'] = '1';
        }
        else
        {
             $requestData['status'] = '0';
        }
        
        // dd($requestData);
        
        Section::create($requestData);

        return redirect('admin/section')->with('flash_message', 'Section added!');
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
        $section = Section::findOrFail($id);

        return view('section.section.show', compact('section'));
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
        $section = Section::findOrFail($id);

        return view('section.section.edit', compact('section'));
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
        
        dd($request->all());
    
        
        $section = Section::findOrFail($id);
        
                
        if(isset($request->value_text))
        {
        
            $requestData['value'] = $request->value_text;
            
        }
        
        
        if(isset($request->value_textarea))
        {
        
            $requestData['value'] = $request->value_textarea;
            
        }
        
        
        
        if($file = $request->hasFile('image')) {

    
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/pages/';
            $destinationPath = public_path().$folderName;
            // dd($destinationPath);
            $file->move($destinationPath,$fileName);
            
            $requestData['value'] = $folderName.$fileName;
        
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
        
        $section->update($requestData);

        return redirect('admin/section')->with('flash_message', 'Section updated!');
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
        Section::destroy($id);

        return redirect('admin/section')->with('flash_message', 'Section deleted!');
    }
}
