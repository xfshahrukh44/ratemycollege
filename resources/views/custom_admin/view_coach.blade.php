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
      <h1> VIEW ALL COACHES </h1>
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
                
                    <a href="{{ route('add_coach') }}" class="btn btn-primary btn-accept">
                        <span class="fa fa-edit"> </span> ADD NEW COACH
                        
                    </a>
                    
                    <br>
                    <br>
                
                <div class="container">
                    <!-- Display success message -->
                            @if(session('message'))
                        <div class="alert alert-success alert-dismissible mt-3" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    
                </div>
                
                <div class="table-border">
                    
                   
                        
                     <table id="examplee" class="table" >
                       <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Coach</th>
                          <th scope="col">School</th>
                          <th scope="col">Sport</th>
                          <th scope="col">Updated at</th>
                          <!--<th scope="col">Action</th>-->
                        </tr>
                       </thead>
                       <tbody>
                          
                          
                        @foreach($get_coachchanges as $key => $val_coach_change)
                        <tr>
                          
                          <td> {{ $key+1 }} </td>
                          <td> {{ App\Models\Wp_coach::find($val_coach_change->id)->name }} </td>
                          <td> {{ App\Models\Wp_school::find($val_coach_change->school_id)->name }} </td>
                          <td> {{ App\Models\Wp_sport::find($val_coach_change->sports_id)->name }} </td>
                          <td> {{ $val_coach_change->updated_at }} </td>
                          
                          <!--<td>-->
                          <!--     <a href="{{ URL('admin/view_coach_edit/'.$val_coach_change->id) }}" class="btn btn-primary btn-reject">-->
                          <!--          <span class="fa fa-edit"> </span> EDIT-->
                          <!--      </a>-->
                          <!--</td>-->
                           
                        </tr>
                        @endforeach
                        
                        
                      </tbody>
                    </table>
                               
                        
                </div>
              

              
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
    
    $('#next_btn').change(function(){
        
        var selectedValue = $('#next_btn').val(); // Get the selected value
        
        var url = '{{ URL("admin/coach_change_step_2") }}';
        
        var full_url = url + '?school='+selectedValue;
        
        window.location.href = full_url;
        
    });
    

    
</script>



@endsection
