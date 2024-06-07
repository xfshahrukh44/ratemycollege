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
                                  
                                     <label> Select Coach </label>
                                     <select id="next_btn" class="form-control">
                                         <option value="0"> Select Coach </option>
                                         @foreach($get_coach as $key => $val_coach)
                                         <option value="{{ $val_coach->id }}"> {{ $val_coach->name }} </option>
                                         @endforeach
                                     </select>
                                   
                              
                                </div>
                              
                              <br><br>
                              
                              
                              
                              
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

  $("#next_btn").select2({
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
    
    $('#next_btn').change(function(){
        
        var selectedValue = $('#next_btn').val(); // Get the selected value
        
        var url = '{{ URL("admin/school_change_step_2") }}';
        
        var full_url = url + '?coach='+selectedValue;
        
        window.location.href = full_url;
        
    });
    

    
</script>



@endsection
