@extends('layouts.home')
@section('main')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="assets/img/bg/breadcrumbs-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>signup</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{route('home.index')}}">Home </a></li>
                            <li><span>//</span></li>
                            <li> PAGES</li>
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
                            <h2>Signup</h2>
                        </div>
                        <form method="post">
                                @csrf
                                <div class="form_input">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input value="{{old('name')}}" class="@error('name') is-invalid @enderror" name="name" placeholder="Name" type="text">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form_input">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input value="{{old('name')}}" class="@error('email') is-invalid @enderror" name="email" placeholder="Email" type="email">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form_input">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input class="@error('password') is-invalid @enderror" value="{{old('password')}}" name="password" placeholder="Password" type="password">
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form_input">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input class="@error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Retype Password" type="password">
                                    @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form_input_btn text-center mb-40">
                                    <button type="submit" class="btn btn-link">Register</button>
                                </div>
                                <p class="text-center">Already have account, <a href="{{route("home.login")}}">Login here</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </section>
        <!-- contact section end -->

@endsection
