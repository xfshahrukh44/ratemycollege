<?php

namespace App\Http\Controllers\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Banner;
use DB;
use File;
use Illuminate\Http\Request;
use Session;


class BannerController extends Controller
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
            $banner = Banner::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $banner = Banner::latest()->paginate($perPage);
        }

        return view('banner.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('banner.banner.create');
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
            $folderName = '/upload_files/banner/';
            $destinationPath = public_path().$folderName;
            // dd($destinationPath);
            $file->move($destinationPath,$fileName);
           
            $requestData['image'] = $folderName.$fileName;

        }
        
        Banner::create($requestData);

        return redirect('admin/banner')->with('flash_message', 'Banner added!');
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
        $banner = Banner::findOrFail($id);

        return view('banner.banner.show', compact('banner'));
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
        $banner = Banner::findOrFail($id);

        return view('banner.banner.edit', compact('banner'));
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
        // dd($requestData);
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
        }

        
        $banner = Banner::findOrFail($id);
        
        
        if($file = $request->hasFile('image')) {
             
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/banner/';
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
        
        
        
        $banner->update($requestData);

        return redirect('admin/banner')->with('flash_message', 'Banner updated!');
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
        Banner::destroy($id);

        return redirect('admin/banner')->with('flash_message', 'Banner deleted!');
    }
}
