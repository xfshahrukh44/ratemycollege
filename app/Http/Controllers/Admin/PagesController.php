<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;
use Image;
use File;
use DB;

class PagesController extends Controller
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
            $pages = Page::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pages = Page::latest()->paginate($perPage);
        }

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.create');
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
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        $requestData = $request->all();
        
         if($file = $request->hasFile('image')) {
    
        
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/pages/';
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
        
        
        Page::create($requestData);

        return redirect('admin/pages')->with('flash_message', 'Page added!');
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
        $page = Page::findOrFail($id);

        return view('admin.pages.show', compact('page'));
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
        $page = Page::findOrFail($id);

        return view('admin.pages.edit', compact('page'));
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
        
        
        $check = DB::table('sections')->where('page_id', $id)->get();
        
        foreach($check as $checks)
        {
            
            
            if($checks->type == 'image'){
            
                if($file = $request->hasFile($checks->slug)) {
            
                    $file = $request->file($checks->slug) ;
                    $fileName = $file->getClientOriginalName();
                    $folderName = '/upload_files/pages/';
                    $destinationPath = public_path().$folderName;
                    // dd($destinationPath);
                    $file->move($destinationPath,$fileName);
                    $combine_destination = $folderName.$fileName;
                    
                    DB::table('sections')->where('id',$checks->id)->update(
                        array(
                            'value'=>$combine_destination
                        )
                    );   
                    
                }

            }


            else if($checks->type == 'video')
            {
                
                if($file = $request->hasFile($checks->slug)) {
            
                    $file = $request->file($checks->slug) ;
                    $fileName = $file->getClientOriginalName();
                    $folderName = '/upload_files/videos/';
                    $destinationPath = public_path().$folderName;
                    // dd($destinationPath);
                    $file->move($destinationPath,$fileName);
                    
                    DB::table('sections')->where('id',$checks->id)->update(
                        array(
                            'value'=>$folderName.$fileName
                        )
                    );   
                    
                }
                
            }
            

            else
            {

                 DB::table('sections')->where('id',$checks->id)
                ->update(
                    array(
                        'value'=>$request->input($checks->slug),
                    )
                ); 
            }

        }
        
        
        
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            // 'image' => 'required'
        ]);
        
        $requestData = $request->all();
   
        
        $page = Page::findOrFail($id);
                
        
        if($file = $request->hasFile('image')) {
    
        
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/pages/';
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
        
        $page->update($requestData);

        
        return redirect('admin/pages')->with('flash_message', 'Page updated!');
        
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
        Page::destroy($id);

        return redirect('admin/pages')->with('flash_message', 'Page deleted!');
    }
    
    
    
    public function pagedetails($id)
    {
       
        $section = DB::table('sections')->where('id',$id)->first();
        
        return view('admin.pages.pagedetails', compact('section'));
        
    }
    
    
    
    
    
}
