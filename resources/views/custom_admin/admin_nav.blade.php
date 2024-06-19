<style>
    
li.nav-item active {
    ;
}

li.nav-item.active {
    background: #ed4b30 !important;
}
   
li.nav-item.active a{
    color: #fff !important;
}
   
    
</style>

<?php 
    $get_route = Request::segment(2); 
?>
 
<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="assets/img/logo.svg" alt="">
  </a>
</div>
<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item <?php if($get_route == 'dashboard'){ echo 'active';} ?>">
    <a class="nav-link " href="{{ route('admin_dashboard') }}">
      <i class="bi bi-graph-up"></i>
      <span>Reports</span>
    </a>
  </li>
  <li class="nav-item <?php if($get_route == 'review'){ echo 'active';} ?>">
    <a class="nav-link " href="{{ route('admin_review') }}">
      <i class="bi bi-chat-right-text"></i>
      <span>Ratings</span>
    </a>
  </li>
  
  <li class="nav-item <?php if($get_route == 'coaches' || $get_route == 'coach_change_step_1' || $get_route == 'coach_change_step_2' || $get_route == 'coach_change_step_3' || $get_route == 'school_change_step_1' || $get_route == 'school_change_step_2' || $get_route == 'school_change_step_3'){ echo 'active';} ?>">
      
    <a class="nav-link " href="{{ route('admin_coaches') }}">
      <i class="bi bi-arrow-left-right"></i>
      <span>Changes Request</span>
    </a>
    
  </li>
  
  <li class="nav-item <?php if($get_route == 'coachesdetails'){ echo 'active';} ?>">
    <a class="nav-link " href="{{ route('coaches_details') }}">
      <i class="bi bi-users"></i>
      <span>Coaches </span>
    </a>
  </li>
  
  <li class="nav-item <?php if($get_route == 'view_coach' || $get_route == 'add_coach'){ echo 'active';} ?>">
    <a class="nav-link " href="{{ route('view_coach') }}">
      <i class="bi bi-users"></i>
      <span>Add Coaches </span>
    </a>
  </li>
  
  
  <li class="nav-item <?php if($get_route == 'view_school' || $get_route == 'add_school'){ echo 'active';} ?>">
    <a class="nav-link " href="{{ route('view_school') }}">
      <i class="bi bi-users"></i>
      <span>Add Schools </span>
    </a>
  </li>
  
  
  <li class="nav-item <?php if($get_route == 'see_a_mistake'){ echo 'active';} ?>">
    <a class="nav-link " href="{{ route('see_a_mistake') }}">
      <i class="bi bi-users"></i>
      <span> See A Mistake </span>
    </a>
  </li>
  
  
  
  
  @if($get_route == 'activity_log')
   <li class="nav-item <?php if($get_route == 'activity_log'){ echo 'active';} ?>">
    <a class="nav-link " href="{{ route('activity_log') }}">
      <i class="bi bi-users"></i>
      <span> Activity Log </span>
    </a>
  </li>
  @endif
  
  
  <hr>
  
  
   <li class="nav-item">
    <a class="nav-link " href="{{ route('logout_user') }}">
      <i class="bi bi-users"></i>
      <span> Logout </span>
    </a>
  </li>
  
  
  
</ul>