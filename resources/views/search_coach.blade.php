@extends('layouts.backend')

@section('css')
<style>

body {
    font-family: "Oswald", sans-serif !important;
}


.hero-area .search-box-area ul li a{
    display: flex;
    flex-direction: column;
    /*align-items: center;*/
    justify-content: center;
    background: #E93E22;
    border-radius: 17px !important;
    padding: 20px 0 !important;
    color:#fff !important;
    margin-bottom: 20px !important;
    font-size: 25px !important;
    
}

.hero-area .search-box-area ul li {
    width: 100% !important;
}


</style>
@endsection


@section('content')

<?php 

$mainsearch = "";

if(isset($_GET["mainsearch"]))
{
    
    $mainsearch = $_GET["mainsearch"];
    
}else
{
    
    
}

?>

    <div class="container-fluid search-result-area">
        <div class="container">
            <!--<div class="banner-area">-->
            <!--    <img src="{{ asset('img/banner-hm.png')}}">-->
            <!--</div>-->
            
            <div class="search-box-area">
                
                <p>Search Result For : {{ $mainsearch }} </p>
                
                 @foreach($search_coaches as $key => $val_search_coach)
                <ul>
                    
                    <li>
                        <a href="{{ URL('coach_single?coach='.$val_search_coach->id) }}">
                            <p class="m-0"> {{ $val_search_coach->name }} </p>
                        </a>    
                    </li>
                    
                </ul>
                @endforeach
           
                
          
            </div>
        </div>
    </div>
    
@endsection



@section('js')



 

@endsection
