@extends('layouts.home')
@section('main')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="assets/img/bg/breadcrumbs-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>BLOG DETAILS</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.html">Home </a></li>
                            <li><span>//</span></li>
                            <li> Blog Details Right Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- page wrapper start -->
    <div class="page_wrapper">

        <!--blog body area start-->
        <section class="blog_details_section mb-130">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog_details_inner">
                            <div class="blog_details_header text-center">
                                <div class="blog__meta_date">
                                    <ul class="d-flex justify-content-center">
                                        <li><span>By</span> Harold Leonard</li>
                                        <li> 03 April, 21</li>
                                        <li>0 min read</li>
                                    </ul>
                                </div>
                                <div class="blog_details_title">
                                    <h2>{{$blog->name}}</h2>
                                </div>
                                <div class="widget_tags">
                                    <ul>
                                        @foreach ($blog->tags as $itemtag)
                                            <li><a href="#">{{$itemtag->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div style="" class="blog_detail ss_content ">
                                {!! $blog->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog_like_area" data-bgimg="assets/img/blog/blog-like-bg.webp">
                <div class="container">
                    <div class="blog_like_title">
                        <h2>You may also like </h2>
                    </div>
                    <div class="blog_like_inner slick__activation2" data-slick='{
                        "slidesToShow": 2,
                        "slidesToScroll": 1,
                        "arrows": true,
                        "dots": false,
                        "autoplay": false,
                        "speed": 300,
                        "infinite": true ,
                        "responsive":[
                        {"breakpoint":992, "settings": { "slidesToShow": 1 } },
                        {"breakpoint":576, "settings": { "slidesToShow": 1 } }
                        ]
                    }'>
                        @if( count($blogFooter) > 4)
                            @foreach( range(0, (int)(count($blogFooter)/4)) as $item)

                                <div class="blog_like_list">
                                    @if($blogFooter[0 +4*$item] != null)
                                        <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                            <div class="blog_thumb">
                                                <a href="{{route('home.blogdetails',['slug' => $blogFooter[0 +4*$item]->slug])}}"><img width="200" height="200"
                                                                                                                                 src="{{$blogFooter[0 +4*$item]
                                                ->image_path}}" alt=""></a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="blog_date">
                                                    <span><i class="icofont-calendar"></i>   {{$blogFooter[0 +4*$item]->created_at}} </span>
                                                </div>
                                                <h3><a href="{{route('home.blogdetails',['slug' => $blogFooter[0 +4*$item]->slug])}}">{{$blogFooter[0 +4*$item] ->name}}</a></h3>
                                                <a href="{{route('home.blogdetails',['slug' => $blogFooter[0 +4*$item]->slug])}}">READ MORE</a>
                                            </div>
                                        </div>
                                    @endif
                                    @if($blogFooter[1 + 4*$item] != null)
                                        <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                            <div class="blog_thumb">
                                                <a href="{{route('home.blogdetails',['slug' => $blogFooter[1 +4*$item]->slug])}}"><img width="200" height="200"
                                                                                                                                     src="{{$blogFooter[1 + 4*$item]
                                                ->image_path}}" alt=""></a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="blog_date">
                                                    <span><i class="icofont-calendar"></i>   {{$blogFooter[1 +4*$item]->created_at}} </span>
                                                </div>
                                                <h3><a href="{{route('home.blogdetails',['slug' => $blogFooter[1 +4*$item]->slug])}}">{{$blogFooter[1 +4*$item] ->name}}</a></h3>
                                                <a href="{{route('home.blogdetails',['slug' => $blogFooter[1 +4*$item]->slug])}}">READ MORE</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="blog_like_list">
                                    @if($blogFooter[2 +4*$item] != null)
                                        <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                            <div class="blog_thumb">
                                                <a href="{{route('home.blogdetails',['slug' => $blogFooter[2 +4*$item]->slug])}}"><img width="200" height="200"
                                                                                                                                 src="{{$blogFooter[2 +4*$item] ->image_path}}" alt=""></a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="blog_date">
                                                    <span><i class="icofont-calendar"></i>   {{$blogFooter[2 +4*$item]->created_at}} </span>
                                                </div>
                                                <h3><a href="{{route('home.blogdetails',['slug' => $blogFooter[2 +4*$item]->slug])}}">{{$blogFooter[2 +4*$item] ->name}}</a></h3>
                                                <a href="{{route('home.blogdetails',['slug' => $blogFooter[2 +4*$item]->slug])}}">READ MORE</a>
                                            </div>
                                        </div>
                                    @endif
                                    @if($blogFooter[3 +4*$item] != null)
                                        <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                            <div class="blog_thumb">
                                                <a href="blog-details.html"><img width="200" height="200" src="{{$blogFooter[3 +4*$item] ->image_path}}" alt=""></a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="blog_date">
                                                    <span><i class="icofont-calendar"></i>   {{$blogFooter[3 +4*$item]->created_at}} </span>
                                                </div>
                                                <h3><a href="blog-details.html">{{$blogFooter[3 +4*$item] ->name}}</a></h3>
                                                <a href="blog-details.html">READ MORE</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        @else
                            <div class="blog_like_list">
                                @if($blogFooter[0] != null)
                                    <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                        <div class="blog_thumb">
                                            <a href="{{route('home.blogdetails',['slug' => $blogFooter[0]->slug])}}"><img width="200" height="200" src="{{$blogFooter[0]
                                            ->image_path}}" alt=""></a>
                                        </div>
                                        <div class="blog_content">
                                            <div class="blog_date">
                                                <span><i class="icofont-calendar"></i>   {{$blogFooter[0]->created_at}} </span>
                                            </div>
                                            <h3><a href="{{route('home.blogdetails',['slug' => $blogFooter[0]->slug])}}">{{$blogFooter[0] ->name}}</a></h3>
                                            <a href="{{route('home.blogdetails',['slug' => $blogFooter[0]->slug])}}">READ MORE</a>
                                        </div>
                                    </div>
                                @endif
                                @if($blogFooter[1] != null)
                                    <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                        <div class="blog_thumb">
                                            <a href="{{route('home.blogdetails',['slug' => $blogFooter[1]->slug])}}"><img width="200" height="200" src="{{$blogFooter[1]
                                            ->image_path}}" alt=""></a>
                                        </div>
                                        <div class="blog_content">
                                            <div class="blog_date">
                                                <span><i class="icofont-calendar"></i>   {{$blogFooter[1]->created_at}} </span>
                                            </div>
                                            <h3><a href="{{route('home.blogdetails',['slug' => $blogFooter[1]->slug])}}">{{$blogFooter[1] ->name}}</a></h3>
                                            <a href="{{route('home.blogdetails',['slug' => $blogFooter[1]->slug])}}">READ MORE</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="blog_like_list">
                                @if($blogFooter[2] != null)
                                    <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                        <div class="blog_thumb">
                                            <a href="{{route('home.blogdetails',['slug' => $blogFooter[2]->slug])}}"><img width="200" height="200" src="{{$blogFooter[2]
                                            ->image_path}}" alt=""></a>
                                        </div>
                                        <div class="blog_content">
                                            <div class="blog_date">
                                                <span><i class="icofont-calendar"></i>   {{$blogFooter[2]->created_at}} </span>
                                            </div>
                                            <h3><a href="{{route('home.blogdetails',['slug' => $blogFooter[2]->slug])}}">{{$blogFooter[2] ->name}}</a></h3>
                                            <a href="{{route('home.blogdetails',['slug' => $blogFooter[2]->slug])}}">READ MORE</a>
                                        </div>
                                    </div>
                                @endif
                                @if($blogFooter[3] != null)
                                    <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                        <div class="blog_thumb">
                                            <a href="{{route('home.blogdetails',['slug' => $blogFooter[3]->slug])}}"><img width="200" height="200" src="{{$blogFooter[3]
                                            ->image_path}}" alt=""></a>
                                        </div>
                                        <div class="blog_content">
                                            <div class="blog_date">
                                                <span><i class="icofont-calendar"></i>   {{$blogFooter[3]->created_at}} </span>
                                            </div>
                                            <h3><a href="{{route('home.blogdetails',['slug' => $blogFooter[3]->slug])}}">{{$blogFooter[3] ->name}}</a></h3>
                                            <a href="{{route('home.blogdetails',['slug' => $blogFooter[3]->slug])}}">READ MORE</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog_comment_wrapper">
                            <div class="comments_box">
                                <div class="comments_title">
                                    <h2>COMMENTS (04)</h2>
                                </div>
                                <div class="comment_list d-flex">
                                    <div class="comment_thumb">
                                        <img width="100" height="100" src="assets/img/blog/post-comment1.webp" alt="">
                                    </div>
                                    <div class="comment_content">
                                        <a href="#"> <img width="36" height="27" src="assets/img/icon/reply.webp" alt=""> </a>
                                        <h3>Randolph Frazier</h3>
                                        <span> Web Designer</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem sum has been
                                            unknown printer took a galley of type and scrambled it to make a type specimen book. It has surv
                                            with desktop publishing software like including versions.</p>
                                    </div>
                                </div>
                                <div class="comment_list d-flex">
                                    <div class="comment_thumb">
                                        <img width="100" height="100" src="assets/img/blog/post-comment2.webp" alt="">
                                    </div>
                                    <div class="comment_content">
                                        <a href="#"> <img width="36" height="27" src="assets/img/icon/reply.webp" alt=""> </a>
                                        <h3>Kenia Bumgarner</h3>
                                        <span> user Interface designer</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem sum has been
                                            unknown printer took a galley of type and scrambled it to make a type specimen book. It has surv
                                            with desktop publishing software like including versions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comments_form">
                                <div class="comments_title">
                                    <h2>Leave A Comment</h2>
                                </div>
                                <div class="comments_form_inner">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="comments_form_input">
                                                    <input placeholder="Name *" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="comments_form_input">
                                                    <input placeholder="Email *" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="comments_form_input">
                                                    <input placeholder="Address *" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="comments_form_input">
                                                    <input placeholder="Subject" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="comments_form_input">
                                                    <textarea placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comments_submit_btn text-center">
                                            <a class="btn btn-link" href="#">SUBMIT NOW <img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--blog section area end-->

    </div>
    <!-- page wrapper end -->
@endsection
