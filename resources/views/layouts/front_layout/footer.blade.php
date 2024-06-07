 
<?php 


$get_route = Request::segment(1);

if($get_route != "admin"){

?>

 
 
 <!-- Footer Start -->
    <div class="container-fluid footer mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="footer-wrap">
                <div class="logo">
                    <a href="https://ratemycollage.stylish-prints.com/public/">
                    <img src="{{ asset('img/ftr-logo.png') }}">
                    </a>
                </div>
                <div class="menu-ftr">
                    <ul>
                        <li>
                            <a href="https://www.ratemycollegecoaches.com/site-guidelines/#t-0">
                                TERMS OF USE
                            </a>
                        </li>
                        <li>
                            <a href="https://www.ratemycollegecoaches.com/site-guidelines/#t-1">
                                PRIVACY POLICY
                            </a>
                        </li>
                        <li>
                            <a href="https://www.ratemycollegecoaches.com/site-guidelines/#t-2">
                                SITE GUIDELINES
                            </a>
                        </li>
                        <li>
                            <a href="https://www.ratemycollegecoaches.com/site-guidelines/#t-3">
                                COPYRIGHT COMPLIANCE
                            </a>
                        </li>
                        <li>
                            <a href="https://redcraftmedia.net/ratemycollege/contact-us-page-24/">
                                CONTACT US
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <script>
    $(document).ready(function(){
        $('a[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
            // Get the previously active tab
            var previousTab = $(e.relatedTarget).attr('href');
            
            // Find the iframe within the previous tab and pause the video
            var $previousIframe = $(previousTab).find('iframe');
            if ($previousIframe.length) {
                var src = $previousIframe.attr('src');
                $previousIframe.attr('src', ''); // Clear the src attribute to stop the video
                $previousIframe.attr('src', src); // Reset the src attribute
            }
        });
    });
    </script>
<?php } ?>