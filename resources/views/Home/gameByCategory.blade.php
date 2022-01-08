@extends('layouts.home')
@section('main')
    <!-- page wrapper start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="assets/img/bg/breadcrumbs-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>All bonx game</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route('home.index')}}">Home </a></li>
                            <li> <span>//</span></li>
                            <li>  PAGES</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- page wrapper start -->
    <div class="page_wrapper">

        <!-- popular gaming  section start -->
        <div class="gaming_page_section mb-125">
            <div class="container">
                <div class="gaming_page_header mb-70">
                    <form action="">
                        <div class="gaming_header_inner d-flex justify-content-between">
                            <div class="gaming_form_left d-flex">

                                    <h3>{{$namecategory->name}}</h3>

                            </div>
                            <div class="gaming_form_search">
                                <input name="key" placeholder="Search here" type="text">
                                <button type="submit"><i class="icofont-search-1"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="gaming_page_inner">
                    <div class="row">
                        @foreach($game as $value)
                            <div class="col-lg-6 col-md-6">
                                <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                    <a href="#"><img width="570" height="330" src="{{$value->feature_image_path}}" alt=""></a>
                                    <div class="gaming_details_btn">
                                        <a class="btn btn-link" href="{{route('home.details',['id' =>$value->id])}}">Game Details <img width="20" height="20" src="{{asset('sites/assets/img/icon/arrrow-icon.webp')}}" alt=""> </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="others_gane_btn text-center">
                    <a class="btn btn-link" href="#">Other’s Game </a>
                </div>
            </div>
        </div>
        <!-- popular gaming section end -->

        <!-- counterup section start -->
        <section class="counterup_section wow fadeInUp mb-130" data-wow-delay="0.1s" data-wow-duration="1.1s">
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
                                    <h2 class="counterup color2">{{$namecategory->gameall()->count()}}</h2>
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

        <!-- gaming update section start -->
        <section class="gaming_update_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="gaming_update_inner d-flex justify-content-between align-items-center" data-bgimg="assets/img/bg/gaming-update.webp">
                            <div class="gaming_update_text">
                                <h2>Connect with us <br>
                                    for gamING update.</h2>
                            </div>
                            <div class="gaming_update_btn">
                                <a class="btn btn-link" href="{{route('home.contact')}}">CONNECT NOW <img width="20" height="20" src="{{asset('sites/assets/img/icon/arrrow-icon.webp')}}" alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gaming update section end -->

    </div>
@endsection
