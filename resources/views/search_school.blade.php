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
                <!--<h2>What are you looking for?</h2>-->
                
                
                 <p>Search Result For : {{ $mainsearch }} </p>
                
                @foreach($search_schools as $key => $val_search_school)
                <ul>
                    
                    <li>
                        <a href="{{ URL('school_single?school='.$val_search_school->id) }}">
                            <p class="m-0"> {{ $val_search_school->name }} </p>
                        </a>
                    </li>
                    
                </ul>
                @endforeach
                
                
                <!--<div class="modal modal-find  fade" id="findAschool" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
                <!--    <div class="modal-dialog">-->
                <!--        <div class="modal-content">-->
                <!--            <div class="modal-header">-->
                <!--                <h3 class="modal-title" id="exampleModalLabel">FIND A SCHOOL</h3>-->
                <!--            </div>-->
                <!--            <div class="modal-body">-->
                <!--                <div class="find-box d-flex">-->
                <!--                    <select id="single" class="form-select form-control">-->
                <!--                        <option> Option 1 </option>-->
                <!--                        <option> Option 1 </option>-->
                <!--                        <option> Option 1 </option>-->
                <!--                    </select>-->
                <!--                    <button type="button" class="btn btn-primary">-->
                <!--                        Search-->
                <!--                    </button>-->
                <!--                </div>-->
                <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cancel</button>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                
                
                <!--<div class="modal modal-find  fade" id="findAcoach" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
                <!--    <div class="modal-dialog">-->
                <!--        <div class="modal-content">-->
                <!--            <div class="modal-header">-->
                <!--                <h3 class="modal-title" id="exampleModalLabel">FIND A COACH</h3>-->
                <!--            </div>-->
                <!--            <div class="modal-body">-->
                <!--                <div class="find-box">-->
                <!--                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Search for a coach or a school">-->
                <!--                    <button type="button" class="btn btn-primary">-->
                <!--                        Search-->
                <!--                    </button>-->
                <!--                </div>-->
                <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cancel</button>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                
                
                
                <!--<div class="modal modal-find  fade" id="rateacoach" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
                <!--    <div class="modal-dialog">-->
                <!--        <div class="modal-content">-->
                <!--            <div class="modal-header">-->
                <!--                <h3 class="modal-title" id="exampleModalLabel">RATE A COACH</h3>-->
                <!--            </div>-->
                <!--            <div class="modal-body">-->
                <!--                <div class="find-box">-->
                <!--                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Search for a coach or a school">-->
                <!--                    <button type="button" class="btn btn-primary">-->
                <!--                        Search-->
                <!--                    </button>-->
                <!--                </div>-->
                <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Cancel</button>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                
                
                
            </div>
        </div>
    </div>
    
@endsection



@section('js')



 

@endsection
