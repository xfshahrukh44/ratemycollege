<?php 

$get_session = session()->get('get_user');
$segment = Request::segment(2);
// echo $segment;

$dropdown_open = "background-color:#ffffff; color:#000000;";       //Menu Open Class
$group_select_color = "background-color:#000000; border-radius: 20px;";                 //Group Selected Backround Color
$ind_selected_color = "background-color:#006070; color:#000000; border-radius: 33px;  ";  //Individual Selected Background Color 

?>



<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{URL('/')}}" class="brand-link">
      <!-- <img src="{{asset('admin_template_style/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <img src="{{asset(App\Http\Traits\ConfigTraits::get_favicon())}}" alt="Alanco Logo" class="brand-image  elevation-3" style="border-radius:3px;">
      <span class="brand-text font-weight-light"> &nbsp;&nbsp; {{ config('app.name') }} </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(isset(Auth::user()->image)? Auth::user()->image : '' == '')
            <img src="{{asset('admin_template_style/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
          @else
            <img src="{{asset($get_user_db->image)}}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ isset(Auth::user()->name)? Auth::user()->name : '' }} </a>
        </div>
      </div>


      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


<!-- Start Role Condition -->
<!-- ===================================================== Admin Section =======================================================-->

          <li class="nav-item">
            <a href="{{URL('admin/dashboard')}}" class="nav-link <?php if($segment == 'dashboard'){ echo 'bg-danger'; } ?> ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class=""></i>
              </p>
            </a>
           
          </li>


<!-- ============================================================ LOGO MANAGEMENT ============================================= -->

  <!--<li class="nav-item" style="<?php if($segment == 'add_logo' || $segment == 'add_favicon'){ echo $group_select_color; } ?>"  >-->
  <!--  <a href="#" class="nav-link"  style="<?php if($segment == 'add_logo' || $segment == 'add_favicon'){ echo $dropdown_open; } ?>"  >-->
  <!--    <i class="nav-icon fas fa-image"></i>-->
  <!--    <p>-->
  <!--      LOGO MANAGEMENT-->
  <!--      <i class="right <?php if($segment == 'add_logo' || $segment == 'add_favicon'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>-->
  <!--    </p>-->
  <!--  </a>-->
  <!--  <ul class="nav nav-treeview" style="display:<?php if($segment == 'add_logo' || $segment == 'add_favicon'){echo 'block';}else{echo 'none';}?>">-->
      
  <!--    <li class="nav-item" style="<?php if($segment == 'add_logo'){ echo $ind_selected_color; } ?> ">-->
  <!--      <a href="{{URL('admin/add_logo')}}" class="nav-link">-->
  <!--        <i class="far fa-image nav-icon"></i>-->
  <!--        <p>Logo</p>-->
  <!--      </a>-->
  <!--    </li>-->

  <!--    <li class="nav-item" style="<?php if($segment == 'add_favicon'){ echo $ind_selected_color; } ?> ">-->
  <!--      <a href="{{URL('admin/add_favicon')}}" class="nav-link">-->
  <!--        <i class="far fa-image nav-icon"></i>-->
  <!--        <p>Favicon</p>-->
  <!--      </a>-->
  <!--    </li>-->
      
  <!--  </ul>-->
  <!--</li>-->

<!-- ============================================================ LOGO MANAGEMENT ============================================= -->



<!-- ============================================================ BRAND MANAGEMENT ============================================= -->

<!--<li class="nav-item" style="<?php if($segment == 'brand' || $segment == 'add_favicon'){ echo $group_select_color; } ?>"  >-->
<!--    <a href="#" class="nav-link"  style="<?php if($segment == 'brand'){ echo $dropdown_open; } ?>"  >-->
<!--      <i class="nav-icon fas fa-image"></i>-->
<!--      <p>-->
<!--        BRAND MANAGEMENT-->
<!--        <i class="right <?php if($segment == 'brand'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>-->
<!--      </p>-->
<!--    </a>-->
<!--    <ul class="nav nav-treeview" style="display:<?php if($segment == 'brand'){echo 'block';}else{echo 'none';}?>">-->
      
<!--      <li class="nav-item" style="<?php if($segment == 'brand'){ echo $ind_selected_color; } ?> ">-->
<!--        <a href="{{URL('admin/brand')}}" class="nav-link">-->
<!--          <i class="far fa-image nav-icon"></i>-->
<!--          <p>Logo</p>-->
<!--        </a>-->
<!--      </li>-->

<!--    </ul>-->
<!--  </li>-->

<!-- ============================================================ BRAND MANAGEMENT ============================================= -->




<!-- ============================================================ Menues JSON ================================================= -->
@foreach($laravelAdminMenus->menus as $section)
@if($section->items)
<li class="nav-item" style="<?php if($segment == 'add_logo' || $segment == 'add_favicon'){ echo $group_select_color; } ?>"  >

    <a href="#" class="nav-link"  style="<?php if($segment == 'add_logo' || $segment == 'add_favicon'){ echo $dropdown_open; } ?>"  >
    <i class="nav-icon fas fa-image"></i>
    <p>
        {{ $section->section }}
        <i class="right <?php if($segment == 'add_logo' || $segment == 'add_favicon'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
    </p>
    </a>
    
    
    <ul class="nav nav-treeview" style="display:<?php if($segment == 'add_logo' || $segment == 'add_favicon'){echo 'block';}else{echo 'none';}?>">
        
        @foreach($section->items as $menu)
        <li class="nav-item" style="<?php if($segment == 'add_logo'){ echo $ind_selected_color; } ?> ">
            <a href="{{ url($menu->url) }}" class="nav-link">
            <i class="far fa-image nav-icon"></i>
            <p>  {{ $menu->title }} </p>
            </a>
        </li>
        @endforeach

    </ul>
    
  </li>
@endif
@endforeach
<!-- ============================================================ END MENUES JSON ============================================= -->





<li class="nav-header"> ============================ </li>
<li class="nav-item">
  <a href="{{URL('logout')}}" class="nav-link">
    <i class="nav-icon fa fa-lock"></i>
    <p>
      Logout
    </p>
  </a>
</li>

</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>  


