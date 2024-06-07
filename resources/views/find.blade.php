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
                
                <div class="" id="findAschool" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                
                                
                                
                                @if($type == '1')
                                    <h3 class="modal-title" id="exampleModalLabel">FIND A SCHOOL</h3>
                                @elseif($type == '2')
                                    <h3 class="modal-title" id="exampleModalLabel">FIND A COACH</h3>
                                @elseif($type == '3')
                                    <h3 class="modal-title" id="exampleModalLabel">RATE A COACH</h3>
                                @endif
                                    
                              
                        
                            </div>
                            
                            
                            @if($type == '1')
                            <form method="get" id="form-1" action="{{ URL('school_single') }}" >
                                
                            <div class="modal-body">
                                <div class="find-box d-flex">
                                    
                                    
                                        
                                        <select name="school" id="single" class="form-select form-control">
                                            <option value="0"> Select a School </option>
                                        @foreach($get_all_school as $key => $val_get_school)
                                            
                                            <option value="{{ $val_get_school->id }}"> {{ $val_get_school->name }} </option>
                                            
                                        @endforeach
                                    </select>
                                    
                                    <button type="submit" class="btn btn-primary" style="width: 150px;}">
                                        Search
                                    </button>
                                        
                                   
                                </div>
                                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cancel</button>-->
                            </div>
                             </form>
                            
                            @elseif($type == '2')
                            <form method="get" id="form-2" action="{{ URL('coach_single') }}" >
                                
                            <div class="modal-body">
                                <div class="find-box d-flex">
                                    
                                    <select  name="coach" id="single2" class="form-select form-control">
                                        <option value="0"> Select a Coach </option>
                                        @foreach($get_all_coaches as $key => $val_get_coaches)
                                            
                                            <option value="{{ $val_get_coaches->id }}"> {{ $val_get_coaches->name }} </option>
                                            
                                        @endforeach
                                    </select>
                                    
                                    <button type="submit" class="btn btn-primary" style="width: 150px;}">
                                        Search
                                    </button>
                                </div>
                                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cancel</button>-->
                            </div>
                            
                             </form>
                            @elseif($type == '3')
                            <form method="get" id="form-3" action="{{ URL('coach_single') }}" >
                                
                            <div class="modal-body">
                                <div class="find-box d-flex">
                                    
                                    <select  name="coach" id="single2" class="form-select form-control">
                                        <option value="0"> Select a Coach </option>
                                        @foreach($get_all_coaches as $key => $val_get_coaches)
                                            
                                            <option value="{{ $val_get_coaches->id }}"> {{ $val_get_coaches->name }} </option>
                                            
                                        @endforeach
                                    </select>
                                    
                                    <button type="submit" class="btn btn-primary" style="width: 150px;}">
                                        Search
                                    </button>
                                    
                                </div>
                                
                                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cancel</button>-->
                            </div>
                            
                             </form>
                            @endif
                            
                            <a href="{{ URL('/') }}" class="btn-closed" style="btn btn-secondary"> Cancel </a>
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
