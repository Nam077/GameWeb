@extends('layouts.home')
@section('main')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="{{asset('sites/assets/img/bg/breadcrumbs-bg.webp')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Game details</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.html">Home </a></li>
                            <li><span>//</span></li>
                            <li> Game</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- page wrapper start -->
    <div class="page_wrapper">

        <!--game details section area start-->
        <section class="game_details_section mb-125">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="game_details_inner">
                            <div class="game_details_content top">
                                <span>BONX Digital Game Studio</span>
                                <h2 class="game_details_title">{{$game -> name}} game</h2>
                                {{--                                <div class="game_details_desc">--}}
                                {{--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500--}}
                                {{--                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap electro--}}
                                {{--                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more--}}
                                {{--                                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>--}}
                                {{--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500--}}
                                {{--                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap electro--}}
                                {{--                                        recently with desktop publishing software like including versions.</p>--}}
                                {{--                                </div>--}}
                            </div>

                            <div class="game_details_thumb_inner slick__activation slick_navigation" data-slick='{
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "arrows": true,
                                "dots": false,
                                "autoplay": true,
                                "speed": 200,
                                "infinite": true ,
                                "responsive":[
                                {"breakpoint":576, "settings": { "slidesToShow": 1 } }
                                ]
                            }'>

                                @foreach($game->gameImage as $imageItem)
                                    <div class="game_details_thumb">
                                        <img width="1170" height="540" src="{{$imageItem->image_path}}" alt="">
                                    </div>
                                @endforeach
                            </div>
                            <div class="start_now_btn">
                                <a class="btn btn-link" href="{{route('home.ranking',['id'=>$game->id])}}">RANKING<img width="20" height="20"
                                                                                                                       src="{{asset('sites/assets/img/icon/arrrow-icon.webp')}}"
                                                                                                                       alt=""> </a>
                            </div>
                            <br>
                            <div class="start_now_btn">
                                <a class="btn btn-link" href="{{route('game.'.$game->path,[$game ->id])}}">START NOW <img width="20" height="20"
                                                                                                                          src="{{asset('sites/assets/img/icon/arrrow-icon.webp')}}"
                                                                                                                          alt=""> </a>
                            </div>

                            <div class="game_details_content bottom">
                                <div class="game_details_content_step">
                                    <h2>Description:</h2>

                                    <div class="game_details_desc">
                                        {!! $game->content !!}
                                    </div>
                                </div>
                                <div class="blog_comment_wrapper match_details_comment">
                                    <div class="comments_box">
                                        <div class="comments_title">
                                            <h2>Review:</h2>
                                        </div>
                                        {{--                                        <div class="comment_list d-flex">--}}
                                        {{--                                            <div class="comment_thumb">--}}
                                        {{--                                                <img width="100" height="100" src="{{asset('sites/assets/img/blog/post-comment1.webp')}}" alt="">--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="comment_content">--}}
                                        {{--                                                <a href="#"> <img width="50" height="50" src="{{asset('sites/assets/img/others/dot-button.webp')}}" alt=""> </a>--}}
                                        {{--                                                <h3>Randolph Frazier</h3>--}}
                                        {{--                                                <div class="game__review d-flex align-items-center">--}}
                                        {{--                                                    <ul class="d-flex">--}}
                                        {{--                                                        <li><a href="#"><i class="icofont-star"></i></a></li>--}}
                                        {{--                                                        <li><a href="#"><i class="icofont-star"></i></a></li>--}}
                                        {{--                                                        <li><a href="#"><i class="icofont-star"></i></a></li>--}}
                                        {{--                                                        <li><a href="#"><i class="icofont-star"></i></a></li>--}}
                                        {{--                                                        <li><a href="#"><i class="icofont-star"></i></a></li>--}}
                                        {{--                                                    </ul>--}}
                                        {{--                                                    <span> 28 January, 2021</span>--}}
                                        {{--                                                </div>--}}
                                        {{--                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem sum has been--}}
                                        {{--                                                    unknown printer took a galley of type and scrambled it to make a type specimen book. It has surv--}}
                                        {{--                                                    with desktop publishing software like including versions.</p>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        @foreach($gameRate as $itemRate)
                                            <div class="comment_list d-flex">
                                                <div class="comment_thumb">
                                                    <img width="100" height="100" src="https://template.hasthemes.com/bonx/bonx/assets/img/blog/post-comment1.webp" alt="">
                                                </div>
                                                <div class="comment_content">
                                                    <a href="#"> <img width="50" height="50" src="{{asset('sites/assets/img/others/dot-button.webp')}}" alt=""> </a>
                                                    <h3>{{$itemRate->rateUser->name}}</h3>

                                                    <div class="game__review d-flex align-items-center">
                                                        <ul class="d-flex">
                                                            @if($itemRate->rate > 0)
                                                                @foreach (range(1, $itemRate->rate) as $rateStar)
                                                                    <li><a href="#"><i class="icofont-star"></i></a></li>
                                                                @endforeach
                                                            @endif
                                                        </ul>
                                                        <span> 28 January, 2021</span>
                                                    </div>
                                                    <p>{{$itemRate -> review}}</p>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                    @if(auth()->check())
                                        <div class="comments_form">
                                            <div class="comments_title">
                                                <h2>Place your review:</h2>
                                            </div>
                                            <div class="comments_form_inner">
                                                <form method="post" action="{{route('game.saverate',['id'=>$game->id])}}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="comments_form_input input">
                                                                <output>4</output>
                                                                <input name="rate" type="range" value="4" min="1" max="5" oninput="this.previousElementSibling.value = this.value">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="comments_form_input">
                                                                <textarea name="review" placeholder="Write a review from here"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_input_btn text-center">
                                                        <button type="submit" class="btn btn-link">SUBMIT NOW</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endif

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--game details section area end-->

        <!-- counterup section start -->
        <section class="counterup_section mb-130">
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

        <!-- gaming update section start -->
        <section class="gaming_update_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="gaming_update_inner d-flex justify-content-between align-items-center" data-bgimg="{{asset('sites/assets/img/bg/gaming-update.webp')}}">
                            <div class="gaming_update_text">
                                <h2>Connect with us <br>
                                    for gamING update.</h2>
                            </div>
                            <div class="gaming_update_btn">
                                <a class="btn btn-link" href="{{route('home.contact')}}">CONNECT NOW <img width="20" height="20" src="{{asset('sites/assets/img/icon/arrrow-icon.webp')}}"
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
