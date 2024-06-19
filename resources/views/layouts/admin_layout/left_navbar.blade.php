<?php 

$role_id = Auth::user()->role;
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

  <li class="nav-item" style="<?php if($segment == 'logo'){ echo $group_select_color; } ?>"  >
    <a href="#" class="nav-link"  style="<?php if($segment == 'logo'){ echo $dropdown_open; } ?>"  >
      <i class="nav-icon fas fa-image"></i>
      <p>
        LOGO
        <i class="right <?php if($segment == 'logo'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
      </p>
    </a>
    <ul class="nav nav-treeview" style="display:<?php if($segment == 'logo'){echo 'block';}else{echo 'none';}?>">
      
      <li class="nav-item" style="<?php if($segment == 'logo'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/logo')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>Logo & Favicon</p>
        </a>
      </li>

    </ul>
  </li>

<!-- ============================================================ END LOGO MANAGEMENT ============================================= -->





<!-- ============================================================ CMS MANAGEMENT ============================================= -->

<li class="nav-item" style="<?php if($segment == 'pages' || $segment == 'section'){ echo $group_select_color; } ?>"  >
   <a href="#" class="nav-link"  style="<?php if($segment == 'pages' || $segment == 'section'){ echo $dropdown_open; } ?>"  >
     <i class="nav-icon fas fa-image"></i>
<!--      <p>-->
       CMS
       <i class="right <?php if($segment == 'pages' || $segment == 'section'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
     </p>
   </a>
   <ul class="nav nav-treeview" style="display:<?php if($segment == 'pages' || $segment == 'section'){echo 'block';}else{echo 'none';}?>">
      
    <li class="nav-item" style="<?php if($segment == 'pages'){ echo $ind_selected_color; } ?> ">
       <a href="{{URL('admin/pages')}}" class="nav-link">
         <i class="far fa-image nav-icon"></i>
         <p> PAGES </p>
       </a>
    </li>

    <li class="nav-item" style="<?php if($segment == 'section'){ echo $ind_selected_color; } ?> ">
       <a href="{{URL('admin/section')}}" class="nav-link">
         <i class="far fa-image nav-icon"></i>
         <p> SECTIONS </p>
       </a>
    </li>


   </ul>
 </li>

<!-- ============================================================ END CMS MANAGEMENT ============================================= -->






<!-- ============================================================ BANNER MANAGEMENT ============================================= -->

  <li class="nav-item" style="<?php if($segment == 'banner' || $segment == 'innerbanner'){ echo $group_select_color; } ?>"  >
    <a href="#" class="nav-link"  style="<?php if($segment == 'banner' || $segment == 'innerbanner'){ echo $dropdown_open; } ?>"  >
      <i class="nav-icon fas fa-image"></i>
      <p>
        BANNER
        <i class="right <?php if($segment == 'banner' || $segment == 'innerbanner'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
      </p>
    </a>
    <ul class="nav nav-treeview" style="display:<?php if($segment == 'banner' || $segment == 'innerbanner'){echo 'block';}else{echo 'none';}?>">
      
       <li class="nav-item" style="<?php if($segment == 'banner'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/banner')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>Banner</p>
        </a>
       </li>
      
      
       <li class="nav-item" style="<?php if($segment == 'innerbanner'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/innerbanner')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i> 
          <p>Inner Banner</p>
        </a>
       </li>

    </ul>
  </li>

<!-- ============================================================ END BANNER MANAGEMENT ============================================= -->





<!-- ============================================================ ATTRIBUTE MANAGEMENT ============================================= -->

  <li class="nav-item" style="<?php if($segment == 'color' || $segment == 'size'){ echo $group_select_color; } ?>"  >
    
        <a href="#" class="nav-link"  style="<?php if($segment == 'color' || $segment == 'size'){ echo $dropdown_open; } ?>"  >
          <i class="nav-icon fas fa-image"></i>
          <p>
             ATTRIBUTE
            <i class="right <?php if($segment == 'color' || $segment == 'size'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display:<?php if($segment == 'color' || $segment == 'size'){echo 'block';}else{echo 'none';}?>">
          
       <li class="nav-item" style="<?php if($segment == 'color'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/color')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>color</p>
        </a>
       </li>
       
       <li class="nav-item" style="<?php if($segment == 'size'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/size')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>size</p>
        </a>
       </li>
  
    
    </ul>
  </li>

<!-- ============================================================ END ATTRIBUTE MANAGEMENT ============================================= -->






<!-- ============================================================ CATEGORY MANAGEMENT ============================================= -->

  <li class="nav-item" style="<?php if($segment == 'category'){ echo $group_select_color; } ?>"  >
    
        <a href="#" class="nav-link"  style="<?php if($segment == 'category'){ echo $dropdown_open; } ?>"  >
          <i class="nav-icon fas fa-image"></i>
          <p>
            CATEGORY
            <i class="right <?php if($segment == 'category'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display:<?php if($segment == 'category'){echo 'block';}else{echo 'none';}?>">
          
       <li class="nav-item" style="<?php if($segment == 'category'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/category')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>Category</p>
        </a>
       </li>
  
    
    </ul>
  </li>

<!-- ============================================================ END CATEGORY MANAGEMENT ============================================= -->






<!-- ============================================================ SUBCATEGORY MANAGEMENT ============================================= -->

  <li class="nav-item" style="<?php if($segment == 'subcategory'){ echo $group_select_color; } ?>"  >
    
        <a href="#" class="nav-link"  style="<?php if($segment == 'subcategory'){ echo $dropdown_open; } ?>"  >
          <i class="nav-icon fas fa-image"></i>
          <p>
            SUBCATEGORY
            <i class="right <?php if($segment == 'subcategory'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display:<?php if($segment == 'subcategory'){echo 'block';}else{echo 'none';}?>">
          
       <li class="nav-item" style="<?php if($segment == 'subcategory'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/subcategory')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>Subcategory</p>
        </a>
       </li>
  
    </ul>
  </li>

<!-- ============================================================ END SUBCATEGORY MANAGEMENT ============================================= -->






<!-- ============================================================ PRODUCT MANAGEMENT ============================================= -->

  <li class="nav-item" style="<?php if($segment == 'product' || $segment == 'uploadimage'){ echo $group_select_color; } ?>"  >
    
        <a href="#" class="nav-link"  style="<?php if($segment == 'product' || $segment == 'uploadimage'){ echo $dropdown_open; } ?>"  >
          <i class="nav-icon fas fa-image"></i>
          <p>
            PRODUCT
            <i class="right <?php if($segment == 'product' || $segment == 'uploadimage'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display:<?php if($segment == 'product' || $segment == 'uploadimage'){echo 'block';}else{echo 'none';}?>">
          
       <li class="nav-item" style="<?php if($segment == 'product'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/product')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>Product</p>
        </a>
       </li>
  
        <li class="nav-item" style="<?php if($segment == 'uploadimage'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/product')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>Upload Multiple Images</p>
        </a>
       </li>
  
    
    </ul>
  </li>

<!-- ============================================================ END PRODUCT MANAGEMENT ============================================= -->








<!-- ============================================================ INQUIRY MANAGEMENT ============================================= -->

  <li class="nav-item" style="<?php if($segment == 'inquiry'){ echo $group_select_color; } ?>"  >
    
        <a href="#" class="nav-link"  style="<?php if($segment == 'inquiry'){ echo $dropdown_open; } ?>"  >
          <i class="nav-icon fas fa-image"></i>
          <p>
            INQUIRY
            <i class="right <?php if($segment == 'inquiry'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display:<?php if($segment == 'inquiry'){echo 'block';}else{echo 'none';}?>">
          
       <li class="nav-item" style="<?php if($segment == 'inquiry'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/inquiry')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>Inquiry</p>
        </a>
       </li>
  
    
    </ul>
  </li>

<!-- ============================================================ END INQUIRY MANAGEMENT ============================================= -->







<!-- ============================================================ NEWSLETTER MANAGEMENT ============================================= -->

  <li class="nav-item" style="<?php if($segment == 'newsletter'){ echo $group_select_color; } ?>"  >
    
        <a href="#" class="nav-link"  style="<?php if($segment == 'newsletter'){ echo $dropdown_open; } ?>"  >
          <i class="nav-icon fas fa-image"></i>
          <p>
            NEWSLETTER
            <i class="right <?php if($segment == 'newsletter'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display:<?php if($segment == 'newsletter'){echo 'block';}else{echo 'none';}?>">
          
       <li class="nav-item" style="<?php if($segment == 'newsletter'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/newsletter')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>Newsletter</p>
        </a>
       </li>
  
    
    </ul>
  </li>

<!-- ============================================================ END NEWSLETTER MANAGEMENT ============================================= -->






<!-- ============================================================ FAQ MANAGEMENT ============================================= -->

  <li class="nav-item" style="<?php if($segment == 'faq'){ echo $group_select_color; } ?>"  >
    
        <a href="#" class="nav-link"  style="<?php if($segment == 'faq'){ echo $dropdown_open; } ?>"  >
          <i class="nav-icon fas fa-image"></i>
          <p>
            FAQ
            <i class="right <?php if($segment == 'faq'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display:<?php if($segment == 'faq'){echo 'block';}else{echo 'none';}?>">
          
       <li class="nav-item" style="<?php if($segment == 'faq'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/faq')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>Faq</p>
        </a>
       </li>
  
    
    </ul>
  </li>

<!-- ============================================================ END FAQ MANAGEMENT ============================================= -->






<!-- ============================================================ BLOG MANAGEMENT ============================================= -->

  <li class="nav-item" style="<?php if($segment == 'blog'){ echo $group_select_color; } ?>"  >
    
        <a href="#" class="nav-link"  style="<?php if($segment == 'blog'){ echo $dropdown_open; } ?>"  >
          <i class="nav-icon fas fa-image"></i>
          <p>
            BLOG
            <i class="right <?php if($segment == 'blog'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display:<?php if($segment == 'blog'){echo 'block';}else{echo 'none';}?>">
          
       <li class="nav-item" style="<?php if($segment == 'blog'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/blog')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>Blog</p>
        </a>
       </li>
  
    
    </ul>
  </li>

<!-- ============================================================ END BLOG MANAGEMENT ============================================= -->





<!-- ============================================================ TESTIMONIAL MANAGEMENT ============================================= -->

  <li class="nav-item" style="<?php if($segment == 'testimonial'){ echo $group_select_color; } ?>"  >
    
        <a href="#" class="nav-link"  style="<?php if($segment == 'testimonial'){ echo $dropdown_open; } ?>"  >
          <i class="nav-icon fas fa-image"></i>
          <p>
            TESTIMONIAL
            <i class="right <?php if($segment == 'testimonial'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display:<?php if($segment == 'testimonial'){echo 'block';}else{echo 'none';}?>">
          
       <li class="nav-item" style="<?php if($segment == 'testimonial'){ echo $ind_selected_color; } ?> ">
        <a href="{{URL('admin/testimonial')}}" class="nav-link">
          <i class="far fa-image nav-icon"></i>
          <p>Testimonial</p>
        </a>
       </li>
  
    
    </ul>
  </li>

<!-- ============================================================ END TESTIMONIAL MANAGEMENT ============================================= -->



<!-- ============================================================ ORDER MANAGEMENT ============================================= -->

<li class="nav-item" style="<?php if($segment == 'order' || $segment == 'orderproduct'){ echo $group_select_color; } ?>"  >
   <a href="#" class="nav-link"  style="<?php if($segment == 'order' || $segment == 'orderproduct'){ echo $dropdown_open; } ?>"  >
     <i class="nav-icon fas fa-image"></i>  
     <!--<p>-->
       ORDER | DETAILS
       <i class="right <?php if($segment == 'order' || $segment == 'orderproduct'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
     </p>
   </a>
   <ul class="nav nav-treeview" style="display:<?php if($segment == 'order' || $segment == 'orderproduct'){echo 'block';}else{echo 'none';}?>">
      
    <li class="nav-item" style="<?php if($segment == 'order'){ echo $ind_selected_color; } ?> ">
       <a href="{{URL('admin/order')}}" class="nav-link">
         <i class="far fa-image nav-icon"></i>
         <p> ORDER </p>
       </a>
    </li>

    <li class="nav-item" style="<?php if($segment == 'orderproduct'){ echo $ind_selected_color; } ?> ">
       <a href="{{URL('admin/orderproduct')}}" class="nav-link">
         <i class="far fa-image nav-icon"></i>
         <p> ORDER PRODUCT </p>
       </a>
    </li>


   </ul>
 </li>

<!-- ============================================================ ORDER MANAGEMENT ============================================= -->



<!-- ============================================================ CRUD GENERATOR MANAGEMENT ============================================= -->

<li class="nav-item" style="<?php if($segment == 'generator'){ echo $group_select_color; } ?>"  >
   <a href="#" class="nav-link"  style="<?php if($segment == 'generator'){ echo $dropdown_open; } ?>"  >
     <i class="nav-icon fas fa-image"></i>
     
       CRUD GENERATOR
       <i class="right <?php if($segment == 'generator'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>
     </p>
   </a>
   <ul class="nav nav-treeview" style="display:<?php if($segment == 'generator'){echo 'block';}else{echo 'none';}?>">
      
    <li class="nav-item" style="<?php if($segment == 'generator'){ echo $ind_selected_color; } ?> ">
       <a href="{{URL('admin/generator')}}" class="nav-link">
         <i class="far fa-image nav-icon"></i>
         <p> generator </p>
       </a>
    </li>

   </ul>
 </li>

<!-- ============================================================ END CRUD GENERATOR MANAGEMENT ============================================= -->







<!-- ============================================================ Menues JSON ================================================= -->
<!--@foreach($laravelAdminMenus->menus as $section)-->
<!--@if($section->items)-->
<!--<li class="nav-item" style="<?php //if($segment == 'generator'){ echo $group_select_color; } ?>"  >-->

<!--    <a href="#" class="nav-link"  style="<?php //if($segment == 'generator'){ echo $dropdown_open; } ?>"  >-->
<!--    <i class="nav-icon fas fa-image"></i>-->
<!--    <p>-->
<!--        {{ $section->section }}-->
<!--        <i class="right <?php //if($segment == 'generator'){echo 'fas fa-angle-down';}else{echo 'fas fa-angle-left';} ?>"></i>-->
<!--    </p>-->
<!--    </a>-->
    
    
<!--    <ul class="nav nav-treeview" style="display:<?php //if($segment == 'generator'){echo 'block';}else{echo 'none';}?>">-->
        
<!--        @foreach($section->items as $menu)-->
<!--        <li class="nav-item" style="<?php //if($segment == 'generator'){ echo $ind_selected_color; } ?> ">-->
<!--            <a href="{{ url($menu->url) }}" class="nav-link">-->
<!--            <i class="far fa-image nav-icon"></i>-->
<!--            <p>  {{ $menu->title }} </p>-->
<!--            </a>-->
<!--        </li>-->
<!--        @endforeach-->

<!--    </ul>-->
    
<!--  </li>-->
<!--@endif-->
<!--@endforeach-->
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


