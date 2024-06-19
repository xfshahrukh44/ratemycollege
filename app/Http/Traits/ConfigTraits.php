<?php

namespace App\Http\Traits;
use App\Models\Config_flag;
use DB;

trait ConfigTraits{

    static public function get_config_details($id)
    {
    
        // $get_config = Config_flag::where(['id'=>$id,'status'=>'1','is_config'=>'1']);
        $get_config = DB::table('config_flags')->where('id',$id)->where('status','1')->where('is_config','1')->first();
        return $get_config->code_value;
        
    }


    static public function get_logo()
    {
    
        // $get_config = Config_flag::where(['id'=>$id,'status'=>'1','is_config'=>'1']);
        $get_logo = DB::table('logos')->where('type','logo')->first();
        $full_image = $get_logo->image;
        return $full_image;
        
    }


    static public function get_favicon()
    {
    
        // $get_config = Config_flag::where(['id'=>$id,'status'=>'1','is_config'=>'1']);
        $get_favicon = DB::table('logos')->where('type','favicon')->first();
        $full_image = $get_favicon->image;
        return $full_image;
        
    }

    

}

?>
