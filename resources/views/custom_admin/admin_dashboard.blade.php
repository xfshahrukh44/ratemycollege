@extends('layouts.backend')

@section('css')
<style>


</style>
@endsection





@section('content')



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Rate My Collages & Coaches</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    @include('custom_admin.admin_css')
    
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="pagetitle">
      <h1>Reports</h1>
    </div>
    <div>
      <a href="{{ route('activity_log') }}">Show Activity Log</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
   
   @include('custom_admin.admin_nav')

  </aside><!-- End Sidebar-->


  <?php 
  
    $year = "2024";
    
    if(isset($_GET['year']))
    {
        
        $year = $_GET['year'];
        
    }
    
    // IQ
    
    $count_iq_jan = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '01')->avg('iq');
    $iq_jan = number_format($count_iq_jan, 2);
    
    $count_iq_feb = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '02')->avg('iq');
    $iq_feb = number_format($count_iq_feb, 2);
    
    $count_iq_mar = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '03')->avg('iq');
    $iq_mar = number_format($count_iq_mar, 2);
    
    $count_iq_apr = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '04')->avg('iq');
    $iq_apr = number_format($count_iq_apr, 2);
    
    $count_iq_may = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '05')->avg('iq');
    $iq_may = number_format($count_iq_may, 2);
    
    $count_iq_jun = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '06')->avg('iq');
    $iq_jun = number_format($count_iq_jun, 2);
    
    $count_iq_jul = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '07')->avg('iq');
    $iq_jul = number_format($count_iq_jul, 2);
    
    $count_iq_aug = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '08')->avg('iq');
    $iq_aug = number_format($count_iq_aug, 2);
    
    $count_iq_sep = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '09')->avg('iq');
    $iq_sep = number_format($count_iq_sep, 2);
    
    $count_iq_oct = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '10')->avg('iq');
    $iq_oct = number_format($count_iq_oct, 2);
    
    $count_iq_nov = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '11')->avg('iq');
    $iq_nov = number_format($count_iq_nov, 2);
    
    $count_iq_dec = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '12')->avg('iq');
    $iq_dec = number_format($count_iq_dec, 2);
    
    
    
    
    // Ethical

    $count_ethical_jan = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '01')->avg('ethical');
    $ethical_jan = number_format($count_ethical_jan, 2);
    
    $count_ethical_feb = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '02')->avg('ethical');
    $ethical_feb = number_format($count_ethical_feb, 2);
    
    $count_ethical_mar = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '03')->avg('ethical');
    $ethical_mar = number_format($count_ethical_mar, 2);
    
    $count_ethical_apr = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '04')->avg('ethical');
    $ethical_apr = number_format($count_ethical_apr, 2);
    
    $count_ethical_may = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '05')->avg('ethical');
    $ethical_may = number_format($count_ethical_may, 2);
    
    $count_ethical_jun = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '06')->avg('ethical');
    $ethical_jun = number_format($count_ethical_jun, 2);
    
    $count_ethical_jul = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '07')->avg('ethical');
    $ethical_jul = number_format($count_ethical_jul, 2);
    
    $count_ethical_aug = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '08')->avg('ethical');
    $ethical_aug = number_format($count_ethical_aug, 2);
    
    $count_ethical_sep = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '09')->avg('ethical');
    $ethical_sep = number_format($count_ethical_sep, 2);
    
    $count_ethical_oct = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '10')->avg('ethical');
    $ethical_oct = number_format($count_ethical_oct, 2);
    
    $count_ethical_nov = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '11')->avg('ethical');
    $ethical_nov = number_format($count_ethical_nov, 2);
    
    $count_ethical_dec = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '12')->avg('ethical');
    $ethical_dec = number_format($count_ethical_dec, 2);
    
    
    
    // Communication
    
    $count_communication_jan = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '01')->avg('communication');
    $communication_jan = number_format($count_communication_jan, 2);
    
    $count_communication_feb = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '02')->avg('communication');
    $communication_feb = number_format($count_communication_feb, 2);
    
    $count_communication_mar = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '03')->avg('communication');
    $communication_mar = number_format($count_communication_mar, 2);
    
    $count_communication_apr = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '04')->avg('communication');
    $communication_apr = number_format($count_communication_apr, 2);
    
    $count_communication_may = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '05')->avg('communication');
    $communication_may = number_format($count_communication_may, 2);
    
    $count_communication_jun = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '06')->avg('communication');
    $communication_jun = number_format($count_communication_jun, 2);
    
    $count_communication_jul = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '07')->avg('communication');
    $communication_jul = number_format($count_communication_jul, 2);
    
    $count_communication_aug = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '08')->avg('communication');
    $communication_aug = number_format($count_communication_aug, 2);
    
    $count_communication_sep = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '09')->avg('communication');
    $communication_sep = number_format($count_communication_sep, 2);
    
    $count_communication_oct = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '10')->avg('communication');
    $communication_oct = number_format($count_communication_oct, 2);
    
    $count_communication_nov = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '11')->avg('communication');
    $communication_nov = number_format($count_communication_nov, 2);
    
    $count_communication_dec = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '12')->avg('communication');
    $communication_dec = number_format($count_communication_dec, 2);
    
    
    // Staff
    
    $count_staff_jan = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '01')->avg('staff');
    $staff_jan = number_format($count_staff_jan, 2);
    
    $count_staff_feb = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '02')->avg('staff');
    $staff_feb = number_format($count_staff_feb, 2);
    
    $count_staff_mar = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '03')->avg('staff');
    $staff_mar = number_format($count_staff_mar, 2);
    
    $count_staff_apr = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '04')->avg('staff');
    $staff_apr = number_format($count_staff_apr, 2);
    
    $count_staff_may = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '05')->avg('staff');
    $staff_may = number_format($count_staff_may, 2);
    
    $count_staff_jun = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '06')->avg('staff');
    $staff_jun = number_format($count_staff_jun, 2);
    
    $count_staff_jul = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '07')->avg('staff');
    $staff_jul = number_format($count_staff_jul, 2);
    
    $count_staff_aug = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '08')->avg('staff');
    $staff_aug = number_format($count_staff_aug, 2);
    
    $count_staff_sep = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '09')->avg('staff');
    $staff_sep = number_format($count_staff_sep, 2);
    
    $count_staff_oct = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '10')->avg('staff');
    $staff_oct = number_format($count_staff_oct, 2);
    
    $count_staff_nov = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '11')->avg('staff');
    $staff_nov = number_format($count_staff_nov, 2);
    
    $count_staff_dec = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '12')->avg('staff');
    $staff_dec = number_format($count_staff_dec, 2);
    
    
    // individual_development
    
    $count_individual_development_jan = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '01')->avg('individual_development');
    $individual_development_jan = number_format($count_individual_development_jan, 2);
    
    $count_individual_development_feb = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '02')->avg('individual_development');
    $individual_development_feb = number_format($count_individual_development_feb, 2);
    
    $count_individual_development_mar = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '03')->avg('individual_development');
    $individual_development_mar = number_format($count_individual_development_mar, 2);
    
    $count_individual_development_apr = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '04')->avg('individual_development');
    $individual_development_apr = number_format($count_individual_development_apr, 2);
    
    $count_individual_development_may = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '05')->avg('individual_development');
    $individual_development_may = number_format($count_individual_development_may, 2);
    
    $count_individual_development_jun = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '06')->avg('individual_development');
    $individual_development_jun = number_format($count_individual_development_jun, 2);
    
    $count_individual_development_jul = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '07')->avg('individual_development');
    $individual_development_jul = number_format($count_individual_development_jul, 2);
    
    $count_individual_development_aug = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '08')->avg('individual_development');
    $individual_development_aug = number_format($count_individual_development_aug, 2);
    
    $count_individual_development_sep = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '09')->avg('individual_development');
    $individual_development_sep = number_format($count_individual_development_sep, 2);
    
    $count_individual_development_oct = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '10')->avg('individual_development');
    $individual_development_oct = number_format($count_individual_development_oct, 2);
    
    $count_individual_development_nov = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '11')->avg('individual_development');
    $individual_development_nov = number_format($count_individual_development_nov, 2);
    
    $count_individual_development_dec = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '12')->avg('individual_development');
    $individual_development_dec = number_format($count_individual_development_dec, 2);
    
    
    
    //academics
    
    $count_academics_jan = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '01')->avg('academics');
    $academics_jan = number_format($count_academics_jan, 2);
    
    $count_academics_feb = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '02')->avg('academics');
    $academics_feb = number_format($count_academics_feb, 2);
    
    $count_academics_mar = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '03')->avg('academics');
    $academics_mar = number_format($count_academics_mar, 2);
    
    $count_academics_apr = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '04')->avg('academics');
    $academics_apr = number_format($count_academics_apr, 2);
    
    $count_academics_may = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '05')->avg('academics');
    $academics_may = number_format($count_academics_may, 2);
    
    $count_academics_jun = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '06')->avg('academics');
    $academics_jun = number_format($count_academics_jun, 2);
    
    $count_academics_jul = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '07')->avg('academics');
    $academics_jul = number_format($count_academics_jul, 2);
    
    $count_academics_aug = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '08')->avg('academics');
    $academics_aug = number_format($count_academics_aug, 2);
    
    $count_academics_sep = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '09')->avg('academics');
    $academics_sep = number_format($count_academics_sep, 2);
    
    $count_academics_oct = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '10')->avg('academics');
    $academics_oct = number_format($count_academics_oct, 2);
    
    $count_academics_nov = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '11')->avg('academics');
    $academics_nov = number_format($count_academics_nov, 2);
    
    $count_academics_dec = DB::table('rates')->whereYear('created_at', $year)->whereMonth('created_at', '12')->avg('academics');
    $academics_dec = number_format($count_academics_dec, 2);
    
    
    
    // PIE CHART
    
    $iq_avg_piechar = DB::table('rates')->whereYear('created_at', $year)->avg('iq');
    $iq_pichart = number_format($iq_avg_piechar, 2);
    
    $ethical_avg_piechar = DB::table('rates')->whereYear('created_at', $year)->avg('ethical');
    $ethical_pichart = number_format($ethical_avg_piechar, 2);
    
    $communication_avg_piechar = DB::table('rates')->whereYear('created_at', $year)->avg('communication');
    $communication_pichart = number_format($communication_avg_piechar, 2);
    
    $staff_avg_piechar = DB::table('rates')->whereYear('created_at', $year)->avg('staff');
    $staff_pichart = number_format($staff_avg_piechar, 2);
    
    $individual_development_avg_piechar = DB::table('rates')->whereYear('created_at', $year)->avg('individual_development');
    $individual_development_pichart = number_format($individual_development_avg_piechar, 2);
    
    $academics_avg_piechar = DB::table('rates')->whereYear('created_at', $year)->avg('academics');
    $academics_pichart = number_format($academics_avg_piechar, 2);
    
    
    //Scouting Chart
    
    // 5 Starts
    $iq_count_5 = DB::table('rates')->whereYear('created_at', $year)->where('iq' , '5')->count('iq');
    $ethical_count_5 = DB::table('rates')->whereYear('created_at', $year)->where('ethical' , '5')->count('ethical');
    $communication_count_5 = DB::table('rates')->whereYear('created_at', $year)->where('communication' , '5')->count('communication');
    $staff_count_5 = DB::table('rates')->whereYear('created_at', $year)->where('staff' , '5')->count('staff');
    $individual_development_count_5 = DB::table('rates')->whereYear('created_at', $year)->where('individual_development' , '5')->count('individual_development');
    $academics_count_5 = DB::table('rates')->whereYear('created_at', $year)->where('academics' , '5')->count('academics');
    
    $five_star =  $iq_count_5 + $ethical_count_5 + $communication_count_5 + $staff_count_5 + $individual_development_count_5 + $academics_count_5;
    $t_fivee = "";
    if($five_star){
        $t_five = $five_star / 6 * 100;
        $t_fivee = number_format($t_five, 2);
    }
    
    
    // 4 Starts
    $iq_count_4 = DB::table('rates')->whereYear('created_at', $year)->where('iq' , '4')->count('iq');
    $ethical_count_4 = DB::table('rates')->whereYear('created_at', $year)->where('ethical' , '4')->count('ethical');
    $communication_count_4 = DB::table('rates')->whereYear('created_at', $year)->where('communication' , '4')->count('communication');
    $staff_count_4 = DB::table('rates')->whereYear('created_at', $year)->where('staff' , '4')->count('staff');
    $individual_development_count_4 = DB::table('rates')->whereYear('created_at', $year)->where('individual_development' , '4')->count('individual_development');
    $academics_count_4 = DB::table('rates')->whereYear('created_at', $year)->where('academics' , '4')->count('academics');
    
    
    $four_star =  $iq_count_4 + $ethical_count_4 + $communication_count_4 + $staff_count_4 + $individual_development_count_4  + $academics_count_4;
    $t_fourr = "";
    if($four_star){
        $t_four = $four_star / 6 * 100;
        $t_fourr = number_format($t_four, 2);
    }
    
    
    // 3 Starts
    $iq_count_3 = DB::table('rates')->whereYear('created_at', $year)->where('iq' , '3')->count('iq');
    $ethical_count_3 = DB::table('rates')->whereYear('created_at', $year)->where('ethical' , '3')->count('ethical');
    $communication_count_3 = DB::table('rates')->whereYear('created_at', $year)->where('communication' , '3')->count('communication');
    $staff_count_3 = DB::table('rates')->whereYear('created_at', $year)->where('staff' , '3')->count('staff');
    $individual_development_count_3 = DB::table('rates')->whereYear('created_at', $year)->where('individual_development' , '3')->count('individual_development');
    $academics_count_3 = DB::table('rates')->whereYear('created_at', $year)->where('academics' , '3')->count('academics');
    
    $three_star = $iq_count_3 + $ethical_count_3 + $communication_count_3 + $staff_count_3 + $individual_development_count_3  + $academics_count_3;
    $t_threee = "";
    if($three_star){
        $t_three = $three_star / 6 * 100;
        $t_threee = number_format($t_three, 2);
    }
    
    
    // 2 Starts
    $iq_count_2 = DB::table('rates')->whereYear('created_at', $year)->where('iq' , '2')->count('iq');
    $ethical_count_2 = DB::table('rates')->whereYear('created_at', $year)->where('ethical' , '2')->count('ethical');
    $communication_count_2 = DB::table('rates')->whereYear('created_at', $year)->where('communication' , '2')->count('communication');
    $staff_count_2 = DB::table('rates')->whereYear('created_at', $year)->where('staff' , '2')->count('staff');
    $individual_development_count_2 = DB::table('rates')->whereYear('created_at', $year)->where('individual_development' , '2')->count('individual_development');
    $academics_count_2 = DB::table('rates')->whereYear('created_at', $year)->where('academics' , '2')->count('academics');


    $two_star = $iq_count_2 + $ethical_count_2 + $communication_count_2 + $staff_count_2 + $individual_development_count_2  + $academics_count_2;
    $t_twoo = "";
    if($two_star){
        $t_two = $two_star / 6 * 100;
        $t_twoo = number_format($t_two, 2);
    }
    
    
    // 1 Starts
    $iq_count_1 = DB::table('rates')->whereYear('created_at', $year)->where('iq' , '1')->count('iq');
    $ethical_count_1 = DB::table('rates')->whereYear('created_at', $year)->where('ethical' , '1')->count('ethical');
    $communication_count_1 = DB::table('rates')->whereYear('created_at', $year)->where('communication' , '1')->count('communication');
    $staff_count_1 = DB::table('rates')->whereYear('created_at', $year)->where('staff' , '1')->count('staff');
    $individual_development_count_1 = DB::table('rates')->whereYear('created_at', $year)->where('individual_development' , '1')->count('individual_development');
    $academics_count_1 = DB::table('rates')->whereYear('created_at', $year)->where('academics' , '1')->count('academics');


    $first_star = $iq_count_1 + $ethical_count_1 + $communication_count_1 + $staff_count_1 + $individual_development_count_1  + $academics_count_1;
    $t_firstt = "";
    if($first_star){
        $t_first = $first_star / 6 * 100;
        $t_firstt = number_format($t_first, 2);
    }
    
        
  ?>


  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            
            
            <div class="col-xxl-12 col-md-12">
              <div class="card">
                
                
                <div class="card-title d-flex">
                  <div class="col-md-4"></div>
                  <div class="col-md-4"></div>
                  <div class="chart-filter col-md-4 d-flex px-4">
                      
                      <!--<div class="col col mx-2">-->
                      <!--  <select class="form-select" aria-label="Default select example">-->
                      <!--    <option selected>NCAA</option>-->
                      <!--    <option value="1">One</option>-->
                      <!--    <option value="2">Two</option>-->
                      <!--    <option value="3">Three</option>-->
                      <!--  </select>-->
                      <!--</div>-->
                      <!--<div class="col col mx-2">-->
                      <!--  <select class="form-select" aria-label="Default select example">-->
                      <!--    <option selected>Gender</option>-->
                      <!--    <option value="1">One</option>-->
                      <!--    <option value="2">Two</option>-->
                      <!--    <option value="3">Three</option>-->
                      <!--  </select>-->
                      <!--</div>-->
                      <!--<div class="col col mx-2">-->
                      <!--  <select class="form-select" aria-label="Default select example">-->
                      <!--    <option selected>Sports</option>-->
                      <!--    <option value="1">One</option>-->
                      <!--    <option value="2">Two</option>-->
                      <!--    <option value="3">Three</option>-->
                      <!--  </select>-->
                      <!--</div>-->
                      <!--<div class="col col mx-2">-->
                      <!--  <select class="form-select" aria-label="Default select example">-->
                      <!--    <option selected>Last 6 months</option>-->
                      <!--    <option value="1">One</option>-->
                      <!--    <option value="2">Two</option>-->
                      <!--    <option value="3">Three</option>-->
                      <!--  </select>-->
                      <!--</div>-->
                      <!--<div class="col col mx-2">-->
                      <!--  <select class="form-select" aria-label="Default select example">-->
                      <!--    <option selected>Region</option>-->
                      <!--    <option value="1">One</option>-->
                      <!--    <option value="2">Two</option>-->
                      <!--    <option value="3">Three</option>-->
                      <!--  </select>-->
                      <!--</div>-->
                      
                      <label style="margin-top: 5px;">Select Year</label>
                      <div class="col col mx-2">
                        <select id="changeyear" class="form-select" aria-label="Default select example">
                          <option value="2024" <?php if($year == "2024"){ echo 'selected'; } ?> >2024</option>
                          <option value="2023" <?php if($year == "2023"){ echo 'selected'; } ?> >2023</option>
                          <option value="2022" <?php if($year == "2022"){ echo 'selected'; } ?> >2022</option>
                          <option value="2021" <?php if($year == "2021"){ echo 'selected'; } ?> >2021</option>
                          <option value="2020" <?php if($year == "2020"){ echo 'selected'; } ?> >2020</option>
                        </select>
                      </div>
                      
                      
                  </div>
                </div>
                
                
                
                <div class="card-body">

                  <!-- Column Chart -->
                  <div id="columnChart"></div>

                  <script>
                      
                      document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#columnChart"), {
                        series: [
                        {
                          name: 'IQ',
                          data: ['{{$iq_jan}}', '{{$iq_feb}}' , '{{$iq_mar}}', '{{$iq_apr}}' , '{{$iq_may}}', '{{$iq_jun}}', '{{$iq_jul}}', '{{$iq_aug}}', '{{$iq_sep}}', '{{$iq_oct}}', '{{$iq_nov}}', '{{$iq_dec}}']
                        }, 
                        {
                          name: 'Ethical',
                          data: ['{{$ethical_jan}}', '{{$ethical_feb}}' , '{{$ethical_mar}}', '{{$ethical_apr}}' , '{{$ethical_may}}', '{{$ethical_jun}}', '{{$ethical_jul}}', '{{$ethical_aug}}', '{{$ethical_sep}}', '{{$ethical_oct}}', '{{$ethical_nov}}', '{{$ethical_dec}}']
                        }, 
                        {
                          name: 'Communication',
                          data: ['{{$communication_jan}}', '{{$communication_feb}}' , '{{$communication_mar}}', '{{$communication_apr}}' , '{{$communication_may}}', '{{$communication_jun}}', '{{$communication_jul}}', '{{$communication_aug}}', '{{$communication_sep}}', '{{$communication_oct}}', '{{$communication_nov}}', '{{$communication_dec}}']
                        },
                        {
                          name: 'Staff',
                          data: ['{{$staff_jan}}', '{{$staff_feb}}' , '{{$staff_mar}}', '{{$staff_apr}}' , '{{$staff_may}}', '{{$staff_jun}}', '{{$staff_jul}}', '{{$staff_aug}}', '{{$staff_sep}}', '{{$staff_oct}}', '{{$staff_nov}}', '{{$staff_dec}}']
                        },
                        {
                          name: 'Individual',
                          data: ['{{$individual_development_jan}}', '{{$individual_development_feb}}' , '{{$individual_development_mar}}', '{{$individual_development_apr}}' , '{{$individual_development_may}}', '{{$individual_development_jun}}', '{{$individual_development_jul}}', '{{$individual_development_aug}}', '{{$individual_development_sep}}', '{{$individual_development_oct}}', '{{$individual_development_nov}}', '{{$individual_development_dec}}']
                        },
                        {
                          name: 'Academics',
                          data: ['{{$academics_jan}}', '{{$academics_feb}}' , '{{$academics_mar}}', '{{$academics_apr}}' , '{{$academics_may}}', '{{$academics_jun}}', '{{$academics_jul}}', '{{$academics_aug}}', '{{$academics_sep}}', '{{$academics_oct}}', '{{$academics_nov}}', '{{$academics_dec}}']
                        }
                        
                        ],
                        chart: {
                          type: 'bar',
                          height: 350   
                        },
                        plotOptions: {
                          bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded'
                          },
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          show: true,
                          width: 2,
                          colors: ['transparent']
                        },
                        xaxis: {
                          categories: ['Jan' , 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        },
                        yaxis: {
                          title: {
                            text: ''
                          }
                        },
                        fill: {
                          opacity: 1
                        },
                        tooltip: {
                          y: {
                            formatter: function(val) {
                              return "" + val + "%"
                            }
                          }
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Column Chart -->

                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-xxl-6 col-md-6">
            <div class="card">
              <div class="card-title d-flex">
                <div class="col-md-8"><h5 class="card-title py-0 px-4">Ratings by Yearly</h5></div>
                <!--<div class="chart-filter col-md-4 d-flex px-4">-->
                <!--    <div class="col col mx-2">-->
                <!--      <select class="form-select" aria-label="Default select example">-->
                <!--        <option selected>Sports</option>-->
                <!--        <option value="1">One</option>-->
                <!--        <option value="2">Two</option>-->
                <!--        <option value="3">Three</option>-->
                <!--      </select>-->
                <!--    </div>-->
                <!--</div>-->
              </div>
              <div class="card-body">
                <!-- Pie Chart -->
                  <div id="pieChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#pieChart"), {
                        series: [ <?php echo $t_fivee; ?> ,  <?php echo $ethical_pichart; ?> , <?php echo $communication_pichart; ?> , <?php echo $staff_pichart; ?> , <?php echo $individual_development_pichart; ?>  , <?php echo $academics_pichart; ?> ],
                        chart: {
                          height: 350,
                          type: 'pie',
                          toolbar: {
                            show: true
                          }
                        },
                        labels: ['IQ', 'Ethical', 'Communication', 'Staff', 'Individual Development', 'Academics']
                      }).render();
                    });
                  </script>
                  <!-- End Pie Chart -->

              </div>
            </div>
            </div>
            <div class="col-xxl-6 col-md-6">
            <div class="card">
              <div class="card-title d-flex">
                <div class="col-md-8"><h5 class="card-title py-0 px-4">Rating by Stars</h5></div>
                <div class="chart-filter col-md-4 d-flex px-4">
                    
                </div>
              </div>
              <div class="card-body">
                <!-- Bar Chart -->
                  <div id="barChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#barChart"), {
                        series: [{
                          data: [ <?php echo $t_fivee; ?> , <?php echo $t_fourr; ?> ,  <?php echo $t_threee; ?> , <?php echo $t_twoo; ?> , <?php echo $t_firstt; ?> ]
                        }],
                        chart: {
                          type: 'bar',
                          height: 350
                        },
                        plotOptions: {
                          bar: {
                            borderRadius: 4,
                            horizontal: true,
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        xaxis: {
                          categories: ['⭐⭐⭐⭐⭐', '⭐⭐⭐⭐', '⭐⭐⭐', '⭐⭐', '⭐'
                          ],
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Bar Chart -->

              </div>
            </div>
            </div>
          </div>
        </div>
        
        
        <!--<div class="col-lg-12">-->
        <!--  <div class="row">-->
        <!--    <div class="col-xxl-4 col-md-4">-->
        <!--      <div class="card">-->
        <!--        <div class="card-title d-flex">-->
        <!--          <div class="col-md-12">-->
        <!--            <h5 class="card-title px-4 py-0">Top 5 Highest Rated</h5>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="card-body">-->
        <!--            <ul class="list-group list-group-numbered">-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--            </ul>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--    <div class="col-xxl-4 col-md-4">-->
        <!--      <div class="card">-->
        <!--        <div class="card-title d-flex">-->
        <!--          <div class="col-md-12">-->
        <!--            <h5 class="card-title px-4 py-0">Top 5 Lowest Rated</h5>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="card-body">-->
        <!--            <ul class="list-group list-group-numbered">-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--            </ul>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--    <div class="col-xxl-4 col-md-4">-->
        <!--      <div class="card">-->
        <!--        <div class="card-title d-flex">-->
        <!--          <div class="col-md-12">-->
        <!--            <h5 class="card-title px-4 py-0">Most Rated School</h5>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="card-body">-->
        <!--            <ul class="list-group list-group-numbered">-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--              <li class="list-group-item">Jesse Zafiratos</li>-->
        <!--            </ul>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
      </div>
    </section>

  </main><!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('custom_admin.admin_js')


</body>

</html>



@endsection






@section('js')
<script type="text/javascript">
    
    
    $('#changeyear').change(function(){
        
        var selectedValue1 = $('#changeyear').val();
        
        var url = '{{ URL("admin/dashboard") }}';
        
        var full_url = url + '?year='+selectedValue1;
        
        window.location.href = full_url;
        
    });
    

</script>
@endsection
