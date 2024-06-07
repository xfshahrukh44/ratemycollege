<?php 

$get_route = Request::segment(1);

?>


<?php 

if($get_route != "admin"){

$searchvalue = "";

if(isset($_GET['mainsearch'])){
    
    $searchvalue = $_GET['mainsearch'];
    
}

?>

<!-- Navbar Start -->
    <div class="container-fluid bg-white header-main">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0 border">
                
                    
                    <a href="https://ratemycollage.stylish-prints.com/public/" class="navbar-brand">
                        <img class="img-fluid" src="{{ asset('img/logo.png') }}" alt="Logo">
                    </a>
                    
                    
               
                    
                    
                    <div class="search-bar">
                        
                        
                        
                    
                        <!--<button type="button" class="btn btn-primary">-->
                        <!--    <i class="fa fa-Z"> </i>-->
                        <!--</button>-->
                        
                     
                     <form action="{{ route('search_coach_school') }}">
                         
                        <div class="searchbar-header d-flex justify-content-end" >
                            
                           
                            <div class="input-container-search">
                                <input style="" name="mainsearch" class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Search for a coach or a school" value="{{ $searchvalue }}" required>
                                 <div class="options-search" style="margin-top: -8px;">
                                    <div class="form-check me-2">
                                        <input class="form-check-input" type="radio" name="searchOption" id="searchCoach" value="coach" <?php if(isset($_GET['searchOption']) && $_GET['searchOption'] == "coach"){ echo 'checked'; }  ?> required>
                                        <label class="form-check-label" for="searchCoach">
                                            Coach
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="searchOption" id="searchSchool" value="school"  <?php if(isset($_GET['searchOption']) && $_GET['searchOption'] == "school"){ echo 'checked'; }  ?> required>
                                        <label class="form-check-label" for="searchSchool">
                                            School
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" style="border-radius: 22px;border: none;padding: 17px;"> <span class="fa fa-search"></span> </button>
                            </div>
                            
                            
                        </div>
                         
                     </form>
                        
                        
                        
                    </div>
                
           
                
                
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        
                        <a href="https://ratemycollage.stylish-prints.com/public/" class="nav-item nav-link active">Home</a>
                        <a href="https://redcraftmedia.net/ratemycollege/blog-page-24/" class="nav-item nav-link">BLOG</a>
                        <a href="https://redcraftmedia.net/ratemycollege/podcast-page-24/" class="nav-item nav-link">PODCAST</a>
                        <!-- <a href="https://redcraftmedia.net/ratemycollege/contact-us-page-24/" class="nav-item nav-link">CONTACT US</a> -->
                        <a href="https://redcraftmedia.net/ratemycollege/about-page-24/" class="nav-item nav-link">ABOUT US</a>
                        
                       
                            @if(Auth::check())
                            
                                <a href="{{ URL('admin/dashboard') }}" class="nav-item nav-link">DASHBOARD</a> 
                            
                            @else
                            
                                <a href="{{ URL('adminlogin') }}" class="nav-item nav-link">LOGIN</a> 
                            
                            @endif
                        
                    </div>
                </div>
                <div class="social-a mr-2">
                    <ul class="d-flex">
                        <li>
                            <a href="https://www.facebook.com/ratemycollegecoaches">
                                <img width="32" height="32" src="{{ asset('img/FacebookLogo.png') }}">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/_unfnshed/">
                                <img width="32" height="32" src="{{ asset('img/InstagramLogo.png') }}">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/_Unfnshed">
                                <img width="32" height="32" src="{{ asset('img/TwitterLogo.png') }}">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    
    
<?php } ?>