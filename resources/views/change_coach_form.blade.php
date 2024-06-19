@extends('layouts.backend')


<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


@section('css')
<style>

/**
* Template Name: NiceAdmin
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Updated: Mar 17 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap')
:root {
  scroll-behavior: smooth;
}

body {
  font-family: "Oswald", sans-serif;
  background: #fff;
  color: #444444;
}

a {
  color: #E93E22;
  text-decoration: none;
}

a:hover {
  color: #1F2C45;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Oswald", sans-serif;
}
.page-link{
  color: #E93E22;
}
/*Form*/
.btn-primary{
  font-family: "Oswald", sans-serif !important;
  background:#E93E22;
  color: #fff;
  border-color: #E93E22;
  font-weight: 700;
  border-radius: 12px;
}
.btn-primary-bordered{
  border-color: #E93E22;
  color: #E93E22;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  border-radius: 12px;
  padding: 10px 10px;
}
.btn-primary-bordered:hover{
  background: #E93E22;
  color: #fff;
}
.btn-primary-accept{
  font-family: "Oswald", sans-serif !important;
  background:#f3fae7;
  color: #85cc14;
  border-color: #f3fae7;
  font-weight: 700;
  font-size: 14px;
  margin-left: 10px;
  padding: 12px 10px;
  border-radius: 12px;
}
.btn-primary-accept:hover{
  background:#85cc14;
  color: #f3fae7;
  border-color: #85cc14;
}
.btn-reject{
  font-family: "Oswald", sans-serif !important;
  background:#fde9ed;
  color: #ea274b;
  border-color: #fde9ed;
  font-weight: 700;
  font-size: 14px;
  margin-left: 10px;
  padding: 12px 10px;
   border-radius: 12px;
}
.btn-reject:hover{
  background:#ea274b;
  color: #fde9ed;
  border-color: #ea274b;
}
.form-select{
  border-radius: 40px !important;
}
.table-border {
    border: 1px solid #ddd;
    border-radius: 15px;
    overflow: hidden;
    margin-bottom: 30px;
}
.table thead tr th{
    background:#f0f0f0;
    font-weight: 400;
    color: #333;
    padding: 15px 15px;
}
.table tbody tr td{
    background:#fff;
    font-weight: 400;
    color: #333;
    padding: 15px 15px;
    vertical-align: middle;
}
.table tbody tr:last-child td{
  border-bottom: none;
}
.pagination-a{
  justify-content: flex-end;
}

.modal .modal-content{
  border-radius: 24px;
}

#showReview.modal .modal-content .modal-header {
  padding: 0;
}


.modal .modal-content .modal-header{
    border: none !important;
    padding: 0px !important;
}


.modal .modal-content .btn-close{
      font-size: 60px;
    position: absolute;
    right: 20px;
    top: 10px;
    z-index: 2;
}
.modal .modal-content .modal-body{
  padding: 40px 40px 0 40px;
}
.modal .coach-profile-head{
  padding: 0 0 20px 0;
}
.modal .coach-profile-head .coaches-profile-right-in-box-title{
  display: flex;
  align-items: center;
  padding-left: 20px;
}
.modal .coach-profile-head .coaches-profile-right-in-box-title h2{
  font-size: 20px;
  font-weight: 600;
  margin: 0;
}
.modal .coach-profile-head .coaches-profile-right-in-box-title h2 .school-name{
  margin-top: 10px;
  font-weight: 400;
  font-size: 15px;
}
.modal .rating-coach-form-out .rating-coach-form-star{
  padding: 20px 0;
}
.modal .rating-coach-form-out .rating-coach-form-star .rate-the-coach-item{
  line-height: 40px;
}
.modal .rating-coach-form-out .rating-coach-form-star .rate-the-coach-item .rating-coach-star-rating-form{
  font-size: 20px;
  color: #ffb900;
}
.modal .rating-coach-form-out .rating-coach-form-review{
  padding: 20px 0;
  font-style: italic;
}
.modal .rating-coach-form-out .rating-coach-form-quetion{
  padding: 20px 0;

}
.modal .rating-coach-form-out .rating-coach-form-quetion-item{
  margin-bottom: 20px;
}
.modal .rating-coach-form-out .rating-coach-form-quetion-item:last-child{
  margin-bottom: 0;
}
.modal .rating-coach-form-out .rating-coach-form-quetion .rating-coach-form-quetion-item-question{
  width: 60%;
}
.modal .modal-footer{
  border-top: none;
}
.modal.school-changes-m .school-changes {
    padding: 20px 0;
}
.modal.school-changes-m .school-changes .crnt-school{
  width: 50%;
}
.d-flex.fl-width {
    flex-direction: column;
}
/*--------------------------------------------------------------
# Main
--------------------------------------------------------------*/
#main {
  margin-top: 60px;
  padding: 20px 30px;
  transition: all 0.3s;
}

@media (max-width: 1199px) {
  #main {
    padding: 20px;
  }
}

/*--------------------------------------------------------------
# Page Title
--------------------------------------------------------------*/
.pagetitle {
  margin-bottom: 0;
}

.pagetitle h1 {
  font-size: 22px;
  margin-bottom: 0;
  font-weight: 600;
  color: #012970;
  text-transform: uppercase;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
  background: #4154f1;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #6776f4;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Override some default Bootstrap stylings
--------------------------------------------------------------*/
/* Dropdown menus */
.dropdown-menu {
  border-radius: 4px;
  padding: 10px 0;
  animation-name: dropdown-animate;
  animation-duration: 0.2s;
  animation-fill-mode: both;
  border: 0;
  box-shadow: 0 5px 30px 0 rgba(82, 63, 105, 0.2);
}

.dropdown-menu .dropdown-header,
.dropdown-menu .dropdown-footer {
  text-align: center;
  font-size: 15px;
  padding: 10px 25px;
}

.dropdown-menu .dropdown-footer a {
  color: #444444;
  text-decoration: underline;
}

.dropdown-menu .dropdown-footer a:hover {
  text-decoration: none;
}

.dropdown-menu .dropdown-divider {
  color: #a5c5fe;
  margin: 0;
}

.dropdown-menu .dropdown-item {
  font-size: 14px;
  padding: 10px 15px;
  transition: 0.3s;
}

.dropdown-menu .dropdown-item i {
  margin-right: 10px;
  font-size: 18px;
  line-height: 0;
}

.dropdown-menu .dropdown-item:hover {
  background-color: #f6f9ff;
}

@media (min-width: 768px) {
  .dropdown-menu-arrow::before {
    content: "";
    width: 13px;
    height: 13px;
    background: #fff;
    position: absolute;
    top: -7px;
    right: 20px;
    transform: rotate(45deg);
    border-top: 1px solid #eaedf1;
    border-left: 1px solid #eaedf1;
  }
}

@keyframes dropdown-animate {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }

  0% {
    opacity: 0;
  }
}

/* Light Backgrounds */
.bg-primary-light {
  background-color: #cfe2ff;
  border-color: #cfe2ff;
}

.bg-secondary-light {
  background-color: #e2e3e5;
  border-color: #e2e3e5;
}

.bg-success-light {
  background-color: #d1e7dd;
  border-color: #d1e7dd;
}

.bg-danger-light {
  background-color: #f8d7da;
  border-color: #f8d7da;
}

.bg-warning-light {
  background-color: #fff3cd;
  border-color: #fff3cd;
}

.bg-info-light {
  background-color: #cff4fc;
  border-color: #cff4fc;
}

.bg-dark-light {
  background-color: #d3d3d4;
  border-color: #d3d3d4;
}

/* Card */
.card {
  margin-bottom: 30px;
  border: none;
  border-radius: 24px;
  border: 1px solid #E3E3E3;
  /*box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);*/
}

.card-header,
.card-footer {
  border-color: #ebeef4;
  background-color: #fff;
  color: #798eb3;
  padding: 15px;
}

.card-title {
  padding: 20px 0 15px 0;
  font-size: 18px;
  font-weight: 500;
  color: #012970;
  font-family: "Poppins", sans-serif;
}

.card-title span {
  color: #899bbd;
  font-size: 14px;
  font-weight: 400;
}

.card-body {
  padding: 0 20px 20px 20px;
}

.card-img-overlay {
  background-color: rgba(255, 255, 255, 0.6);
}

/* Alerts */
.alert-heading {
  font-weight: 500;
  font-family: "Poppins", sans-serif;
  font-size: 20px;
}

/* Close Button */
.btn-close {
  background-size: 25%;
}

.btn-close:focus {
  outline: 0;
  box-shadow: none;
}


.content-area .school-out .school-detail-in .col-50 {
    border: 1px solid #CFD2D0;
    padding: 30px;
    border-radius: 16px;
    width: 49%;
    height: auto !important;
    max-height: 745px !important;
    overflow-y: scroll !important;
}


.content-area .school-out .school-detail-in .col-50::-webkit-scrollbar {
  
  display: none;
    
} 


.modal .modal-content {
    border-radius: 24px;
    padding: 15px !important;
}


.content-area .school-out .coach-detail .coaches-ratings ul li .coach-rate {
    font-family: "Lato", sans-serif !important;
    width: 100% !important;
}


.modal-dialog {
    max-width: 885px !important;
    margin: 1.75rem auto !important;
}


.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    height: 40px !important;
}

</style>
@endsection


<?php $get_route = Request::segment(2); ?>


@section('content')

    

    <div class="modal-mistake coach-change-screen" id="seeAmistake" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 20px !important;">
                
                <div class="container">
                    <!-- Display success message -->
                            @if(session('message'))
                        <div class="alert alert-success alert-dismissible mt-3" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    
                </div>
                
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"> <a href="{{ URL('coachbyid/'.$get_route) }}" style="btn btn-secondary"> <span class="fa fa-arrow-circle-left"></span> </a> Submit a Coaching change</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <div class="correct-school">
                       
                        <div class="form-box">
                            
                            
                            <form id="" method="post" action="{{ route('change_coach') }}">
                                
                                @csrf
                              
                                <input type="hidden" name="old_coach" value="{{ $get_coach->id }}">
                                <input type="hidden" name="old_school" value="{{ $get_coach->school_id }}">
                                <input type="hidden" name="old_sports" value="{{ $get_coach->sports_id }}">
                                
                                <div class="school-coach">
                                    <div class="c-img" style="text-align: center;">
                                        <span>
                                            <img style="border-radius: 100%;" src="{{asset('img/coach-ph.png')}}">
                                        </span>
                                    </div>
                                    <div class="coach-d" style="text-align:center;">
                                        <h3> {{ $get_coach->name }} </h3>
                                        <div class="inner">
                                                <img src="{{ asset('img/school.png') }}">
                                                <p> {{ App\Models\Wp_school::find($get_coach->school_id)->name; }} </p>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="frm-g">
                                    <label>New School</label>
                                    <select  name="new_coach" id="single2"  class="form-select form-control">
                                        <option value="0"> Select School </option>
                                        @foreach($get_all_schools as $key => $val_get_coaches)
                                            
                                            <option value="{{ $val_get_coaches->id }}"> {{ $val_get_coaches->name }} </option>
                                            
                                        @endforeach
                                    </select>
                                </div>
                                
                                <br>
                                
                                <div class="frm-g">
                                    <label>Your Email (required)</label>
                                    <input type="email" class="form-control" name="email" id="emailAddress" style="width:100%;" placeholder="Enter Email Address" required>
                                </div>
                                
                                <!--<br>-->
                                
                                <!--<div class="frm-g">-->
                                <!--    <label>Current Coach</label>-->
                                <!--    <input type="text" class="form-control" id="emailAddress" style="width:100%;" readonly value="{{ $get_coach->name }}">-->
                                <!--</div>-->
                                
                                <!--<br>-->
                                <!-- <div class="frm-g">-->
                                <!--    <label>Current School</label>-->
                                <!--    <input type="text" class="form-control" id="emailAddress" style="width:100%;" readonly value="{{ App\Models\Wp_school::find($get_coach->school_id)->name }}">-->
                                <!--</div>-->
                                <!--<br>-->
                                
                                <!-- <div class="frm-g">-->
                                <!--    <label>Current Sport</label>-->
                                <!--    <input type="text" class="form-control" id="emailAddress" style="width:100%;" readonly value="{{ App\Models\Wp_sport::find($get_coach->sports_id)->name  }}">-->
                                <!--</div>-->
                                
                                
                                <br>
                                
                                <div class="submit">
                                    <button class="btn btn-danger" id="">
                                        <!--SEND REQUEST FOR APPROVAL-->
                                        SEND
                                    </button>
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


   <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    
    <script>
    
      $("#single").select2({
          placeholder: "Select School",
          allowClear: true,
      });
      
       $("#single2").select2({
          placeholder: "Select School",
          allowClear: true,
      });
      
       $("#single3").select2({
          placeholder: "Select School",
          allowClear: true,
      });
      
      
      $("#multiple").select2({
          placeholder: "Select School",
          allowClear: true
      });
      
    </script>

@endsection
