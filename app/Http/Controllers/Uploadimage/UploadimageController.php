<?php

namespace App\Http\Controllers\Uploadimage;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Uploadimage;
use DB;
use File;
use Illuminate\Http\Request;
use Session;


class UploadimageController extends Controller
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
        
        $ID = "";
        if(isset($_GET["id"])){
            $ID = $_GET["id"];
        }

        if (!empty($keyword)) {
            $uploadimage = Uploadimage::where('product', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            
            if($ID != '')
            {
                $uploadimage = Uploadimage::where('product',$ID)->paginate($perPage);
            }
            else{
                $uploadimage = Uploadimage::latest()->paginate($perPage);
            }
            
        }


        return view('uploadimage.uploadimage.index', compact('uploadimage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('uploadimage.uploadimage.create');
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
            $folderName = '/upload_files/uploadimage/';
            $destinationPath = public_path().$folderName;
            // dd($destinationPath);
            $file->move($destinationPath,$fileName);
           
            $requestData['image'] = $folderName.$fileName;

        }
        
        Uploadimage::create($requestData);

        $ID = $request->product;

        return redirect('admin/uploadimage?id='.$ID)->with('flash_message', 'Uploadimage added!');
        
        
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
        $uploadimage = Uploadimage::findOrFail($id);

        return view('uploadimage.uploadimage.show', compact('uploadimage'));
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
        $uploadimage = Uploadimage::findOrFail($id);

        return view('uploadimage.uploadimage.edit', compact('uploadimage'));
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

        
        $uploadimage = Uploadimage::findOrFail($id);
        
        
        if($file = $request->hasFile('image')) {
             
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName();
            $folderName = '/upload_files/uploadimage/';
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
        
        
        $uploadimage->update($requestData);

        return redirect('admin/uploadimage')->with('flash_message', 'Uploadimage updated!');
    
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
        Uploadimage::destroy($id);

        // dd("sdsd");
        // $ID = $_GET['id'];

        return back()->with('flash_message', 'Uploadimage Deleted!');
        
    }
}
