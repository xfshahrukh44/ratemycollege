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


h2 {
    font-size: 26px !important;
    margin-left: 20px !important;
    margin-top: 9px !important;
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
                                  
                                  <h3 class="modal-title" id="exampleModalLabel">Make a Changes</h3>
                                  
                              </div>
                              <div class="modal-body">
                                
                                
                                
                                <div class="form-group">
                                  
                                    <br>
                                  
                                     <label> Selected Coach </label>
                                     <select id="single" class="form-control">
                                         <option value="{{ $get_school_by_id->id }}"> {{ App\Models\Wp_coach::find($get_school_by_id->id)->name }} </option>
                                     </select>
                                     
                                    <br><br>
                                    
                                     <label> Selected Sport </label>
                                     <select  id="single3"  class="form-control">
                                         <option value="{{ $get_school_by_id->sports_id }}"> {{ App\Models\Wp_sport::find($get_school_by_id->sports_id)->name }} </option>
                                     </select>
                                     
                                    <br><br>
                                  
                                    
                                        <div class="coach-profile-head d-flex border-bottom">
                                          <div class="coaches-profile-left">
                                            <img src="https://redcraftmedia.net/ratemycollege/wp-content/themes/ratemycollege/images/no-avatar.png" alt="No avatar" width="80" height="80">
                                          </div>
                                          <div class="coaches-profile-right-in-box-title">
                                            <h2>
                                              
                                              {{ $get_school_by_id->name }} - {{ App\Models\Wp_sport::find($get_school_by_id->sports_id)->name }} Coach
                                              
                                              <div class="school-name">
                                                <span style="margin-right: 10px;">
                                                  <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2024/02/Buildings.svg" >
                                                </span>
                                                <span>  {{ App\Models\Wp_school::find($get_school_by_id->school_id)->name }} </span>
                                              </div>
                                            </h2>
                                          </div>
                                        </div>
                                    
                                     
                                    <br>
                                    
                                    <?php $get_school = DB::table('wp_schools')->where('id', '!=', '8')->where('status', '1')->get(); ?>
                                    
                                    
                                    
                                    <form method="post" action="{{ route('add_change_school') }}">
                                        
                                      @csrf
                                      
                                      <input type="hidden" name="old_coach_id" value="{{ $get_school_by_id->id }}" />  
                                      <input type="hidden" name="school_id" value="{{ $get_school_by_id->school_id }}" />
                                      <input type="hidden" name="sports_id" value="{{ $get_school_by_id->sports_id }}" />
                                        
                              
                                     <label> Add New School </label>
                                     <select  id="single4" class="form-control" name="new_school_id">
                                         @foreach($get_school as $key => $val_school)
                                            <option value="{{ $val_school->id }}"> {{ $val_school->name }} </option>
                                         @endforeach
                                     </select>
                              
                                    <br><br>
                                    
                                    <div class="modal-footer justify-content-center">
                                        <a href="{{ route('coach_change_step_1') }}" class="btn btn-secondary"> BACK </a> &nbsp;&nbsp; 
                                        <button id="confirm" type="submit" class="btn btn-primary"> CONFIRM CHANGES </button>
                                    </div>
                                  
                                   </form>
                                    
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
  
  
  $("#single4").select2({
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
    
    $('#continue').change(function(){
        
        var selectedValue1 = $('#single').val();
        var selectedValue2 = $('#single3').val();
        
        var url = '{{ URL("admin/coach_change_step_3") }}';
        
        var full_url = url + '?school='+selectedValue1+'&sport='+selectedValue2;
        
        window.location.href = full_url;
        
    });
    
    
    
    
    
    
</script>



@endsection
