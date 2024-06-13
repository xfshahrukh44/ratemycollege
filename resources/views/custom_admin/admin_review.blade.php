@extends('layouts.backend')


<!--Toaster Css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

<link rel="stylesheet" type="text/css" href="{{ asset('datatable/datatables.min.css') }}" >



@section('css')
<style>


.table-border {
    border: 1px solid #ddd;
    border-radius: 15px;
    overflow: hidden;
    margin-bottom: 30px;
    padding: 8px !important; 
}


.toast-success{
        background-color:green !important;
    }
    
    
    .toast-error{
        background-color:red !important;
    }

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
      <h1>Ratings</h1>
    </div>
    <div>
     <a href="{{ route('activity_log') }}">Show Activity Log</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

   @include('custom_admin.admin_nav')

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section dashboard">
      
      
      <div class="row">
        
        
        <div class="col-lg-12">
          
          
          <div class="row mb-5">
            <div class="col-md-3">
              <p class="m-0">Showing {{ $get_reviews_count }} Ratings <span>({{$get_reviews_flag}} Flagged)</span></p>
            </div>
            <div class="chart-filter col-md-9 d-flex px-4">
                
                <?php 
                    
                    $options_coach = array();
                    
                    foreach($get_reviews1 as $key => $val_coach){
                        
                        array_push($options_coach, $val_coach->coach_id);
                        
                    }
                    
                    // dump(print_r($options_coach));
                    
                    $unique_coach = array_unique($options_coach);
                
                ?>
                
                <div class="col col mx-2">
                  
                  <select class="form-select" aria-label="Default select example" id="coach">
                    <option value="0" selected> Select Coach </option>
                    @foreach($unique_coach as  $val_coach)
                    <option <?php if(isset($_GET['coach'])){  if($_GET['coach'] == $val_coach){ echo 'selected'; }  } ?> value="{{ $val_coach }}"> {{ App\Models\Wp_coach::find($val_coach)->name ?? 'Unknown Sport' }} </option>
                    @endforeach
                  
                  </select>
                  
                </div>
                
                
                
                
                <?php 
                    
                    $options_school = array();
                    
                    foreach($get_reviews1 as $key => $val_school){
                        
                        array_push($options_school, $val_school->school_id);
                        
                    }
                    
                    // dump(print_r($options_school));
                    
                    $unique_options_school = array_unique($options_school);
                
                ?>
                
                <div class="col mx-2">
                  <select class="form-select" aria-label="Default select example" id="school">
                     <option value="0" selected> Select School </option>
                     @foreach($unique_options_school as  $val_school)
                     <option <?php if(isset($_GET['school'])){  if($_GET['school'] == $val_school){ echo 'selected'; }  } ?> value="{{ $val_school }}"> {{ App\Models\Wp_school::find($val_school)->name ?? 'Unknown Sport' }} </option>
                     @endforeach
                  </select>
                </div>
                
                
                
                <?php 
                    
                    $options_sport = array();
                    
                    foreach($get_reviews1 as $key => $val_sport){
                        
                        array_push($options_sport, $val_sport->sports_id);
                        
                    }
                    
                    // dump(print_r($options_sport));
                    
                    $unique_options_sport = array_unique($options_sport);
                
                ?>
                
                <div class="col mx-2">
                  <select class="form-select" aria-label="Default select example" id="sport">
                     <option value="0" selected> Select Sport </option>
                     @foreach($unique_options_sport as  $val_sport)
                     
                     
                      <option <?php if(isset($_GET['sport'])){  if($_GET['sport'] == $val_sport){ echo 'selected'; }  } ?> value="{{ $val_sport }}">   {{ App\Models\Wp_sport::find($val_sport)->name ?? 'Unknown Sport' }} </option>
                     

                     @endforeach
                  </select>
                </div>
                
                
               
            </div>
          </div>
          
          
          
          
          <div class="row">
            <div class="col-xxl-12 col-md-12">
            
              <div class="container">
                  <!-- Display success message -->
                  @if(session('message'))
                      <div class="alert alert-success alert-dismissible mt-3" role="alert">
                          {{ session('message') }}
                      </div>
                  @endif
              </div>
            
                
              <div class="rating ">
                <div class="table-border"> 
                  <table class="table" id="examplee">
                    <thead>
                      <tr>
                        <th scope="col">Flag</th>
                        <th scope="col">Coach</th>
                        <th scope="col">School</th>
                        <th scope="col">Sport</th>
                        <th scope="col">Avg. Rating</th>
                        <th scope="col">Created at</th>
                        <!--<th scope="col">Conference</th>-->
                        <!--<th scope="col">Association</th>-->
                        <!--<th scope="col">Division</th>-->
                        <th scope="col">Review</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      @foreach($get_reviews as $key => $val_review)
                      <tr>
                        <td>  <?php if($val_review->is_flag == '1'){ ?> <i style="color:red;" class="fa fa-flag"></i>   <?php } ?> </td>
                        <td> {{ App\Models\Wp_coach::find($val_review->coach_id)->name ?? 'Unknown Sport' }} </td>
                        <td> {{ App\Models\Wp_school::find($val_review->school_id)->name ?? 'Unknown Sport' }} </td>
                        <td> {{ App\Models\Wp_sport::find($val_review->sports_id)->name ?? 'Unknown Sport' }} </td>
                        <td>
                            
                            <?php 
                                
                                $total = 0;
                                
                                $iq = $val_review->iq;
                                $ethical = $val_review->ethical;
                                $communication = $val_review->communication;
                                $staff = $val_review->staff;
                                $individual_development = $val_review->individual_development;
                                $academics = $val_review->academics;
                                
                                $total = $iq + $ethical + $communication + $staff + $individual_development + $academics;
                                
                                $total_f = $total /6;
                                
                            ?>
                            
                            {{ number_format($total_f, 1); }}
                            
                        </td>
                        <!--<td>Conference</td>-->
                        <!--<td>NCAA</td>-->
                        <!--<td>Division</td>-->
                        <td> {{ $val_review->created_at }} </td>
                        <td>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#showReview-{{$key}}">
                            SHOW
                          </button>
                        </td>
                        
                        
                        
    <div class="modal fade" id="showReview-{{$key}}" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="coach-profile-head d-flex border-bottom">
              <div class="coaches-profile-left">
                <img src="https://redcraftmedia.net/ratemycollege/wp-content/themes/ratemycollege/images/no-avatar.png" alt="No avatar" width="80" height="80">
              </div>
              <div class="coaches-profile-right-in-box-title">
                <h2>
                  
                  {{ App\Models\Wp_coach::find($val_review->coach_id)->name }}
                  
                  <div class="school-name">
                    <span style="margin-right: 10px;">
                      <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2024/02/Buildings.svg" >
                    </span>
                    <span>  {{ App\Models\Wp_school::find($val_review->school_id)->name }} </span>
                  </div>
                </h2>
              </div>
            </div>
            <div class="rating-coach-form-out">
              <form id="rating-coach-form">
                <div class="rating-coach-form-star border-bottom" data-post_id="42596" data-user_id="0">
                  <div class="rating-coach-form-star-left">
                    <div class="rate-the-coach-item iq d-flex justify-content-between" id="rate-the-coach-item-iq">
                      <div class="rate-the-coach-item-left"> IQ ? </div>
                      <div class="rate-the-coach-item-right">
                        
                        <?php if($val_review->iq == '1'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            
                        <?php }elseif($val_review->iq == '2'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        <?php }elseif($val_review->iq == '3'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        
                        <?php }elseif($val_review->iq == '4'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        
                        <?php }elseif($val_review->iq == '5'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                        
                        
                        
                        <?php } ?>
                        
                      </div>
                    </div>
                    <div class="rate-the-coach-item personable d-flex justify-content-between" id="rate-the-coach-item-personable">
                      <div class="rate-the-coach-item-left"> Ethical ? </div>
                      <div class="rate-the-coach-item-right">
                        
                        
                         <?php if($val_review->ethical == '1'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            
                        <?php }elseif($val_review->ethical == '2'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        <?php }elseif($val_review->ethical == '3'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        
                        <?php }elseif($val_review->ethical == '4'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        
                        <?php }elseif($val_review->ethical == '5'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                        
                        
                        
                        <?php } ?>
                        
                        
                      </div>
                    </div>
                    <div class="rate-the-coach-item communication d-flex justify-content-between" id="rate-the-coach-item-communication">
                      <div class="rate-the-coach-item-left"> Communication ? </div>
                      <div class="rate-the-coach-item-right">
                        
                        
                         <?php if($val_review->communication == '1'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            
                        <?php }elseif($val_review->communication == '2'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        <?php }elseif($val_review->communication == '3'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        
                        <?php }elseif($val_review->communication == '4'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        
                        <?php }elseif($val_review->communication == '5'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                        
                        
                        
                        <?php } ?>
                        
                      </div>
                    </div>
                  </div>
                  <div class="rating-coach-form-star-right">
                    <div class="rate-the-coach-item staff d-flex justify-content-between" id="rate-the-coach-item-staff">
                      <div class="rate-the-coach-item-left"> Staff ? </div>
                      <div class="rate-the-coach-item-right">
                       
                       <?php if($val_review->staff == '1'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            
                        <?php }elseif($val_review->staff == '2'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        <?php }elseif($val_review->staff == '3'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        
                        <?php }elseif($val_review->staff == '4'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        
                        <?php }elseif($val_review->staff == '5'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                        
                        
                        
                        <?php } ?>
                       
                      </div>
                    </div>
                    <div class="rate-the-coach-item player-individual-development d-flex justify-content-between" id="rate-the-coach-item-player-individual-development">
                      <div class="rate-the-coach-item-left"> Player/Individual Development ? </div>
                      <div class="rate-the-coach-item-right">
                        
                        <?php if($val_review->individual_development == '1'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            
                        <?php }elseif($val_review->individual_development == '2'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        <?php }elseif($val_review->individual_development == '3'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        
                        <?php }elseif($val_review->individual_development == '4'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        
                        <?php }elseif($val_review->individual_development == '5'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                        
                        
                        
                        <?php } ?>
                        
                      </div>
                    </div>
                    <div class="rate-the-coach-item  academics d-flex justify-content-between" id="rate-the-coach-item-academics">
                      <div class="rate-the-coach-item-left"> Academics ? </div>
                      <div class="rate-the-coach-item-right">
                       
                       <?php if($val_review->academics == '1'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            
                        <?php }elseif($val_review->academics == '2'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        <?php }elseif($val_review->academics == '3'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        
                        <?php }elseif($val_review->academics == '4'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        
                        
                        <?php }elseif($val_review->academics == '5'){ ?>
                        
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                            <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                        
                        
                        
                        <?php } ?>
                       
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rating-coach-form-review border-bottom">
                  
                  <p> Reviews : "{{ $val_review->rate_description }}" </p>
                    
                  @if($val_review->is_flag == "1")
                  <hr>
                  <p> Flag Reviews : "{{ $val_review->flag_rate_description }}" </p>
                  @endif
                  
                </div>
                <div class="rating-coach-form-quetion border-bottom">
                  <div class="rating-coach-form-quetion-item d-flex justify-content-between">
                    <div class="rating-coach-form-quetion-item-question">1. Was your recruiting visit a good respresentation of your experience as a student-athlete under this coach?</div>
                    <div class="rating-coach-form-quetion-item-answer">
                      <span>
                        <input type="radio" name="rating-coach-form-quetion-item-answer-1" value="1" <?php if($val_review->other_q_1 == "1"){ echo 'checked';} ?> >
                      </span>
                      <span>yes</span>
                      <span>
                        <input type="radio" name="rating-coach-form-quetion-item-answer-1" value="0" <?php if($val_review->other_q_1 == "2"){ echo 'checked';} ?>>
                      </span>
                      <span>no</span>
                    </div>
                  </div>
                  <div class="rating-coach-form-quetion-item d-flex justify-content-between">
                    <div class="rating-coach-form-quetion-item-question">2. Did your coach promote inclusion and promote a team environment?</div>
                    <div class="rating-coach-form-quetion-item-answer">
                      <span>
                        <input type="radio" name="rating-coach-form-quetion-item-answer-2" value="1" <?php if($val_review->other_q_2 == "1"){ echo 'checked';} ?> >
                      </span>
                      <span>yes</span>
                      <span>
                        <input type="radio" name="rating-coach-form-quetion-item-answer-2" value="0" <?php if($val_review->other_q_2 == "0"){ echo 'checked';} ?> >
                      </span>
                      <span>no</span>
                    </div>
                  </div>
                </div>
                
           
                
                
              </form>
              
              
                   
                 <div class="d-flex justify-content-between d-none">
                      <div class="col">
                        <h4>This review is flagged</h4>
                      </div>
                      <div class="col">
                        <div class="d-flex">
                          <button type="button" class="btn btn-success mx-2">Keep It</button>
                          <button type="button" class="btn btn-danger  mx-2">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-center">
                      
                    <a href="{{ URL('delete_review/'.$val_review->id) }}" class="btn btn-primary">
                      <span class="bi bi-trash"></span>
                      Delete Review
                    </a>
                    
                  </div>
                  
            </div>
        
        </div>
      </div>
    </div>
                        
                        
                      </tr>
                      @endforeach
                      
                      
                     
                    </tbody>
                  </table>
                </div>

                {!! $get_reviews->appends(request()->input())->links('pagination::bootstrap-4') !!}

              </div>
              <!--<div class="d-flex pagination-a">-->
              <!--   <nav aria-label="Page navigation example">-->
              <!--      <ul class="pagination">-->
              <!--        <li class="page-item">-->
              <!--          <a class="page-link" href="#" aria-label="Previous">-->
              <!--            <span aria-hidden="true">&laquo;</span>-->
              <!--          </a>-->
              <!--        </li>-->
              <!--        <li class="page-item"><a class="page-link" href="#">1</a></li>-->
              <!--        <li class="page-item"><a class="page-link" href="#">2</a></li>-->
              <!--        <li class="page-item"><a class="page-link" href="#">3</a></li>-->
              <!--        <li class="page-item">-->
              <!--          <a class="page-link" href="#" aria-label="Next">-->
              <!--            <span aria-hidden="true">&raquo;</span>-->
              <!--          </a>-->
              <!--        </li>-->
              <!--      </ul>-->
              <!--    </nav>-->
              <!--</div>-->
            </div>
          </div>
        </div>
        
        
      </div>
    </section>
    
    
    <!-- Review Modal -->
    
    <!-- End Review Modal-->
    
    
    
  </main><!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  
@include('custom_admin.admin_js')

</body>

</html>



@endsection






@section('js')


<script src="{{ asset('datatable/datatables.min.js') }}"></script>

<script type="text/javascript">
    
    $(document).ready( function () {
       
        $('#example').DataTable({
            responsive: true,
        });
       
    });

    
</script>

<script>
    
    $('#coach').change(function(){
        
        var selectedValue = $('#coach').val(); // Get the selected value
        
        var url = '{{ URL("admin/review") }}';
        
        var full_url = url + '?coach='+selectedValue;
        
        window.location.href = full_url;
        
    });
    
    
    $('#school').change(function(){
        
        var selectedValue = $('#school').val(); // Get the selected value
        
        var url = '{{ URL("admin/review") }}';
        
        var full_url = url + '?school='+selectedValue;
        
        window.location.href = full_url;
        
    });
    
    
    $('#sport').change(function(){
        
        var selectedValue = $('#sport').val(); // Get the selected value
        
        var url = '{{ URL("admin/review") }}';
        
        var full_url = url + '?sport='+selectedValue;
        
        window.location.href = full_url;
        
    });
    
</script>

@endsection
