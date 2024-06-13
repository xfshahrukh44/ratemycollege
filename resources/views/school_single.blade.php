@extends('layouts.backend')

@section('css')
<style>

body {
    font-family: "Oswald", sans-serif !important;
}

</style>
@endsection


@section('content')


<?php 

    // if(isset($_GET['searchOption'])){
    
           
    //   if($_GET['searchOption'] == "school"){
          
    //       $search_value = $_GET['searchOption'];
                  
    //       $school_idd = DB::table('wp_schools')->where('name', 'like', '%'.$search_value.'%')->first();
          
    //       if($school_idd)
    //       {
            
    //       dd()
        
          
              
    //       }
    //       else
    //       {
    //         return redirect('/');
    //       }
          
           
    //   }
       
        
    // }
    
    
     $get_school_by_id = DB::table('wp_schools')->where('id', $school_id)->where('status', '1')->first();        
    
?>


    <div class="content-area container-fluid">
      <div class="container">
        <div class="school-out ">
          <div class="school-banner border">
            <div class="wrap">
              <h2> {{ $get_school_by_id->name }} </h2>
              <div class="coach-actions mistake-popup">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#seeAmistake">
                    See A Mistake?
                </button>
              </div>
            </div>
          </div>
          <div class="school-detail">
            <div class="wrap">
              <div class="school-detail-in">
                <div class="school-detail-left col-50">
                  <div class="school-detail-right-detail">
                    <div class="cont-head">
                      <h3>School details</h3>
                      <div class="school-detail-content-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-men-tab" data-bs-toggle="pill" data-bs-target="#pills-men" type="button" role="tab" aria-controls="pills-men" aria-selected="true">Men</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-women-tab" data-bs-toggle="pill" data-bs-target="#pills-women" type="button" role="tab" aria-controls="pills-women" aria-selected="false">Women</button>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="school-detail-right-detail-content">
                      <div class="school-logo">
                        <img src="img/school-logo.png">
                      </div>
                      <ul class="school-feature">
                        <li class="address">
                          <span>
                            <img src="img/MapPin.png">
                          </span> {{ $get_school_by_id->address }}
                        </li>
                        
                        <?php 
                        
                            $conference = explode(",", $get_school_by_id->conference_id);
                            $count_school_conference = count($conference);
                            
                        ?>
                        
                        <li class="conf">
                          <span>
                            <img src="img/UsersFour.png">
                          </span> {{ $count_school_conference }} Conference
                        </li>
                        
                        <?php 
                            
                            
                            $sport = explode(",", $get_school_by_id->sports_id);
                            $count_sport_conference = count($sport);
                            
                        ?>
                        
                        <li class="no_sport">
                          <span>
                            <img src="img/sport.png">
                          </span> {{ $count_sport_conference }} Sports
                        </li>
                        
                          <!-- <li class="no_sport">
                          <span>
                            <img src="img/Star.png">
                          </span> 4.7/5 (638)
                        </li> -->
                          
                      </ul>
                    </div>
                  </div>
                </div>
                
                
                
                <div class="school-detail-right col-50">
                  <div class="school-detail-content">
                    <div class="cont-head">
                      <h3>COACHES LIST</h3>
                    </div>
                    
                    <?php 
                    
                        $get_coaches_by_school_id = DB::table('wp_coaches')->where('school_id', $get_school_by_id->id)->where('status', '1')->get();
                        $get_male_coaches = DB::table('wp_coaches')->where('school_id', $get_school_by_id->id)->where('gender_id', '1')->where('status', '1')->get();
                        $get_female_coaches = DB::table('wp_coaches')->where('school_id', $get_school_by_id->id)->where('gender_id', '2')->where('status', '1')->get();
                    
                    ?>
                    
                    <div class="tab-content " id="pills-tabContent">
                      
                      <div class="tab-pane fade show active" id="pills-men" role="tabpanel" aria-labelledby="pills-men-tab">
                          <div id="school-detail-content-men">
                              
                            @if(count($get_male_coaches) > 0)
                              
                            <ul class="coach-list">
                              
                              @foreach($get_male_coaches as $key => $val_male_coach)
                              
                              <?php 
                                    
                                    $get_sprorts_by_id_male = DB::table('wp_sports')->where('id', $val_male_coach->sports_id)->where('status', '1')->first();
                                
                              ?>
                              
                              <li>
                                <div class="coach-item">
                                    <span class="sport"> {{ $get_sprorts_by_id_male->name ?? : 'Unknown Name' }} </span>
                                    <p class="coach-name">
                                        {{ $val_male_coach->name }}
                                    </p>
                                </div>
                                <a href="{{ URL('coachbyid/'.$val_male_coach->id) }}" class="btn">Rate</a>
                              </li>
                              @endforeach
                             
                            </ul>
                            
                            @else
                            
                            <h5 style="font-family: Oswald, sans-serif;" class="text-center"> No Record Found </h5>
                            
                            @endif
                            
                          </div>
                      </div>
                      
                      <div class="tab-pane fade" id="pills-women" role="tabpanel" aria-labelledby="pills-women-tab">
                         
                         <div id="school-detail-content-women">
                             
                            @if(count($get_female_coaches) > 0)
                             
                            <ul class="coach-list">
                                
                              @foreach($get_female_coaches as $key => $val_female_coach)
                              
                              <?php 
                                    
                                    $get_sprorts_by_id_female = DB::table('wp_sports')->where('id', $val_female_coach->sports_id)->where('status', '1')->first();
                                
                              ?>
                              
                              <li>
                                <div class="coach-item">
                                    <span class="sport"> {{ $get_sprorts_by_id_female->name }} </span>
                                    <p class="coach-name">
                                        {{ $val_female_coach->name }}
                                    </p>
                                </div>
                                <a href="{{ URL('coachbyid/'.$val_female_coach->id) }}" class="btn">Rate</a>
                              </li>
                              @endforeach
                              
                            </ul>
                            
                            @else
                            
                             <h5 style="font-family: Oswald, sans-serif;" class="text-center"> No Record Found </h5>
                            
                            @endif
                            
                            
                          </div>
                      </div>
                      
                      
                    </div>
                    
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal modal-mistake  fade" id="seeAmistake" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Submit a CORRECTION</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="correct-school">
                        <div class="school">
                            <div class="inner">
                                <img src="img/school.png">
                                <p> {{ $get_school_by_id->name }} </p>
                            </div>
                        </div>
                        <div class="d-flex form-box">
                            <form id="" action="{{ route('add_submit_correction') }}" method="post" >

                                @csrf
                                
                                <div class="frm-g">
                                    <label>Sport (required)</label>
                                    <select class="form-select" name="sport_id" aria-label="Default select example">
                                      <option selected>Please choose an option</option>
                                      
                                      @foreach($sport as $key => $val_csc)
                                      <option value="{{ $val_csc }}"> {{ App\Models\Wp_sport::find($val_csc)->name }} </option>
                                      @endforeach
                                      
                                    </select>
                                </div>
                                <div class="frm-g">
                                    <label>New coach (required)</label>
                                    <input type="text" name="new_coach_id"   class="form-control" id="" placeholder="Enter Coach Name" required>
                                </div>
                                <div class="frm-g">
                                    <label>Your Email (required)</label>
                                    <input type="email" name="email" class="form-control" id="emailAddress" placeholder="Enter Email Address" required>
                                </div>
                                <div class="submit">
                                    <button type="email" class="btn" id=""> SEND </button>
                                </div>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

@endsection



@section('js')
 

@endsection
