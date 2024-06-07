<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use View;
use Session;
use Auth;
use Hash;

use App\Models\Rate;
use App\Models\Wp_school;
use App\Models\Coachchange;
use App\Models\Wp_coach;
use App\Models\Wp_submit_correction;
use App\Models\Activitylog;
use Carbon\Carbon;


class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     
    public function index()
    {
        return view('home');
    }
    
    
    
    public function adminlogin()
    {
        
       return view('custom_admin.login');
        
    }
    
    
    public function post_login(Request $request)
    {
        
        // dd("aaa");
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // dd($request->all());
        
        
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            
            if(auth()->user()->role == '2'){
                
                $get_user = DB::table('users')->where('email', $email)->first();
                
                
                session()->put('get_user',$get_user);
                
                $get_session = session()->get('get_user');
                
               
                return redirect("admin/dashboard")->with('message', 'Signin Successfully');
                
                
            }
            
    

        }else
        {
            return redirect()->back()->with('error', 'Invalid Email or Password');
        }
        
        
    }
    
    
    
         
         
    public function logout_user()
    {
        
        Session::forget('get_user');

        Auth::logout();
        
        return redirect('/adminlogin');
        
    }
    
    
    public function find($id = "")
    {
        
        
        if($id == '1'){
                
            // $get_all_school = DB::table('wp_schools')->where('status' , '1')->inRandomOrder()->take(3000)->get();
            $get_all_school = DB::table('wp_schools')->where('id' ,'!=', '8')->where('status' , '1')->get();
            
            $type = $id;
            
            return view('find', compact('get_all_school', 'type'));
             
        }
        elseif($id == '2'){
                
            // $get_all_coaches = DB::table('wp_coaches')->where('status' , '1')->inRandomOrder()->take(3000)->get();
            $get_all_coaches = DB::table('wp_coaches')->where('id' ,'!=', '8')->where('status' , '1')->get();
            
            $type = $id;
            
            return view('find', compact('get_all_coaches', 'type'));
                            
        }
        elseif($id == '3'){
                
            // $get_all_coaches = DB::table('wp_coaches')->where('status' , '1')->inRandomOrder()->take(3000)->get();
            $get_all_coaches = DB::table('wp_coaches')->where('id' ,'!=', '8')->where('status' , '1')->get();
            
            $type = $id;
            
            return view('find', compact('get_all_coaches', 'type'));
            
        }
        else{
            return back();
        }
        
        
       
    }
    
    
    
    public function search_coach_school()
    {
        
       
    
        if(isset($_GET['searchOption']))
        {
            
            $search_value = $_GET['mainsearch'];
            
            if($_GET['searchOption'] == "coach"){
                
                
                $search_coaches = DB::table('wp_coaches')->where('name', 'like', '%'.$search_value.'%')->get();
                
                
                
                if($search_coaches)
                {
                    // dd($search_coaches);
                    return view('search_coach', compact('search_coaches'));
                    
                    
                }else{
                    
                    return redirect('/');
                    
                }
                
                
            }
            elseif($_GET['searchOption'] == "school"){
                
                
                $search_schools = DB::table('wp_schools')->where('name', 'like', '%'.$search_value.'%')->get();
                
                
                if($search_schools)
                {
                    
                    // dd($search_schools);
                    return view('search_school', compact('search_schools'));
                    
                    
                }else{
                    
                    return redirect('/');
                    
                }
                
               
                
            }
            
        }
        
    }
    
    
    
    public function school_single()
    {
        
        
        if(isset($_GET['school']))
        {
        
            // dd('jhjahs');
            
            $school_id = $_GET['school'];
            
            return view('school_single', compact('school_id'));
            
        }
        
 
    }
    
    
    
    public function coach_single()
    {
        
        
        if(isset($_GET['coach']))
        {
        
            // dd('jhjahs');
            
            $coach_single = $_GET['coach'];
            
            $get_coach = DB::table('wp_coaches')->where('id', $coach_single)->where('status', '1')->first();
            
            // dd($get_coach);
            
            $get_reviews = DB::table('rates')->where('coach_id', $coach_single)->where('status', '1')->get();
            
            return view('coach_single', compact('get_coach', 'get_reviews'));
            
        }
        
        
 
    }
    
    
    
    
    
    public function coachbyid($coachid = "")
    {
        
     
        $coach_single = $coachid;
        
        $get_coach = DB::table('wp_coaches')->where('id', $coach_single)->where('status', '1')->first();
        
        // dd($get_coach);
        
        $get_reviews = DB::table('rates')->where('coach_id', $coach_single)->where('status', '1')->get();
        
        return view('coach_single', compact('get_coach', 'get_reviews'));

 
    }
    
    
    
    public function change_coach_form($coachid = "")
    {
        
     
        $coach_single = $coachid;
        
        $get_coach = DB::table('wp_coaches')->where('id', $coach_single)->where('status', '1')->first();
        
        // dd($get_coach);
        
        $get_reviews = DB::table('rates')->where('coach_id', $coach_single)->where('status', '1')->get();
        
        $get_all_schools = DB::table('wp_schools')->where('status', '1')->get();
        
        return view('change_coach_form', compact('get_coach', 'get_reviews', 'get_all_schools'));

 
    }
    
    
    
    
    
    
    
    public function Add_review(Request $request)
    {
        
        
        // dd($request->all());
        
        $add_reviews = $request->all();
        
        $add_reviews['iq'] = count((array)$request->iq);
        $add_reviews['ethical'] = count((array)$request->ethical);
        $add_reviews['communication'] = count((array)$request->communication);
        $add_reviews['staff'] = count((array)$request->staff);
        $add_reviews['individual_development'] = count((array)$request->individual_development);
        $add_reviews['academics'] = count((array)$request->academics);
        
        // dd($add_reviews);
        
        Rate::create($add_reviews);
        
        // $insertactivity = DB::table('activitylogs')->insert(['activity' => 'Add New Reviews', 'auth_id' => auth()->user()->id]);
        
        return back()->with('message', 'Reviews Add Successfully');
        
 
    }
    
    
    
        
    public function add_submit_correction(Request $request)
    {
        
        
        // dd($request->all());
        
        $add_correction = $request->all();
        
        Wp_submit_correction::create($add_correction);
        
        // $insertactivity = DB::table('activitylogs')->insert(['activity' => 'Add New Reviews', 'auth_id' => auth()->user()->id]);
        
        return back()->with('message', ' Subimit a Correction Successfully');
        
 
    }
    
    
    
    
        
    public function Add_flag_review(Request $request)
    {
        
        // dd($request->all());
       
        $update_rate_description = DB::table('rates')->where('id', $request->rate_id)->update(['flag_rate_description' => $request->flag_rate_description, 'is_flag' => '1']);
        
        // $insertactivity = DB::table('activitylogs')->insert(['activity' => 'Add Flag Reviews', 'auth_id' => auth()->user()->id]);
        
        return back()->with('message', 'Flag review has been added and wait for admin approval');
        
 
    }
    
    
    
        
    public function change_coach(Request $request)
    {
        
        
        //dd($request->all());
        
        $change_coach = $request->all();
        
        $get_coach = DB::table('wp_coaches')->where('id', $request->new_coach)->where('status', '1')->first();
       
        if($get_coach){
            
            $change_coach["new_coach"] = $get_coach->id;
            $change_coach["new_school"] = $get_coach->school_id;
            $change_coach["new_sports"] = $get_coach->sports_id;
            
            Coachchange::create($change_coach);
            
        }
       
        
        // dd($change_coach);
        
        //$insertactivity = DB::table('activitylogs')->insert(['activity' => 'Coaching Change Request Sent', 'auth_id' => auth()->user()->id]);
        
        return back()->with('message', 'Your request has been sent for admin approval');
        
 
    }    
    
    
    
    public function admin_dashboard()
    {
        
        
            
        return view('custom_admin.admin_dashboard');
            
    }
    
    
    public function admin_review()
    {
       
       
        if(isset($_GET['coach']))
        {
            $get_reviews = DB::table('rates')->where('coach_id', $_GET['coach'])->where('status', '1')->orderBy('id', 'desc')->get();
        }
        elseif(isset($_GET['school']))
        {
            $get_reviews = DB::table('rates')->where('school_id', $_GET['school'])->where('status', '1')->orderBy('id', 'desc')->get();
        }
        elseif(isset($_GET['sport']))
        {
            $get_reviews = DB::table('rates')->where('sports_id', $_GET['sport'])->where('status', '1')->orderBy('id', 'desc')->get();
        }
        else{
         
            $get_reviews = DB::table('rates')->where('status', '1')->orderBy('id', 'desc')->get();
            
        }
       
        
        $get_reviews1 = DB::table('rates')->where('status', '1')->get();
        
        
        $get_reviews_count = DB::table('rates')->where('status', '1')->count();
        $get_reviews_flag = DB::table('rates')->where('is_flag', '1')->where('status', '1')->count();
        
        
            
        return view('custom_admin.admin_review', compact('get_reviews1' , 'get_reviews', 'get_reviews_count', 'get_reviews_flag'));
            
    }
    
    
    public function admin_coaches()
    {
        
        
        $get_coachchanges_1 = DB::table('coachchanges')->where('status', '1')->get();
        
        if(isset($_GET['coach']))
        {
            $get_coachchanges = DB::table('coachchanges')->where('old_coach', $_GET['coach'])->orderBy('id', 'desc')->where('status', '1')->get();
        }
        elseif(isset($_GET['school']))
        {
            $get_coachchanges = DB::table('coachchanges')->where('old_school', $_GET['school'])->orderBy('id', 'desc')->where('status', '1')->get();
        }
        elseif(isset($_GET['sport']))
        {
            $get_coachchanges = DB::table('coachchanges')->where('old_sports', $_GET['sport'])->orderBy('id', 'desc')->where('status', '1')->get();
        }
        else{
         
            $get_coachchanges = DB::table('coachchanges')->where('status', '1')->orderBy('id', 'desc')->get();
            
        }
        
        
        return view('custom_admin.admin_coaches', compact('get_coachchanges_1', 'get_coachchanges'));
            
    } 



    
    public function coaches_details()
    {
        
        
        $get_coachchanges_1 = DB::table('wp_coaches')->where('school_id', '!=', '8')->where('status', '1')->get();
        
        if(isset($_GET['coach']))
        {
            $get_coachchanges = DB::table('wp_coaches')->where('school_id', '!=', '8')->where('id', $_GET['coach'])->orderBy('updated_at', 'desc')->where('status', '1')->get();
        }
        elseif(isset($_GET['school']))
        {
            $get_coachchanges = DB::table('wp_coaches')->where('school_id', '!=', '8')->where('school_id', $_GET['school'])->orderBy('updated_at', 'desc')->where('status', '1')->get();
        }
        elseif(isset($_GET['sport']))
        {
            $get_coachchanges = DB::table('wp_coaches')->where('school_id', '!=', '8')->where('sports_id', $_GET['sport'])->orderBy('updated_at', 'desc')->where('status', '1')->get();
        }
        else{
         
            $get_coachchanges = DB::table('wp_coaches')->where('school_id', '!=', '8')->where('status', '1')->orderBy('updated_at', 'desc')->get();
            
        }
        
        
        return view('custom_admin.coaches_details', compact('get_coachchanges_1', 'get_coachchanges'));
            
    } 




    public function accept_coach($id = "")
    {
        
        DB::table('coachchanges')->where('id', $id)->update(array('is_approve' => '1'));
        
        $insertactivity = DB::table('activitylogs')->insert(['activity' => 'Accepted Coach', 'auth_id' => auth()->user()->id]);
    
        return back()->with('message', 'Request has been approved');
    }
    
    
    public function reject_coach($id = "")
    {
        
        DB::table('coachchanges')->where('id', $id)->update(array('is_approve' => '2'));
        
        $insertactivity = DB::table('activitylogs')->insert(['activity' => 'Rejected Coach', 'auth_id' => auth()->user()->id]);
    
        return back()->with('message', 'Request has been rejected');
        
    }
    
    
    public function delete_review($id = "")
    {

        $delete = DB::table('rates')->where('id', $id)->delete();
        
        $insertactivity = DB::table('activitylogs')->insert(['activity' => 'Reviews deleted', 'auth_id' => auth()->user()->id]);
        
        return back()->with('message', 'Request has been Deleted');
        
    }
    
    
    
    
    
    public function coach_change_step_1()
    {
        
        $get_school = DB::table('wp_schools')->where('id', '!=' , '8')->where('status', '1')->get();
        
        return view('custom_admin.admin_coaches_step_1', compact('get_school'));
            
    } 




    
    public function coach_change_step_2()
    {
        $school_id = "0";
        
        
        
        
        if(isset($_GET['school']))
        {
            
            if($_GET['school'] == "0")
            {
              
               return back();
                
            }else
            {
                
                $school_id = $_GET['school'];
            
                $get_school_by_id = DB::table('wp_schools')->where('id', $school_id)->where('status', '1')->first();
        
        
                return view('custom_admin.admin_coaches_step_2', compact('get_school_by_id'));
                
            }
            
        }
        
        
        
            
    } 
    
    
    
    public function coach_change_step_3()
    {
        $school_id = "0";
        $sports_id = "0";
        
        if(isset($_GET['school']) && isset($_GET['sport']))
        {
            
            $school_id = $_GET['school'];
            $sports_id = $_GET['sport'];
            
            
        }
        
        $get_coach_by_id = DB::table('wp_coaches')->where('school_id', $school_id)->where('sports_id', $sports_id)->where('status', '1')->first();
        
        if($get_coach_by_id){
            
            return view('custom_admin.admin_coaches_step_3', compact('get_coach_by_id'));
        
        }else{
            
            return back()->with('message', 'No coach has been assigned yet in this school');
            
        }
        
            
    } 
    
    
    
    public function add_change_coaches(Request $request)
    {
        
        
        if($request->old_coach_id == $request->new_coach_id){
        
            return back()->with('message', 'Can not change beacause this coach is already assigned in this school');
            
        }else{
            
            // dd($request->all());
            
            $update_coach_chage1 = DB::table('wp_coaches')->where('id', $request->old_coach_id)->where('sports_id', $request->sports_id)->update(['school_id' => '8', 'old_coach_id' => '', 'old_school_id' => '']);
            
            $update_coach_chage = DB::table('wp_coaches')->where('id', $request->new_coach_id)->update(['school_id' => $request->school_id, 'sports_id' => $request->sports_id, 'old_coach_id' => $request->old_coach_id, 'old_school_id' => $request->school_id, 'old_sport_id' => $request->sports_id, 'updated_at' => now()]);
            
            
            
            $insertactivity = DB::table('activitylogs')->insert(['activity' => 'Coach Changed', 'auth_id' => auth()->user()->id]);
            
            
            return redirect()->route('admin_coaches')->with('message', 'Coach had been changed successfully');
            
        }
        
            
    }
    
    
    
    public function add_change_school(Request $request)
    {
        
        // dd($request->all());
         
        if($request->school_id == $request->new_school_id){
        
            return back()->with('message', 'Can not change beacause this School is already assigned in this Coach');
            
        }else{
            
            // dd($request->all());
            
            $update_school_chage = DB::table('wp_coaches')->where('id', $request->old_coach_id)->where('sports_id', $request->sports_id)->update(['school_id' => $request->new_school_id]);
            
            
            $insertactivity = DB::table('activitylogs')->insert(['activity' => 'School Changed', 'auth_id' => auth()->user()->id]);
            
            return redirect()->route('admin_coaches')->with('message', 'School had been changed successfully');
            
        }
        
            
    }
    
        
    public function view_coach()
    {
        
        $get_coachchanges = DB::table('wp_coaches')->where('status', '1')->orderBy('id', 'desc')->get();
        
        return view('custom_admin.view_coach', compact('get_coachchanges'));
            
    } 
    
    
    
    public function add_coach()
    {
        
        $get_school = DB::table('wp_schools')->where('id', '!=', '8')->where('status', '1')->get();
        $get_gender = DB::table('wp_gender')->where('status', '1')->get();
        $get_sports = DB::table('wp_sports')->where('status', '1')->get();
       
        return view('custom_admin.add_coach', compact('get_school', 'get_gender', 'get_sports'));
            
    } 
    
    
    
    
    public function post_add_new_coach(Request $request)
    {
        
        $add_new_coach = $request->all();
        
        // dd($request->all());
        
        // $get_sports = DB::table('wp_schools')->where('id', $request->school_id)->first();
        
        // $oldsports2 = "";
        
        // $oldsports = $get_sports->sports_id;
        
        // $oldsports2 = $oldsports.','.$request->sports_id;
        
        
        
        // $array = explode(",", $oldsports2);
        // $array = array_unique($array);
        // $result = implode(",", $array);
        
        
        // $get_sports = DB::table('wp_schools')->where('id', $request->school_id)->update(['sports_id'=> $res]);
        
        Wp_coach::create($add_new_coach);
        
        
        $insertactivity = DB::table('activitylogs')->insert(['activity' => 'New Coach Added', 'auth_id' => auth()->user()->id]);
        
        return redirect()->route('view_coach')->with('message', 'New coach had been add successfully');
        
    }
    
    
    // public function view_coach_edit($id = "")
    // {
        
        
        
    //     $update_coach_find = Wp_coach::where('id', $id)->first();
    //     // dd($update_coach_find);
    
    //     return view('custom_admin.edit_coach', compact('update_coach_find'));
        
    // }
    
    
    
    
    
    public function view_school()
    {
        
        $get_all_schools = DB::table('wp_schools')->where('status', '1')->orderBy('id', 'desc')->get();
        
        return view('custom_admin.view_school', compact('get_all_schools'));
            
    } 
    
    
    public function add_school()
    {
        
        $get_sports = DB::table('wp_sports')->where('status', '1')->get();
        
        return view('custom_admin.add_school', compact('get_sports'));
            
    } 



    public function post_add_school(Request $request)
    {
        
        
        $insert_school = new Wp_school();
        
        $insert_school->name = $request->name;
        $insert_school->address = $request->address;
        
        $schools = implode(',', $request->sports_id);
        $insert_school->sports_id = $schools;
        
        // dd($schools);
        
        $result = $insert_school->save();
        
        $insertactivity = DB::table('activitylogs')->insert(['activity' => 'New School Added', 'auth_id' => auth()->user()->id]);
        
         return redirect()->back()->with('message', 'New School had been add successfully');
            
    } 





    // Change School
    
    public function school_change_step_1()
    {
        
        $get_coach = DB::table('wp_coaches')->where('school_id', '!=' , '8')->where('status', '1')->get();
        
        return view('custom_admin.admin_school_step_1', compact('get_coach'));
            
    } 




    
    public function school_change_step_2()
    {
        $school_id = "0";
        
        
        
        if(isset($_GET['coach']))
        {
            
            if($_GET['coach'] == "0")
            {
              
               return back();
                
            }else
            {
                
                $coach_id = $_GET['coach'];
            
                $get_coach_by_id = DB::table('wp_coaches')->where('id', $coach_id)->where('status', '1')->first();
                
        
                return view('custom_admin.admin_school_step_2', compact('get_coach_by_id'));
                
            }
            
        }
        
        
         
            
    } 
    
    
    
    public function school_change_step_3()
    {
        
        $school_id = "0";
        $sports_id = "0";
        
        if(isset($_GET['coach']) && isset($_GET['sport']))
        {
            
            $coach_id = $_GET['coach'];
            $sports_id = $_GET['sport'];
            
            
        }
        
        $get_school_by_id = DB::table('wp_coaches')->where('id', $coach_id)->where('sports_id', $sports_id)->where('status', '1')->first();
        
        if($get_school_by_id){
            
            return view('custom_admin.admin_school_step_3', compact('get_school_by_id'));
        
        }else{
            
            return back()->with('message', 'No coach has been assigned yet in this school');
            
        }
        
            
    } 
    
    
    
    public function activity_log()
    {
        
        $get_activity_log = Activitylog::where('auth_id', auth()->user()->id)->get();
        
        return view('custom_admin.activity_log', compact('get_activity_log'));
    }
    
    
    
    public function see_a_mistake()
    {
        
        $get_see_a_mistake = Wp_submit_correction::all();
        
        return view('custom_admin.see_a_mistake', compact('get_see_a_mistake'));
        
    }
    
    
    
}
