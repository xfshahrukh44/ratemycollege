@extends('layouts.backend')

<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

@section('css')
<style>

body {
    font-family: "Oswald", sans-serif !important;
}


.select2-container .select2-selection--single {
    height: 65px !important;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 58px !important;
}


.modal-dialog {
    max-width: 900px !important;
    margin: 1.75rem auto;
}


</style>
@endsection


@section('content')


    <div class="container-fluid hero-area">
        <div class="container">
            <div class="banner-area">
                <img src="{{ asset('img/banner-hm.png')}}">
            </div>
            <div class="search-box-area">
                <!--<h2>What are you looking for?</h2>-->
                
                <div class="" id="findAschool" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            
                                             
                            <div class="container">
                                <!-- Display success message -->
                                        @if(session('message'))
                                    <div class="alert alert-success alert-dismissible mt-3" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                
                            </div>
                  
                            
                            <div class="modal-header">
                                
                                <h3 class="modal-title" id="exampleModalLabel"> <a href="{{ URL('/') }}" style="btn btn-secondary"> <span class=""></span> </a> Login </h3>
                           
                            </div>
                            
                            
                           
                            <form method="post" id="form-1" action="{{ route('post_login') }}" >
                            
                            @csrf
                                
                            <div class="modal-body">
                                <div class="find-box">
                                    
                                    
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input type="text" name="email" class="form-control" placeholder="Enter Email Address" />
                                    </div>
                                    
                                    <br>
                                    
                                    <div class="form-group">
                                        <label>Password </label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Email Address" />
                                    </div>
                                    
                                    <br>
                                    
                                   <button type="submit" class="btn btn-danger"> Login </button>
                                   
                                </div>
                                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cancel</button>-->
                            </div>
                             </form>
                            
                          
                            
                            
                        </div>
                        
                    
                        <br>
                        
                        
                        
                    </div>
                </div>
                
                <div>
                    
                  
                    
                </div>
                
                
            </div>
        </div>
    </div>

@endsection



@section('js')
 
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    
    <script>
    
      $("#single").select2({
          placeholder: "Select a School",
          allowClear: true,
      });
     
     
       $("#single2").select2({
          placeholder: "Select a Coach",
          allowClear: true,
      });
      
       $("#single3").select2({
          placeholder: "Select a Coach",
          allowClear: true,
      });
      
      
    </script>
    
    

@endsection
