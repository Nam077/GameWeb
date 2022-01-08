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
                            <li> <span>//</span></li>
                            <li>  Blog List Right Sidebar</li>
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
                                <div class="single_blog d-flex align-items-center">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img width="200" height="200" src="assets/img/blog/blog1.webp" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_date">
                                            <span><i class="icofont-calendar"></i>  20 January 2021</span>
                                        </div>
                                        <h3><a href="blog-details.html">It long established fact that reader
                                                distracted the readable.</a></h3>
                                        <a href="blog-details.html">READ MORE</a>
                                    </div>
                                </div>
                                <div class="single_blog d-flex align-items-center">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img width="200" height="200" src="assets/img/blog/blog2.webp" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_date">
                                            <span><i class="icofont-calendar"></i>  20 January 2021</span>
                                        </div>
                                        <h3><a href="blog-details.html">the readable content of a page when
                                                looking at its layout.</a></h3>
                                        <a href="blog-details.html">READ MORE</a>
                                    </div>
                                </div>
                                <div class="single_blog d-flex align-items-center">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img width="200" height="200" src="assets/img/blog/blog3.webp" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_date">
                                            <span><i class="icofont-calendar"></i>  20 January 2021</span>
                                        </div>
                                        <h3><a href="blog-details.html">  The point of using Lorem Ipsum that
                                                more-or-less normal</a></h3>
                                        <a href="blog-details.html">READ MORE</a>
                                    </div>
                                </div>
                                <div class="single_blog d-flex align-items-center">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img width="200" height="200" src="assets/img/blog/blog4.webp" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_date">
                                            <span><i class="icofont-calendar"></i>  20 January 2021</span>
                                        </div>
                                        <h3><a href="blog-details.html">distribution of letters, as opposed
                                                using Content here</a></h3>
                                        <a href="blog-details.html">READ MORE</a>
                                    </div>
                                </div>
                                <div class="single_blog d-flex align-items-center">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img width="200" height="200" src="assets/img/blog/blog5.webp" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_date">
                                            <span><i class="icofont-calendar"></i>  20 January 2021</span>
                                        </div>
                                        <h3><a href="blog-details.html">It long established fact that reader
                                                distracted the readable.</a></h3>
                                        <a href="blog-details.html">READ MORE</a>
                                    </div>
                                </div>
                                <div class="single_blog d-flex align-items-center">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img width="200" height="200" src="assets/img/blog/blog6.webp" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_date">
                                            <span><i class="icofont-calendar"></i>  20 January 2021</span>
                                        </div>
                                        <h3><a href="blog-details.html">the readable content of a page when
                                                looking at its layout.</a></h3>
                                        <a href="blog-details.html">READ MORE</a>
                                    </div>
                                </div>
                                <div class="single_blog d-flex align-items-center">
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img width="200" height="200" src="assets/img/blog/blog7.webp" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_date">
                                            <span><i class="icofont-calendar"></i>  20 January 2021</span>
                                        </div>
                                        <h3><a href="blog-details.html"> The point of using Lorem Ipsum that
                                                more-or-less normal</a></h3>
                                        <a href="blog-details.html">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination pagination_pages">
                                <ul>
                                    <li class="current"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li class="next"><a href="#"><i class="icofont-rounded-double-right"></i></a></li>
                                </ul>
                            </div>
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
                                <h3>POST CATEGORY</h3>
                                <div class="widget_category blog_widget_category">
                                    <ul>
                                        <li><a href="#"><i class="icofont-rounded-double-right"></i> Single Player </a></li>
                                        <li><a href="#"><i class="icofont-rounded-double-right"></i> Legendary </a></li>
                                        <li><a href="#"><i class="icofont-rounded-double-right"></i> ES Sports </a></li>
                                        <li><a href="#"><i class="icofont-rounded-double-right"></i> Animation Game </a></li>
                                        <li><a href="#"><i class="icofont-rounded-double-right"></i> Offline Game </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog_widget_thumb mb-50">
                                <img width="370" height="505" src="assets/img/blog/blog-sidebar-thumb.webp" alt="">
                                <div class="widget_play_btn">
                                    <a class="btn btn-link" href="all-game.html">Play Now <img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                                </div>
                            </div>
                            <div class="blog_widget_list tags">
                                <h3>Tags</h3>
                                <div class="widget_tags">
                                    <ul>
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Advanture</a></li>
                                        <li><a href="#"> Esports</a></li>
                                        <li><a href="#">Fantasy</a></li>
                                        <li><a href="#">Fortnite</a></li>
                                        <li><a href="#">Matches</a></li>
                                        <li><a href="#">Streamers</a></li>
                                        <li><a href="#">Gamer</a></li>
                                    </ul>
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
                        <div class="gaming_update_inner d-flex justify-content-between align-items-center" data-bgimg="assets/img/bg/gaming-update.webp">
                            <div class="gaming_update_text">
                                <h2>Connect with us <br>
                                    for gamING update.</h2>
                            </div>
                            <div class="gaming_update_btn">
                                <a class="btn btn-link" href="contact.html">CONNECT NOW <img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gaming update section end -->
@endsection
