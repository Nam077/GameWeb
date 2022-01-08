@extends('layouts.home')
@section('main')
    <!-- page wrapper start -->
    <div class="page_wrapper">

        <!--slide banner section start-->
        <section class="hero_banner_section d-flex align-items-center mb-130" data-bgimg="assets/img/bg/hero-bg1.webp">
            <div class="container">
                <div class="hero_banner_inner">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="hero_content">
                                <h1 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">Best Game <br>
                                    Playing Today.</h1>
                                <p class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">Chào mừng bạn đã đến với VKU GAME</p>
                                <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s"
                                   href="{{route('home.allgame')}}">Play Now <img width="20" height="20"
                                                                                  src="{{asset('sites/assets/img/icon/arrrow-icon.webp')}}"
                                                                                  alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero_position_img">
                <img width="926" height="772" src="{{asset('sites/assets/img/bg/hero-position-img.webp')}}" alt="">
            </div>
        </section>
        <!--slider area end-->

        <!-- gaming  world section start -->
        <section class="gaming_world_section mb-140">
            <div class="container">
                <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s"
                     data-wow-duration="1.1s">
                    <h2>yOU ARE MOST WELCOME <br>
                        IN GAMING WORLD.</h2>
                </div>
                <div class="gaming_world_inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single_gaming_world wow fadeInUp"
                                 data-bgimg="assets/img/others/gaming-world-bg1.webp" data-wow-delay="0.1s"
                                 data-wow-duration="1.1s">
                                <div class="gaming_world_thumb">
                                    <img width="141" height="157"
                                         src="{{asset('sites/assets/img/others/gaming-world1.webp')}}" alt="">
                                </div>
                                <div class="gaming_world_text">
                                    <h3>Live Streaming</h3>
                                    <p>When unknown printer took
                                        type and scrambled it to make type
                                        specimen book centuries,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single_gaming_world wow fadeInUp"
                                 data-bgimg="assets/img/others/gaming-world-bg2.webp" data-wow-delay="0.2s"
                                 data-wow-duration="1.2s">
                                <div class="gaming_world_thumb">
                                    <img width="156" height="157"
                                         src="{{asset('sites/assets/img/others/gaming-world2.webp')}}" alt="">
                                </div>
                                <div class="gaming_world_text">
                                    <h3>Game News</h3>
                                    <p>When unknown printer took
                                        type and scrambled it to make type
                                        specimen book centuries,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single_gaming_world wow fadeInUp"
                                 data-bgimg="assets/img/others/gaming-world-bg3.webp" data-wow-delay="0.3s"
                                 data-wow-duration="1.3s">
                                <div class="gaming_world_thumb">
                                    <img width="151" height="156"
                                         src="{{asset('sites/assets/img/others/gaming-world3.webp')}}" alt="">
                                </div>
                                <div class="gaming_world_text">
                                    <h3>Game Tournaments</h3>
                                    <p>When unknown printer took
                                        type and scrambled it to make type
                                        specimen book centuries,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gaming  world section end -->

        <!-- gaming video section start -->
        <section class="gaming_video_section mb-118 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="gaming_video_inner slick_navigation slick__activation" data-slick='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": true,
                            "speed": 200,
                            "infinite": true ,
                            "responsive":[
                            {"breakpoint":500, "settings": { "slidesToShow": 1 } }
                            ]
                        }'>
                            @foreach($slider as $itemSlider)
                                <div class="gaming_video_thumb">
                                    <img width="1170" height="540" src="{{$itemSlider ->image_path}}"
                                         alt="">
                                    <div class="gaming_video_paly_icon">
                                        <a class="video_popup" href="{{$itemSlider ->description}}"><img
                                                width="134" height="140"
                                                src="{{asset('sites/assets/img/others/play-btn.webp')}}" alt=""></a>
                                    </div>
                                    <div class="live_streaming_text">
                                        <h3>{{$itemSlider -> name}}</h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gaming video section end -->

        <!-- upcoming gaming section start -->
        <section style="display: none" class="upcoming_gaming_section mb-125">
            <div class="container">
                <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s"
                     data-wow-duration="1.1s">
                    <h2>Upcoming Match</h2>
                    <p>When unknown printer took type and scrambled it to make <br>
                        type specimen book centuries,</p>
                </div>
                <div class="upcoming_gaming_inner">
                    <div
                        class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center mb-30"
                        data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <div class="upcoming_gaming_text">
                            <p>20 August 2021 - 09:00 PM</p>
                            <h3><a href="match-details.html">Roar Spring Game 2021</a></h3>
                            <span>08 Teams Registered</span>
                        </div>
                        <div class="upcoming_play_video text-center">
                            <a class="video_popup" href="https://www.youtube.com/watch?v=eS9Qm4AOOBY"><img width="53"
                                                                                                           height="44"
                                                                                                           src="{{asset('sites/assets/img/others/play-btn2.webp')}}"
                                                                                                           alt=""></a>
                            <br>
                            <span>Live Stream</span>
                        </div>
                        <div class="upcoming_gaming_thumb d-flex align-items-center">
                            <div class="single_upcoming_thumb">
                                <img width="97" height="119"
                                     src="{{asset('sites/assets/img/others/upcoming-game-thumb1.webp')}}" alt="">
                            </div>
                            <div class="single_upcoming_thumb">
                                <img width="87" height="87" src="{{asset('sites/assets/img/others/game-vs1.webp')}}"
                                     alt="">
                            </div>
                            <div class="single_upcoming_thumb">
                                <img width="93" height="120"
                                     src="{{asset('sites/assets/img/others/upcoming-game-thumb2.webp')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div
                        class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center mb-30"
                        data-wow-delay="0.2s" data-wow-duration="1.2s">
                        <div class="upcoming_gaming_text">
                            <p>20 August 2021 - 09:00 PM</p>
                            <h3><a href="match-details.html">Skrit tournament 2021</a></h3>
                            <span>08 Teams Registered</span>
                        </div>
                        <div class="upcoming_play_video text-center">
                            <a class="video_popup" href="https://www.youtube.com/watch?v=eS9Qm4AOOBY"><img width="53"
                                                                                                           height="44"
                                                                                                           src="{{asset('sites/assets/img/others/play-btn2.webp')}}"
                                                                                                           alt=""></a>
                            <br>
                            <span>Youtube Stream</span>
                        </div>
                        <div class="upcoming_gaming_thumb d-flex align-items-center">
                            <div class="single_upcoming_thumb">
                                <img width="102" height="119"
                                     src="{{asset('sites/assets/img/others/upcoming-game-thumb3.webp')}}" alt="">
                            </div>
                            <div class="single_upcoming_thumb">
                                <img width="87" height="87" src="{{asset('sites/assets/img/others/game-vs2.webp')}}"
                                     alt="">
                            </div>
                            <div class="single_upcoming_thumb">
                                <img width="105" height="119"
                                     src="{{asset('sites/assets/img/others/upcoming-game-thumb4.webp')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center"
                         data-wow-delay="0.3s" data-wow-duration="1.3s">
                        <div class="upcoming_gaming_text">
                            <p>20 August 2021 - 09:00 PM</p>
                            <h3><a href="match-details.html">Ninja 360 Game 2021</a></h3>
                            <span>08 Teams Registered</span>
                        </div>
                        <div class="upcoming_play_video text-center">
                            <a class="video_popup" href="https://www.youtube.com/watch?v=eS9Qm4AOOBY"><img width="53"
                                                                                                           height="44"
                                                                                                           src="{{asset('sites/assets/img/others/play-btn2.webp')}}"
                                                                                                           alt=""></a>
                            <br>
                            <span>Twitch Stream</span>
                        </div>
                        <div class="upcoming_gaming_thumb d-flex align-items-center">
                            <div class="single_upcoming_thumb">
                                <img width="118" height="119"
                                     src="{{asset('sites/assets/img/others/upcoming-game-thumb5.webp')}}" alt="">
                            </div>
                            <div class="single_upcoming_thumb">
                                <img width="87" height="87" src="{{asset('sites/assets/img/others/game-vs3.webp')}}"
                                     alt="">
                            </div>
                            <div class="single_upcoming_thumb">
                                <img width="100" height="119"
                                     src="{{asset('sites/assets/img/others/upcoming-game-thumb6.webp')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="others_match_btn text-center">
                    <a class="btn btn-link" href="match.html">Other’s Match </a>
                </div>
            </div>
        </section>
        <!-- upcoming gaming section end -->

        <!-- counterup section start -->
        <section class="counterup_section mb-115 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="counterup_inner d-flex justify-content-center">
                            <div class="single_counterup one">
                                <div class="counterup_text">
                                    <h2 class="counterup color1">8697</h2>
                                    <span>TWITCH STREAMS</span>
                                </div>
                            </div>
                            <div class="single_counterup two">
                                <div class="counterup_text">
                                    <h2 class="counterup color2">428</h2>
                                    <span>TOTAL GAMES</span>
                                </div>
                            </div>
                            <div class="single_counterup three">
                                <div class="counterup_text">
                                    <h2 class="counterup color3">5367</h2>
                                    <span>YOUTUBE STREAMS</span>
                                </div>
                            </div>
                            <div class="single_counterup four">
                                <div class="counterup_text">
                                    <h2 class="counterup color4">249</h2>
                                    <span>PRO TEAM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counterup section end -->

        <!-- popular gaming  section start -->
        <section class="popular_gaming_section mb-140">
            <div class="container">
                <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s"
                     data-wow-duration="1.1s">
                    <h2>Popular GAME</h2>
                    <p>When unknown printer took type and scrambled it to make <br>
                        type specimen book centuries,</p>
                </div>
                <div class="popular_gaming_inner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                    <div class="row">
                        @if(!empty($game))
                            @foreach($game as $value)
                                <div class="col-lg-6 col-md-6">
                                    <div class="popular_gaming_thumb">
                                        <a href="#"><img width="570" height="330" src="{{$value -> feature_image_path}}" alt=""></a>
                                        <div class="gaming_details_btn">
                                            <a class="btn btn-link" href="{{route('home.details',['id' => $value->id])}}">Game Details <img width="20" height="20" src="{{asset
                                            ('sites/assets/img/icon/arrrow-icon
                                            .webp')
                                            }}" alt=""> </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    {{ $game->links() }}
                </div>
            </div>
        </section>
        <!-- popular gaming section end -->


        <!-- blog section start -->
        <section style="display: none" class="blog_section mb-90">
            <div class="container">
                <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s"
                     data-wow-duration="1.1s">
                    <h2>Latest Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt
                        ut labore et dolore magna</p>
                </div>
                <div class="row blog_inner">
                    <div class="col-lg-6">
                        <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s"
                             data-wow-duration="1.1s">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img width="200" height="200"
                                                                 src="{{asset('sites/assets/img/blog/blog1.webp')}}"
                                                                 alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_date">
                                    <span><i class="icofont-calendar"></i>  20 January 2021</span>
                                </div>
                                <h3><a href="blog-details.html">if you have seen Apple's
                                        recent jabs.</a></h3>
                                <a href="blog-details.html">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s"
                             data-wow-duration="1.1s">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img width="400" height="400"
                                                                 src="{{asset('sites/assets/img/blog/blog2.webp')}}"
                                                                 alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_date">
                                    <span><i class="icofont-calendar"></i>  20 January 2021</span>
                                </div>
                                <h3><a href="blog-details.html">Lorem ipsum dolor sit amet, adipisicing elit.</a></h3>
                                <a href="blog-details.html">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s"
                             data-wow-duration="1.1s">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img width="200" height="200"
                                                                 src="{{asset('sites/assets/img/blog/blog3.webp')}}"
                                                                 alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_date">
                                    <span><i class="icofont-calendar"></i>  20 January 2021</span>
                                </div>
                                <h3><a href="blog-details.html"> Perferendis hic sint are rem, incidunt vitae.</a></h3>
                                <a href="blog-details.html">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s"
                             data-wow-duration="1.1s">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img width="200" height="200"
                                                                 src="{{asset('sites/assets/img/blog/blog4.webp')}}"
                                                                 alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_date">
                                    <span><i class="icofont-calendar"></i>  20 January 2021</span>
                                </div>
                                <h3><a href="blog-details.html">if you have seen Apple's
                                        recent jabs.</a></h3>
                                <a href="blog-details.html">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section end -->
        <!-- blog section start -->
        <section class="blog_section mb-90">
            <div class="container">
                <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <h2>Latest Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna</p>
                </div>
                <div class="row blog_inner">
                    @foreach($blog as $itemBlog)
                    <div class="col-lg-6">
                        <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="blog_thumb">
                                <a href="{{route('home.blogdetails',['slug' => $itemBlog->slug])}}"><img width="200" height="200" src="{{$itemBlog -> image_path}}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_date">
                                    <span><i class="icofont-calendar"></i> {{date('d-m-Y', strtotime($itemBlog->created_at))}}  by <a
                                            href="#">{{$itemBlog->nameUser->name}}</a></span>
                                </div>
                                <h3><a href="{{route('home.blogdetails',['slug' => $itemBlog->slug])}}">{{$itemBlog -> name}}</a></h3>
                                <a href="{{route('home.blogdetails',['slug' => $itemBlog->slug])}}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- blog section end -->
        <!-- gaming update section start -->
        <section class="gaming_update_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="gaming_update_inner d-flex justify-content-between align-items-center"
                             data-bgimg="assets/img/bg/gaming-update.webp">
                            <div class="gaming_update_text">
                                <h2>Connect with us <br>
                                    for gamING update.</h2>
                            </div>
                            <div class="gaming_update_btn">
                                <a class="btn btn-link" href="{{route('home.contact')}}">CONNECT NOW <img width="20" height="20"
                                                                                             src="{{asset('sites/assets/img/icon/arrrow-icon.webp')}}"
                                                                                             alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gaming update section end -->

    </div>
@endsection
