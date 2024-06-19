@extends('layouts.backend')

@section('css')
<style>

body {
    font-family: "Oswald", sans-serif !important;
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
                <h2>What are you looking for?</h2>
                <ul>
                    <li>
                        <a href="{{ URL('find/1') }}">
                            <span>
                                <img src="{{ asset('img/school.svg')}}">
                            </span>
                            <h3>FIND A SCHOOL</h3>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL('find/2') }}">
                            <span>
                                <img src="{{ asset('img/coach.svg')}}">
                            </span>
                            <h3>FIND A COACH</h3>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL('find/3') }}">
                            <span>
                                <img src="{{ asset('img/rate.svg')}}">
                            </span>
                            <h3>RATE A COACH</h3>
                        </a>
                    </li>
                </ul>
                
                
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
    <div class="asso container-fluid">
        <div class="container">
            <div class="association">
                <div class="list">
                    <h3>Listing <span>more</span> than just one association</h3>
                    <ul>
                        <li class="school-list">
                            <div class="lgo">
                                <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2024/01/National_Junior_College_Athletic_Association_logo.webp" width="100">
                            </div>
                            <div class="schools-data">
                                <div class="sch">
                                    <h4>1100+</h4>
                                    <span>Schools</span>
                                </div>
                                <div class="sch">
                                    <h4>24</h4>
                                    <span>Sports</span>
                                </div>
                                <div class="sch">
                                    <h4>19,000+</h4>
                                    <span>Coaches/teams</span>
                                </div>
                            </div>
                        </li>
                        <li class="school-list">
                            <div class="lgo">
                                <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2024/01/National_Junior_College_Athletic_Association_logo-1.webp" width="100">
                            </div>
                            <div class="schools-data">
                                <div class="sch">
                                    <h4>500+</h4>
                                    <span>Schools</span>
                                </div>
                                <div class="sch">
                                    <h4>29</h4>
                                    <span>Sports</span>
                                </div>
                                <div class="sch">
                                    <h4>3800+</h4>
                                    <span>Coaches/teams</span>
                                </div>
                            </div>
                        </li>
                        <li class="school-list">
                            <div class="lgo">
                                <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2024/01/National_Junior_College_Athletic_Association_logo-2.webp" width="100">
                            </div>
                            <div class="schools-data">
                                <div class="sch">
                                    <h4>240+</h4>
                                    <span>Schools</span>
                                </div>
                                <div class="sch">
                                    <h4>28</h4>
                                    <span>Sports</span>
                                </div>
                                <div class="sch">
                                    <h4>3500+</h4>
                                    <span>Coaches/teams</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="news-title-area">
                <h3>Blog</h3>
                <a href="https://redcraftmedia.net/ratemycollege/blog-page-24/">
                    VIEW ALL
                </a>
            </div>
            <div class="blog-listing">
                <div class="one">
                    <div class="blog-post">
                        <div class="featured-img">
                            <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2022/04/Travis-Hunter-1200x628-1.webp">
                        </div>
                        <div class="post-content">
                            <div class="p-meta">
                                <ul>
                                    <li>
                                        <a href="https://redcraftmedia.net/ratemycollege/author/abhi-iyer/">
                                            Abhi Iyer
                                        </a>
                                    </li>
                                    <li>
                                        April 8, 2022
                                    </li>
                                </ul>
                            </div>
                            <h3>
                                <a href="https://redcraftmedia.net/ratemycollege/unfinished-athlete-of-the-month-travis-hunter/">
                                    Unfinished Athlete of the Month: Travis Hunter
                                </a>
                            </h3>
                            <p>
                                For only scratching the surface of his athletic career, Travis Hunter has shown himself to be one of the most athletic, versatile,
                            </p>
                            <a href="https://redcraftmedia.net/ratemycollege/unfinished-athlete-of-the-month-travis-hunter/" class="btn-link">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="two">
                    <div class="blog-post">
                        <div class="featured-img">
                            <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2022/04/1359273380.webp">
                        </div>
                        <div class="post-content">
                            <div class="p-meta">
                                <ul>
                                    <li>
                                        <a href="https://redcraftmedia.net/ratemycollege/author/haley-wald/">
                                            Haley Wald
                                        </a>
                                    </li>
                                    <li>
                                        April 7, 2022
                                    </li>
                                </ul>
                            </div>
                            <h3>
                                <a href="https://redcraftmedia.net/ratemycollege/trevor-zegras-is-not-your-average-forward/">
                                    Trevor Zegras Is Not Your Average Forward
                                </a>
                            </h3>
                            <a href="https://redcraftmedia.net/ratemycollege/trevor-zegras-is-not-your-average-forward/" class="btn-link">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-post">
                        <div class="featured-img">
                            <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2022/03/davis-bench-tw-gettyimages-1238911355.webp">
                        </div>
                        <div class="post-content">
                            <div class="p-meta">
                                <ul>
                                    <li>
                                        <a href="https://redcraftmedia.net/ratemycollege/author/cpasley/">
                                            Chris Pasley
                                        </a>
                                    </li>
                                    <li>
                                        March 11, 2022 
                                    </li>
                                </ul>
                            </div>
                            <h3>
                                <a href="https://redcraftmedia.net/ratemycollege/should-the-lakers-trade-anthony-davis/">
                                    Should the Lakers Trade Anthony Davis?
                                </a>
                            </h3>
                            <a href="https://redcraftmedia.net/ratemycollege/should-the-lakers-trade-anthony-davis/" class="btn-link">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="container">
            <div class="news-title-area">
                <h3>PODCAST</h3>
                <a href="https://redcraftmedia.net/ratemycollege/podcast-page-24/">
                    VIEW ALL
                </a>
            </div>
            <div class="podcast-list">
                <div class="d-flex align-items-start">
                  <div class="left-a">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="pd-item-1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                           <iframe id="player1" width="800" height="456" src="https://www.youtube.com/embed/huV5B2lfRmc" title="#1 Clippers Choke, LeBron MVP snub, Bronny James loves grass, Football is Back!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="tab-pane fade" id="pd-item-2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <iframe id="player2" width="800" height="456" src="https://www.youtube.com/embed/4fWdGEypUE8" title="#2 Championship Rings for LeBron James and Sue Bird, Dak Prescott&#39;s Injury, VOTE!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="tab-pane fade" id="pd-item-3" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <iframe id="player3" width="800" height="456" src="https://www.youtube.com/embed/R9SuuEgBoxQ" title="#3 LA Dodgers are CHAMPS, Dez Bryant &amp; Antonio Brown return to the NFL, Mental Health, Hoosiers WIN!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="tab-pane fade" id="pd-item-4" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <iframe id="player4" width="800" height="456" src="https://www.youtube.com/embed/NONU4KOV8ow" title="#4 UTPB Men&#39;s Basketball player Jordan Horn discusses his basketball journey" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="tab-pane fade" id="pd-item-5" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <iframe id="player5" width="800" height="456" src="https://www.youtube.com/embed/YOOXI71BubA" title="#5 Sports and Politics - WNBA becomes huge player in Senate Race, NBA comments on Capitol Hill" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="tab-pane fade" id="pd-item-6" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <iframe id="player6" width="800" height="456" src="https://www.youtube.com/embed/YEdj8oGmJ8c" title="#6 NBA Playoffs Round 1 - Knicks and Hawks.. favorite series?! Fans gone WILD!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                      </div>
                      <div class="app-box">
                          <h4>Listen to our podcast!</h4>
                          <p>Don't miss any of our podcast episodes. Subscribe to any of the below services.</p>
                          <div class="app-logos">
                              <span>
                                    <a href="https://open.spotify.com/show/65moPQJgnIwyVAA411ixnx">
                                        <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2024/01/spotify-podcast-badge-blk-grn-330x80-1.webp">
                                    </a>
                              </span>
                              <span>
                                    <a href="https://podcasts.apple.com/us/podcast/unfinished-business/id1534056371?uo=4">
                                      <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2024/01/Artboard-1@4x.webp">
                                    </a>
                              </span>
                              <!-- <span>
                                    <a href="">
                                     <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2024/01/EN_Google_Podcasts_Badge_2x.webp">
                                    </a>
                              </span> -->
                          </div>
                      </div>
                  </div>
                  <div class="right-a">
                      <h4>Episode List</h4>
                      <div class="nav flex-column nav-pills pd-item-list" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class="nav-link active pd-item" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#pd-item-1" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="pd-title">
                                <h4>#1 Clippers Choke, LeBron MVP snub, Bronny James loves grass, Football is Back!</h4>
                                <span>Oct 2, 2020</span>
                            </div>
                            <div class="pd-play">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="nav-link  pd-item" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#pd-item-2" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="pd-title">
                                <h4>#2 Championship Rings for LeBron James and Sue Bird, Dak Prescott's Injury, VOTE!</h4>
                                <span>Oct 17, 2020</span>
                            </div>
                            <div class="pd-play">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="nav-link  pd-item" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#pd-item-3" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="pd-title">
                                <h4>#3 LA Dodgers are CHAMPS, Dez Bryant & Antonio Brown return to the NFL, Mental Health, Hoosiers WIN!</h4>
                                <span>Oct 31, 2020</span>
                            </div>
                            <div class="pd-play">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="nav-link  pd-item" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#pd-item-4" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="pd-title">
                                <h4>#4 UTPB Men's Basketball player Jordan Horn discusses his basketball journey</h4>
                                <span>Nov 24, 2020</span>
                            </div>
                            <div class="pd-play">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="nav-link  pd-item" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#pd-item-5" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="pd-title">
                                <h4>#5 Sports and Politics - WNBA becomes huge player in Senate Race, NBA comments on Capitol Hill</h4>
                                <span>Jan 13, 2021</span>
                            </div>
                            <div class="pd-play">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="nav-link  pd-item" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#pd-item-6" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="pd-title">
                                <h4>#6 NBA Playoffs Round 1 - Knicks and Hawks.. favorite series?! Fans gone WILD!</h4>
                                <span>Jun 5, 2021</span>
                            </div>
                            <div class="pd-play">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="container">
            <div class="follow-us">
                <a href="https://twitter.com/_Unfnshed" target="_blank">
                    <div class="thumbnail-b">
                        <img src="https://redcraftmedia.net/ratemycollege/wp-content/uploads/2024/02/Tweet-Embed.webp">
                    </div>
                    <h3>FOLLOW US ON TWITTER</h3>
                </a>
            </div>
        </div>
    </div>
@endsection



@section('js')


<!-- JavaScript -->
    <script>
        // Function to stop all videos
        function stopAllVideos() {
            const iframes = document.querySelectorAll('iframe');
            iframes.forEach(iframe => {
                iframe.src = iframe.src;
            });
        }

        // Add click event listeners to tabs
        document.querySelectorAll('[data-bs-target]').forEach(tab => {
            tab.addEventListener('click', stopAllVideos);
        });
    </script>
 

@endsection
