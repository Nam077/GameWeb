@extends('layouts.home')
@section('main')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="assets/img/bg/breadcrumbs-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>BLOG PAGE</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.html">Home </a></li>
                            <li><span>//</span></li>
                            <li> Blog List Right Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- page wrapper start -->
    <div class="page_wrapper">

        <!-- blog page section start -->
        <section class="blog_page_section mb-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_page_wrapper">
                            <div class="blog_page_inner">
                                @foreach($blog as $itemBlog)
                                    <div class="single_blog d-flex align-items-center">
                                        <div class="blog_thumb">
                                            <a href="{{route('home.blogdetails',['slug'=>$itemBlog->slug])}}"><img width="200" height="200" src="{{$itemBlog->image_path}}"
                                                                                                                   alt=""></a>
                                        </div>
                                        <div class="blog_content">
                                            <div class="blog_date">
                                                <span><i class="icofont-calendar"></i>  {{$itemBlog -> created_at}}</span>
                                            </div>
                                            <h3><a href="{{route('home.blogdetails',['slug'=>$itemBlog->slug])}}">{{$itemBlog -> name}}</a></h3>
                                            <a href="{{route('home.blogdetails',['slug'=>$itemBlog->slug])}}">READ MORE</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{ $blog->appends(request()->all())->links() }}
{{--                            <div class="pagination pagination_pages">--}}
{{--                                <ul>--}}
{{--                                    <li class="current"><span>1</span></li>--}}
{{--                                    <li><a href="#">2</a></li>--}}
{{--                                    <li><a href="#">3</a></li>--}}
{{--                                    <li><a href="#">4</a></li>--}}
{{--                                    <li class="next"><a href="#"><i class="icofont-rounded-double-right"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_sidebar blog_widget">
                            <div class="blog_widget_list mb-50">
                                <h3>Search Here</h3>
                                <div class="widget_search">
                                    <form action="#">
                                        <input placeholder="Search here" type="text">
                                        <button type="submit"><i class="icofont-search-1"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="blog_widget_list mb-50">
                                <h3>All Tag</h3>
                                <div class="widget_category blog_widget_category">
                                    <ul>
                                        @foreach($tag as $itemTag)
                                            <li><a href="#"><i class="icofont-rounded-double-right"></i> {{$itemTag -> name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="blog_widget_thumb mb-50">
                                <img width="370" height="505" src="https://template.hasthemes.com/bonx/bonx/assets/img/blog/blog-sidebar-thumb.webp" alt="">
                                <div class="widget_play_btn">
                                    <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s"
                                       href="{{route('home.allgame')}}">Play Now <img width="20" height="20"
                                                                                      src="{{asset('sites/assets/img/icon/arrrow-icon.webp')}}"
                                                                                      alt=""> </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog page section end -->

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
@endsection
