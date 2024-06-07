@extends('layouts.backend')

<!--Toaster Css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

<link rel="stylesheet" type="text/css" href="{{ asset('datatable/datatables.min.css') }}" >

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />



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


.crnt-school {
    width: 100% !important;
}


.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    height: 40px !important;
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
      <h1>Coaching Changes</h1>
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
            <div class="col-md-2">
              <!-- <p>Showing 82 Ratings <span>(5 Flagged)</span></p> -->
            </div>
            
            
          
            
            
          </div>
          
          
          <div class="row" style="display:flex; justify-content:center;">
              
              
            <div class="col-xxl-10 col-md-10" >
              <div class="coaches">
                  
                  <div class="container">
                    
                    <!-- Display success message --> 
                    @if(session('message'))
                        <div class="alert alert-success alert-dismissible mt-3" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    
                </div>
                
                <div class="table-border">
                        
                           
                        <div class="school-changes-m" id="changeSchool" tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered modal-md">
                            <div class="modal-content">
                              <div class="modal-header border-bottom-0">
                                  
                                  <!--<h3 class="modal-title" id="exampleModalLabel">Make a Changes</h3>-->
                                  
                              </div>
                              <div class="modal-body">
                                
                                
                                
                                <div class="form-group">
                                  
                                    <br>
                                  
                                     <label> Selected Coach </label>
                                     <select id="single" class="form-control">
                                         <option value="{{ $get_coach_by_id->id }}"> {{ $get_coach_by_id->name }} </option>
                                     </select>
                                     
                                    <br><br>
                                     
                                     <?php 
                                     
                                        $get_all_sport_by_school = DB::table('wp_schools')->where('id', $get_coach_by_id->school_id)->where('status', '1')->first();
                                        
                                        $g_coa = $get_all_sport_by_school->sports_id;
                                        
                                        $coaches = explode(",", $g_coa);
                                        
                                        // dd($get_all_sport_by_school);
                                        
                                     
                                     ?>
                                     
                                     <label> Select Sport </label>
                                     <select  id="single3"  class="form-control">
                                         @foreach($coaches as $val_sport)
                                         <option value="{{ $val_sport }}"> {{ App\Models\Wp_sport::find($val_sport)->name }} </option>
                                         @endforeach
                                     </select>
                                     
                                    <br>
                              
                                </div>
                              
                                <br><br>
                              
                              
                              <div class="modal-footer justify-content-center">
                                <a href="{{ route('school_change_step_1') }}" class="btn btn-secondary"> BACK </a> &nbsp;&nbsp; 
                                <button id="continue" type="button" class="btn btn-primary"> CONTINUE </button>
                              </div>
                              
                              
                            </div>
                          </div>
                        </div>
                        <!-- End Review Modal-->
                                        
                
                </div>
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
    <div class="modal fade" id="re" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-sm">
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
                   Nicole Hartford
                  <div class="school-name">
                    <span style="margin-right: 10px;">
                      <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2024/02/Buildings.svg" >
                    </span>
                    <span> Indiana University Northwest </span>
                  </div>
                </h2>
              </div>
            </div>
            <div class="rating-coach-form-out border-bottom">
              <form id="rating-coach-form">
                <div class="rating-coach-form-star border-bottom" data-post_id="42596" data-user_id="0">
                  <div class="rating-coach-form-star-left">
                    <div class="rate-the-coach-item iq d-flex justify-content-between" id="rate-the-coach-item-iq">
                      <div class="rate-the-coach-item-left"> IQ ? </div>
                      <div class="rate-the-coach-item-right">
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="2"></span>
                        <span class="rating-coach-star-rating-form bi bi-star" data-index="3"></span>
                        <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        <span class="rating-coach-star-rating-form bi bi-star" data-index="5"></span>
                      </div>
                    </div>
                    <div class="rate-the-coach-item personable d-flex justify-content-between" id="rate-the-coach-item-personable">
                      <div class="rate-the-coach-item-left"> Ethical ? </div>
                      <div class="rate-the-coach-item-right">
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="2"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="3"></span>
                        <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        <span class="rating-coach-star-rating-form bi bi-star" data-index="5"></span>
                      </div>
                    </div>
                    <div class="rate-the-coach-item communication d-flex justify-content-between" id="rate-the-coach-item-communication">
                      <div class="rate-the-coach-item-left"> Communication ? </div>
                      <div class="rate-the-coach-item-right">
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="2"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="3"></span>
                        <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        <span class="rating-coach-star-rating-form bi bi-star" data-index="5"></span>
                      </div>
                    </div>
                  </div>
                  <div class="rating-coach-form-star-right">
                    <div class="rate-the-coach-item staff d-flex justify-content-between" id="rate-the-coach-item-staff">
                      <div class="rate-the-coach-item-left"> Staff ? </div>
                      <div class="rate-the-coach-item-right">
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="2"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="3"></span>
                        <span class="rating-coach-star-rating-form bi bi-star" data-index="4"></span>
                        <span class="rating-coach-star-rating-form bi bi-star" data-index="5"></span>
                      </div>
                    </div>
                    <div class="rate-the-coach-item player-individual-development d-flex justify-content-between" id="rate-the-coach-item-player-individual-development">
                      <div class="rate-the-coach-item-left"> Player/Individual Development ? </div>
                      <div class="rate-the-coach-item-right">
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="2"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="3"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="4"></span>
                        <span class="rating-coach-star-rating-form bi bi-star" data-index="5"></span>
                      </div>
                    </div>
                    <div class="rate-the-coach-item  academics d-flex justify-content-between" id="rate-the-coach-item-academics">
                      <div class="rate-the-coach-item-left"> Academics ? </div>
                      <div class="rate-the-coach-item-right">
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="1"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="2"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="3"></span>
                        <span class="rating-coach-star-rating-form bi bi-star-fill" data-index="4"></span>
                        <span class="rating-coach-star-rating-form bi bi-star" data-index="5"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rating-coach-form-review border-bottom">
                  <p>“That was an amazing experience, really lots of skills I hae gained That was an amazing experience, really lots of skills I hae gained  That was an amazing experience, really lots of skills I hae gained That was an amazing experience, really lots of skills I have gained”</p>
                </div>
                <div class="rating-coach-form-quetion border-bottom">
                  <div class="rating-coach-form-quetion-item d-flex justify-content-between">
                    <div class="rating-coach-form-quetion-item-question">1. Was your recruiting visit a good respresentation of your experience as a student-athlete under this coach?</div>
                    <div class="rating-coach-form-quetion-item-answer">
                      <span>
                        <input type="radio" name="rating-coach-form-quetion-item-answer-1" value="1">
                      </span>
                      <span>yes</span>
                      <span>
                        <input type="radio" name="rating-coach-form-quetion-item-answer-1" value="0">
                      </span>
                      <span>no</span>
                    </div>
                  </div>
                  <div class="rating-coach-form-quetion-item d-flex justify-content-between">
                    <div class="rating-coach-form-quetion-item-question">2. Did your coach promote inclusion and promote a team environment?</div>
                    <div class="rating-coach-form-quetion-item-answer">
                      <span>
                        <input type="radio" name="rating-coach-form-quetion-item-answer-2" value="1">
                      </span>
                      <span>yes</span>
                      <span>
                        <input type="radio" name="rating-coach-form-quetion-item-answer-2" value="0">
                      </span>
                      <span>no</span>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="d-flex justify-content-between">
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
            <button type="button" class="btn btn-primary">
              <span class="bi bi-trash"></span>
              Delete Review
            </button>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="modal fade school-changes-m" id="changeSchool" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
              
              <!--<h3 class="modal-title" id="exampleModalLabel">Make a Changes</h3>-->
              
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
            
            <!--<div class="coach-profile-head d-flex border-bottom">-->
            <!--  <div class="coaches-profile-left">-->
            <!--    <img src="https://redcraftmedia.net/ratemycollege/wp-content/themes/ratemycollege/images/no-avatar.png" alt="No avatar" width="80" height="80">-->
            <!--  </div>-->
            
              <!--<div class="coaches-profile-right-in-box-title">-->
              <!--  <h2>-->
              <!--     Nicole Hartford-->
              <!--  </h2>-->
              <!--</div>-->
            
            
            <!--</div>-->
            
            
            <div class="school-changes d-flex justify-content-between">
              
              <a href="{{ URL('coach_change_step_1') }}" style="padding: 10px;">
                  <div class="crnt-school text-center" style="border: 1px solid #d3d1d1;border-radius: 20px;padding: 15px;">
                     <br><br>
                    <span class="fa fa-user"></span>
                    <h3> Change Coach </h3>
                    <br><br>
                  </div>
              </a>
            
              &nbsp;&nbsp;
              
              <a href="" style="padding: 10px;">
              <div class="crnt-school text-center" style="border: 1px solid #d3d1d1;border-radius: 20px;padding: 15px;">
                  <br><br>
                 <span class="fa fa-school"></span>
                 <h3> Change School </h3>
                <br><br>
              </div>
              </a>
              
            </div>
            <!--<div class="d-flex fl-width">-->
            <!--  <label>New School</label>-->
            <!--  <select class="form-select" aria-label="Default select example">-->
            <!--    <option selected>Please choose the new school</option>-->
            <!--    <option value="1">One</option>-->
            <!--    <option value="2">Two</option>-->
            <!--    <option value="3">Three</option>-->
            <!--  </select>-->
            <!--</div>-->
          </div>
          
          
          <!--<div class="modal-footer justify-content-center">-->
          <!--  <button type="button" class="btn btn-primary">-->
          <!--    CONFIRM CHANGES-->
          <!--  </button>-->
          <!--</div>-->
        </div>
      </div>
    </div>
    <!-- End Review Modal-->
  </main><!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('custom_admin.admin_js')


</body>

</html>


@endsection






@section('js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    
    // Set the options that I want
    toastr.options = {
    "closeButton": true,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "1000",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear", 
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }

</script>


<script src="{{ asset('datatable/datatables.min.js') }}"></script>



<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>

  $("#single").select2({
      placeholder: "Select a School",
      allowClear: true,
  });
  
   $("#single3").select2({
      placeholder: "Select a Coach", 
      allowClear: true,
  });
  
  
</script>


<script type="text/javascript">
    
    $(document).ready( function () {
       
        $('#example').DataTable({
            order: [[0, "desc"]],
            responsive: true,
        });
       
    });

    
</script>


<script>
    
    $('#continue').click(function(){
        
        var selectedValue1 = $('#single').val();
        var selectedValue2 = $('#single3').val();
        
        var url = '{{ URL("admin/school_change_step_3") }}';
        
        var full_url = url + '?coach='+selectedValue1+'&sport='+selectedValue2;
        
        window.location.href = full_url;
        
    });
    
    
</script>



@endsection
