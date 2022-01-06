@extends('layouts.home')
@section('main')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="assets/img/bg/breadcrumbs-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Login</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.html">Home </a></li>
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

        <!-- contact section start -->
        <section class="contact_page_section mb-140">
            <div class="container">
                <div class="row justify-content-between align-items-center mb-n50">
                    <div class="col-lg-6 col-md-8 col-12 mx-auto mb-50">
                        <img width="550" height="550" src="{{asset("sites/assets/img/others/about-thumb.webp")}}" alt="">
                    </div>
                    <div class="col-lg-5 col-md-8 col-12 mx-auto mb-50">
                        <div class="section_title text-center mb-60">
                            <h2>Login</h2>
                        </div>
                        <form method="post">
                            @csrf
                            <div class="form_input">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" placeholder="Enter email">
                            </div>
                            <div class="form_input">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form_input_btn text-center">
                                <button type="submit" class="btn btn-link">Login</button>

                            </div>
                        </form>
                        <p class="text-center">Don't have any account, <a href="{{route("home.register")}}">Signup here</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact section end -->

@endsection
