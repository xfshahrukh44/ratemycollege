@extends('layouts.backend')

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



input[type="checkbox"] {
    display: none;
}

/* Style for the star */
input[type="checkbox"] + label::before {
    content: '\2605'; /* Unicode character for a star */
    font-size: 24px; /* Adjust size as needed */
    color: gray; /* Color of the star */
    cursor: pointer;
}

/* Style for the checked star */
input[type="checkbox"]:checked + label::before {
    color: gold; /* Color of the filled star */
}


</style>
@endsection





@section('content')

 <div class="container">
    <!-- Display success message -->
            @if(session('message'))
        <div class="alert alert-success alert-dismissible mt-3" role="alert">
            {{ session('message') }}
        </div>
    @endif
    
 </div>

  <div class="content-area container-fluid">
      <div class="container">
        <div class="school-out ">
          <div class="coach-detail">
            <div class="wrap">
              <div class="school-detail-in">
                <div class="school-detail-left col-50">
                  <div class="school-detail-right-detail">
                    <div class="coach-actions change-coach-popup">
                        <a href="{{ URL('change_coach_form/'.$get_coach->id) }}" class="btn-link">
                            Coaching change? Let us know
                        </a>
                      </div>
                    <div class="cont-head">
                      <div class="coach-i">
                        <div class="c-img">
                            <span>
                                <img src="{{asset('img/coach-ph.png')}}">
                            </span>
                        </div>
                        <div class="coach-d">
                            <h3> {{ $get_coach->name }} </h3>
                            <div class="coach-actions mistake-popup">
               <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#seeAmistake">
                    See A Mistake?
                </button>-->
              </div>
                            <div class="inner">
                                <img src="{{asset('img/school.png')}}">
                                <p> {{ App\Models\Wp_school::find($get_coach->school_id)->name; }} </p>
                            </div>
                        </div>
                        
                      </div>
                    </div>
                    
                    
                     <?php 
                            
                        $total = 0;
                                        
                        $t_iq = DB::table('rates')->where('coach_id', $get_coach->id)->sum('iq'); 
                        
                        if($t_iq)
                        {
                            
                            $iq_avg = intval($t_iq / count($get_reviews));
                            $iq = $t_iq / count($get_reviews);
                            
                            $total += $iq;
                            
                        }
                        
                        
                        $t_id = DB::table('rates')->where('coach_id', $get_coach->id)->sum('individual_development'); 
                        
                        if($t_id){
                            
                            $id_avg = intval($t_id / count($get_reviews));
                            $idp = $t_id / count($get_reviews);
                            
                            $total += $idp;
                        }
                        
                        
                        $t_et = DB::table('rates')->where('coach_id', $get_coach->id)->sum('ethical'); 
                        
                        if($t_et){
                            
                            $et_avg = intval($t_et / count($get_reviews));
                            $et = $t_et / count($get_reviews);
                            
                            $total += $et;
                        }
                        
                        
                        $t_comm = DB::table('rates')->where('coach_id', $get_coach->id)->sum('communication'); 
                        
                        if($t_comm)
                        {
                         
                            $comm_avg = intval($t_comm / count($get_reviews));
                            $com = $t_comm / count($get_reviews);
                            
                            $total += $com;
                            
                        }
                        
                        
                        $t_staff = DB::table('rates')->where('coach_id', $get_coach->id)->sum('staff'); 
                        
                        if($t_staff){
                            
                            $staff_avg = intval($t_staff / count($get_reviews));
                            $stf = $t_staff / count($get_reviews);
                            
                            $total += $stf;
                        }
                        
                      
                        $t_acad = DB::table('rates')->where('coach_id', $get_coach->id)->sum('academics'); 
                        
                        if($t_acad){
                            
                            $t_acad_avg = intval($t_acad / count($get_reviews)); 
                            $acd = $t_acad / count($get_reviews);
                            
                            $total += $acd;
                        }
                        
                        $total_avgg = 0;
                        $get_total_avgg_count = DB::table('rates')->where('coach_id', $get_coach->id)->count();
                        
                        if($t_iq && $t_id && $t_et && $t_comm && $t_staff && $t_acad)
                        {
                            
                            
                            $total_avgg =  floor(($t_iq + $t_id + $t_et + $t_comm + $t_staff + $t_acad) / (6 * $get_total_avgg_count) * 10) / 10;
                            
                            
                        }
                        
                        
                      ?>
                    
                    
                    <div class="coach-rating">
                      <div class="rating-head">
                          <h3>SCOUTING REPORT</h3>
                          <div class="total-rate">
                              <h4>Total Rating <span> {{ $total_avgg }} /5 </span></h4>
                          </div>
                      </div>
                      <div class="rating-body">
                          <ul>
                              <li>
                                  <h5>IQ <span>({{count($get_reviews)}} rating)</span></h5>
                                  <div class="stars">
                                      
                                    @if(isset($iq_avg))
                                      
                                      @if($iq_avg == 1)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($iq_avg == 2)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($iq_avg == 3)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($iq_avg == 4)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($iq_avg == 5)
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      @endif
                                    
                                    
                                    @else
                                    
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                    
                                    @endif
                                      
                                  </div>
                              </li>
                              <li>
                                  <h5>Player Development <span>({{count($get_reviews)}} rating)</span></h5>
                                  <div class="stars">
                                      
                                      
                                    @if(isset($id_avg))
                                
                                      
                                      @if($id_avg == 1)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($id_avg == 2)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($id_avg == 3)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($id_avg == 4)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($id_avg == 5)
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      @endif
                                     
                                     
                                    @else
                                    
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      
                                    @endif
                                      
                                  </div>
                              </li>
                              <li>
                                  <h5>Ethical <span>({{count($get_reviews)}} rating)</span></h5>
                                  <div class="stars">
                                      
                                      
                                    @if(isset($et_avg))
                                    
                                       
                                      @if($et_avg == 1)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($et_avg == 2)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($et_avg == 3)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($et_avg == 4)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($et_avg == 5)
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      @endif
                                    
                                    
                                    @else
                                    
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      
                                      
                                    @endif
                                      
                                  </div>
                              </li>
                              <li>
                                  <h5>Communication <span>({{count($get_reviews)}} rating)</span></h5>
                                  <div class="stars">
                                      
                                    @if(isset($comm_avg))
                                      
                                      @if($comm_avg == 1)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($comm_avg == 2)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($comm_avg == 3)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($comm_avg == 4)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($comm_avg == 5)
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      @endif
                                      
                                    
                                    @else
                                    
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                    
                                    @endif
                                      
                                  </div>
                              </li>
                              <li>
                                  <h5>Staff <span>({{count($get_reviews)}} rating)</span></h5>
                                  <div class="stars">
                                     
                                    @if(isset($staff_avg))
                                    
                                    
                                      @if($staff_avg == 1)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($staff_avg == 2)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($staff_avg == 3)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($staff_avg == 4)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($staff_avg == 5)
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      @endif
                                     
                                    @else
                                    
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      
                                      
                                    @endif
                                     
                                  </div>
                              </li>
                              <li>
                                  <h5>Academics <span>({{count($get_reviews)}} rating)</span></h5>
                                  <div class="stars">
                                     
                                    
                                    @if(isset($t_acad_avg))
                                    
                                    
                                      @if($t_acad_avg == 1)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($t_acad_avg == 2)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($t_acad_avg == 3)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($t_acad_avg == 4)
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      @elseif($t_acad_avg == 5)
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      @endif
                                    
                                    
                                    @else
                                    
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      
                                      
                                    @endif
                                     
                                  </div>
                              </li>
                          </ul>
                          
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#showRateReview"> RATE THIS COACH </button>
                          
                      </div>
                    </div>
                  </div>
                </div>
                <div class="school-detail-right col-50">
                  <div class="school-detail-content">
                    <div class="cont-head">
                      <h3> Ratings <span>({{count($get_reviews)}})</span></h3>
                    </div>
                    <div class="coaches-ratings">
                        
                        
                        @if(count($get_reviews) > 0)
                        
                        <ul class="rating-list">
                            
                            @foreach($get_reviews as $key => $val_rate)
                            
                            
                            <?php 
                            
                                $iqq = $val_rate->iq;
                                $ethicall= $val_rate->ethical;
                                $communicationn = $val_rate->communication;
                                $stafff = $val_rate->staff;
                                $individual_developmentt = $val_rate->individual_development;
                                $academicss = $val_rate->academics;
                                
                                $total_count = $iqq + $ethicall + $communicationn + $stafff + $individual_developmentt + $academicss;
                                
                                $tt_avg = floor($total_count * 10) / 10;
                                
                                $f_tt_avg = floor($tt_avg/6);
                            ?>
                            
                              <li>
                                <div class="coach-rate">
                                    <span class="sport"> {{ \Carbon\Carbon::parse($val_rate->created_at)->format('F jS, Y g:i a') }} </span>
                                    <div class="stars">
                                    
                                    @if($f_tt_avg == '1.0')
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                    @elseif($f_tt_avg == '2.0')
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                    @elseif($f_tt_avg == '3.0')
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                    @elseif($f_tt_avg == '4.0')
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                    @elseif($f_tt_avg == '5.0')
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                      <span><i class="fa fa-star"></i></span>
                                    @endif  
                                    
                                    </div>
                                    <p> {{ $val_rate->rate_description }} </p>
                                </div>
                                <a class="btn" data-bs-toggle="modal" data-bs-target="#flagReview{{$key}}">
                                    
                                    @if($val_rate->is_flag == 0)
                                        <i class="far fa-flag"></i>
                                    @elseif($val_rate->is_flag == 1)
                                        <i class="fa fa-flag"></i>    
                                    @endif
                                    
                                </a>
                                
                                
                                <div class="modal modal-flag-review  fade" id="flagReview{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">flag review</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            
                                            
                                            
                                            <div class="modal-body">
                                                <div class="correct-school">
                                                    <div class="coach-rate">
                                                        <span class="sport"> {{ \Carbon\Carbon::parse($val_rate->created_at)->format('F jS, Y g:i a') }} </span>
                                                        
                                                        <div class="stars">
                                                        
                                                            @if($f_tt_avg == '1.0')
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="far fa-star"></i></span>
                                                              <span><i class="far fa-star"></i></span>
                                                              <span><i class="far fa-star"></i></span>
                                                              <span><i class="far fa-star"></i></span>
                                                            @elseif($f_tt_avg == '2.0')
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="far fa-star"></i></span>
                                                              <span><i class="far fa-star"></i></span>
                                                              <span><i class="far fa-star"></i></span>
                                                            @elseif($f_tt_avg == '3.0')
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="far fa-star"></i></span>
                                                              <span><i class="far fa-star"></i></span>
                                                            @elseif($f_tt_avg == '4.0')
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="far fa-star"></i></span>
                                                            @elseif($f_tt_avg == '5.0')
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="fa fa-star"></i></span>
                                                              <span><i class="fa fa-star"></i></span>
                                                            @endif  
                                                        
                                                        </div>
                                                        
                                                        <p> {{ $val_rate->rate_description }} </p>
                                                    </div>
                                                    <div class="d-flex form-box">
                                                       
                                                        <form id="form-{{$key}}" method="post" action="{{ route('Add_flag_review') }}" >
                                                            
                                                            @csrf
                                                            
                                                            <input type="hidden" name="rate_id" value="{{ $val_rate->id }}"/>
                                                            
                                                            <label class="info-d">
                                                                If you think this rating is inconsistent with Rate My College Coaches' Site <a href="#">Guidelines</a>, report it and tell us why.
                                                            </label>
                                                            <div class="frm-g">
                                                                <textarea class="form-control" name="flag_rate_description" required>  </textarea>
                                                            </div>
                                                            <div class="submit">
                                                                <button class="btn" id="">  Submit </button>
                                                            </div>
                                                            
                                                        </form>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                
                              </li>
                              
                             
                              
                            @endforeach
                              
                              
                            </ul>
                        
                        @else
                        
                        <h4 class="text-center"> No Reviews Found </h4>
                        
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
    <div class="modal modal-mistake  fade" id="seeAmistake" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Submit a Coaching change</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="correct-school">
                        <div class="school">
                            <div class="c-img">
                            <span>
                                <img src="{{asset('img/coach-ph.png')}}">
                            </span>
                            </div>
                            <div class="coach-d">
                                <h3> {{ $get_coach->name }} </h3>
                                <div class="inner">
                                    <img src="{{ asset('img/school.png') }}">
                                    <p> {{ App\Models\Wp_school::find($get_coach->school_id)->name; }} </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex form-box">
                            
                            <form id="" method="post" action="{{ route('change_coach') }}">
                                
                                @csrf
                                
                                <div class="frm-g">
                                    <label>New Coach</label>
                                    <input type="text" class="form-control" id="emailAddress" placeholder="Enter Email Address" required>
                                </div>
                                <div class="frm-g">
                                    <label>Your Email (required)</label>
                                    <input type="email" class="form-control" id="emailAddress" placeholder="Enter Email Address" required>
                                </div>
                                <div class="submit">
                                    <button class="btn" id="">
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

    
    
    <!-- Review Modal -->
    <div class="modal fade ratemycoach-modal" id="showRateReview" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <!-- <div class="modal-header border-bottom-0">

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div> -->
          
          
            
          <form id="rating-coach-form" method="post" action="{{ route('Add_review') }}">
              
            @csrf
          
          <div class="modal-body">
            <h3 class="modal-title">RATE THIS COACH</h3>
            <div class="coach-profile-head d-flex border-bottom">
              <div class="coaches-profile-left">
                <img src="https://redcraftmedia.net/ratemycollege/wp-content/themes/ratemycollege/images/no-avatar.png" alt="No avatar" width="80" height="80">
              </div>
              <div class="coaches-profile-right-in-box-title">
                <h2>
                   {{ $get_coach->name }}
                  <div class="school-name">
                    <span style="margin-right: 10px;">
                      <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2024/02/Buildings.svg" >
                    </span>
                    <span> {{ App\Models\Wp_school::find($get_coach->school_id)->name; }} </span>
                  </div>
                </h2>
              </div>
            </div>
            <div class="coach-guide">
              <div class="head">
                <h3>Guidelines</h3>
                <a href="https://www.ratemycollegecoaches.com/site-guidelines/#t-2">View All</a>
              </div>
              <div class="content">
                <ul>
                  <li>Do Check your comments, once or twice before posting. Check your grammar. Make sure you are only rating a coach that you have played for.</li>
                  <li>Do Discuss the head coach and his/her staff's coaching abilities including style of play and coaching style. Also, discuss overall experience as a student-athlete.</li>
                  <li>Don't Use profanity, name-calling, or derogatory terms. And, don’t claim that the coach shows bias or favoritism for or against players.</li>
                </ul>
              </div>
            </div>
            <div class="rating-coach-form-out">
            
              
                 
                <input type="hidden" name="coach_id" value="{{ $get_coach->id }}" />
                <input type="hidden" name="school_id" value="{{ $get_coach->school_id }}" />
                <input type="hidden" name="sports_id" value="{{ $get_coach->sports_id }}" />
                  
                <div class="rating-coach-form-star" data-post_id="42596" data-user_id="0">
                  <div class="rating-coach-form-star-left">
                    <div class="rate-the-coach-item iq d-flex justify-content-between" id="rate-the-coach-item-iq">
                      <div class="rate-the-coach-item-left"> IQ ? </div>
                      <div class="rate-the-coach-item-right">
                          
                        <input type="checkbox" id="iq1" name="iq[]" value="1"/>
                        <label for="iq1"></label>
                        
                        <input type="checkbox" id="iq2" name="iq[]" value="1"/>
                        <label for="iq2"></label>
                        
                        <input type="checkbox" id="iq3" name="iq[]" value="1"/>
                        <label for="iq3"></label>
                        
                        <input type="checkbox" id="iq4" name="iq[]" value="1"/>
                        <label for="iq4"></label>
                        
                        <input type="checkbox" id="iq5" name="iq[]" value="1"/>
                        <label for="iq5"></label>
                        
                      </div>
                    </div>
                    <div class="rate-the-coach-item personable d-flex justify-content-between" id="rate-the-coach-item-personable">
                      <div class="rate-the-coach-item-left"> Ethical ? </div>
                      <div class="rate-the-coach-item-right">
                          
                        <input type="checkbox" id="ethical1" name="ethical[]" value="1"/>
                        <label for="ethical1"></label>
                        
                        <input type="checkbox" id="ethical2" name="ethical[]" value="1"/>
                        <label for="ethical2"></label>
                        
                        <input type="checkbox" id="ethical3" name="ethical[]" value="1"/>
                        <label for="ethical3"></label>
                        
                        <input type="checkbox" id="ethical4" name="ethical[]" value="1"/>
                        <label for="ethical4"></label>
                        
                        <input type="checkbox" id="ethical5" name="ethical[]" value="1"/>
                        <label for="ethical5"></label>
                      
                      </div>
                    </div>
                    <div class="rate-the-coach-item communication d-flex justify-content-between" id="rate-the-coach-item-communication">
                      <div class="rate-the-coach-item-left"> Communication ? </div>
                      <div class="rate-the-coach-item-right">
                          
                          
                         <input type="checkbox" id="communication1" name="communication[]" value="1"/>
                         <label for="communication1"></label>
                         
                         <input type="checkbox" id="communication2" name="communication[]" value="1"/>
                         <label for="communication2"></label>
                         
                         <input type="checkbox" id="communication3" name="communication[]" value="1"/>
                         <label for="communication3"></label>
                         
                         <input type="checkbox" id="communication4" name="communication[]" value="1"/>
                         <label for="communication4"></label>
                         
                         <input type="checkbox" id="communication5" name="communication[]" value="1"/>
                         <label for="communication5"></label>
                      
                      </div>
                    </div>
                  </div>
                  <div class="rating-coach-form-star-right">
                    <div class="rate-the-coach-item staff d-flex justify-content-between" id="rate-the-coach-item-staff">
                      <div class="rate-the-coach-item-left"> Staff ? </div>
                      <div class="rate-the-coach-item-right">
                           
                          
                         <input type="checkbox" id="staff1" name="staff[]" value="1"/>
                         <label for="staff1"></label>
                         
                         <input type="checkbox" id="staff2" name="staff[]" value="1"/>
                         <label for="staff2"></label>
                         
                         <input type="checkbox" id="staff3" name="staff[]" value="1"/>
                         <label for="staff3"></label>
                         
                         <input type="checkbox" id="staff4" name="staff[]" value="1"/>
                         <label for="staff4"></label>
                         
                         <input type="checkbox" id="staff5" name="staff[]" value="1"/>
                         <label for="staff5"></label>
                         
                      </div>
                    </div>
                    <div class="rate-the-coach-item player-individual-development d-flex justify-content-between" id="rate-the-coach-item-player-individual-development">
                      <div class="rate-the-coach-item-left"> Player/Individual Development ? </div>
                      <div class="rate-the-coach-item-right">
                         
                         
                         <input type="checkbox" id="individual_development1" name="individual_development[]" value="1"/>
                         <label for="individual_development1"></label>
                         
                         <input type="checkbox" id="individual_development2" name="individual_development[]" value="1"/>
                         <label for="individual_development2"></label>
                         
                         <input type="checkbox" id="individual_development3" name="individual_development[]" value="1"/>
                         <label for="individual_development3"></label>
                         
                         <input type="checkbox" id="individual_development4" name="individual_development[]" value="1"/>
                         <label for="individual_development4"></label>
                         
                         <input type="checkbox" id="individual_development5" name="individual_development[]" value="1"/>
                          <label for="individual_development5"></label>
                      
                      </div>
                    </div>
                    <div class="rate-the-coach-item  academics d-flex justify-content-between" id="rate-the-coach-item-academics">
                      <div class="rate-the-coach-item-left"> Academics ? </div>
                      <div class="rate-the-coach-item-right">
                         
                         
                         <input type="checkbox" id="academics1" name="academics[]" value="1"/>
                         <label for="academics1"></label>
                         
                         <input type="checkbox" id="academics2" name="academics[]" value="1"/>
                         <label for="academics2"></label>
                         
                         <input type="checkbox" id="academics3" name="academics[]" value="1"/>
                         <label for="academics3"></label>
                         
                         <input type="checkbox" id="academics4" name="academics[]" value="1"/>
                         <label for="academics4"></label>
                         
                         <input type="checkbox" id="academics5" name="academics[]" value="1"/>
                         <label for="academics5"></label>
                      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rating-coach-form-review">
                  
                  <textarea class="form-control" style="height: 120px;" name="rate_description">  </textarea>
                  
                </div>
                <div class="rating-coach-form-quetion">
                  <div class="rating-coach-form-quetion-item d-flex justify-content-between">
                    <div class="rating-coach-form-quetion-item-question">1. Was your recruiting visit a good respresentation of your experience as a student-athlete under this coach?</div>
                    <div class="rating-coach-form-quetion-item-answer">
                      <div class="opt">
                      <span>
                        <input type="radio" id="oq1" name="other_q_1" value="1">
                      </span>
                      <span for="oq1">Yes</span>
                      </div>
                      <div class="opt">
                      <span>
                        <input type="radio" id="oq2" name="other_q_1" value="0">
                      </span>
                      <span for="oq2">No</span>
                      </div>
                    </div>
                  </div>
                  <div class="rating-coach-form-quetion-item d-flex justify-content-between">
                    <div class="rating-coach-form-quetion-item-question">2. Did your coach promote inclusion and promote a team environment?</div>
                    <div class="rating-coach-form-quetion-item-answer">
                      <div class="opt">
                        <span>
                          <input type="radio" name="other_q_2" value="1">
                        </span>
                        <span>Yes</span>
                      </div>
                      <div class="opt">
                        <span>
                          <input type="radio" name="other_q_2" value="0">
                        </span>
                        <span>No</span>
                      </div>
                    </div>
                  </div>
                </div>
              
            </div>
            <div class="d-flex justify-content-between d-none">
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
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
          </div>
          
          </form>
          
        </div>
      </div>
    </div>
    <!-- End Review Modal-->

@endsection


@section('js')

<script type="text/javascript">
    
        
    document.addEventListener('DOMContentLoaded', (event) => {
        const checkboxes = document.querySelectorAll('input[type="checkbox"][id^="iq"]');

        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('click', () => {
                if (checkbox.checked) {
                    // Select all preceding checkboxes
                    for (let i = 0; i <= index; i++) {
                        checkboxes[i].checked = true;
                    }
                } else {
                    // Deselect all following checkboxes
                    for (let i = index; i < checkboxes.length; i++) {
                        checkboxes[i].checked = false;
                    }
                }
            });
        });
    });




    document.addEventListener('DOMContentLoaded', (event) => {
        const checkboxes = document.querySelectorAll('input[type="checkbox"][id^="ethical"]');

        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('click', () => {
                if (checkbox.checked) {
                    // Select all preceding checkboxes
                    for (let i = 0; i <= index; i++) {
                        checkboxes[i].checked = true;
                    }
                } else {
                    // Deselect all following checkboxes
                    for (let i = index; i < checkboxes.length; i++) {
                        checkboxes[i].checked = false;
                    }
                }
            });
        });
    });
    
    
    
    document.addEventListener('DOMContentLoaded', (event) => {
        const checkboxes = document.querySelectorAll('input[type="checkbox"][id^="communication"]');

        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('click', () => {
                if (checkbox.checked) {
                    // Select all preceding checkboxes
                    for (let i = 0; i <= index; i++) {
                        checkboxes[i].checked = true;
                    }
                } else {
                    // Deselect all following checkboxes
                    for (let i = index; i < checkboxes.length; i++) {
                        checkboxes[i].checked = false;
                    }
                }
            });
        });
    });



    
    document.addEventListener('DOMContentLoaded', (event) => {
        const checkboxes = document.querySelectorAll('input[type="checkbox"][id^="staff"]');

        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('click', () => {
                if (checkbox.checked) {
                    // Select all preceding checkboxes
                    for (let i = 0; i <= index; i++) {
                        checkboxes[i].checked = true;
                    }
                } else {
                    // Deselect all following checkboxes
                    for (let i = index; i < checkboxes.length; i++) {
                        checkboxes[i].checked = false;
                    }
                }
            });
        });
    });



    document.addEventListener('DOMContentLoaded', (event) => {
        const checkboxes = document.querySelectorAll('input[type="checkbox"][id^="individual_development"]');

        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('click', () => {
                if (checkbox.checked) {
                    // Select all preceding checkboxes
                    for (let i = 0; i <= index; i++) {
                        checkboxes[i].checked = true;
                    }
                } else {
                    // Deselect all following checkboxes
                    for (let i = index; i < checkboxes.length; i++) {
                        checkboxes[i].checked = false;
                    }
                }
            });
        });
    });



    document.addEventListener('DOMContentLoaded', (event) => {
        const checkboxes = document.querySelectorAll('input[type="checkbox"][id^="academics"]');

        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('click', () => {
                if (checkbox.checked) {
                    // Select all preceding checkboxes
                    for (let i = 0; i <= index; i++) {
                        checkboxes[i].checked = true;
                    }
                } else {
                    // Deselect all following checkboxes
                    for (let i = index; i < checkboxes.length; i++) {
                        checkboxes[i].checked = false;
                    }
                }
            });
        });
    });


      
    
</script>
@endsection
