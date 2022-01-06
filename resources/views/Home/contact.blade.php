@extends('layouts.home')
@section('main')
    <div class="breadcrumbs_aree breadcrumbs_bg mb-140"
         data-bgimg="{{asset('sites/assets/img/bg/breadcrumbs-bg.webp')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text text-center">
                        <h1>Contact us</h1>
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.html">Home </a></li>
                            <li><span>//</span></li>
                            <li> PAGES</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page_wrapper">

        <!-- contact section start -->
        <section class="contact_page_section mb-140">
            <div class="container">
                <div class="contact_info_area">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="contact_info_list left wow fadeInUp"
                                 data-bgimg="{{asset('sites/assets/img/others/gaming-world-bg1.webp')}}"
                                 data-wow-delay="0.1s"
                                 data-wow-duration="1.1s">
                                <div class="contact_info_thumb">
                                    <img width="115" height="115" src="{{asset('sites/assets/img/icon/email.webp')}}"
                                         alt="">
                                </div>
                                <div class="contact_info_text">
                                    <h3>Email:</h3>
                                    <p>
                                        <a href="mailto:gamestudio@gmail.com">gamestudio@gmail.com</a> <br>
                                        <a href="mailto:support24@gmail.com">support24@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="contact_info_list center wow fadeInUp"
                                 data-bgimg="{{asset('sites/assets/img/others/gaming-world-bg2.webp')}}"
                                 data-wow-delay="0.2s"
                                 data-wow-duration="1.2s">
                                <div class="contact_info_thumb">
                                    <img width="115" height="115" src="{{asset('sites/assets/img/icon/location.webp')}}"
                                         alt="">
                                </div>
                                <div class="contact_info_text">
                                    <h3>Location:</h3>
                                    <p>100 N Aurora Ave #APT 19
                                        Oakland, Nebraska(NE), 68045</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="contact_info_list right wow fadeInUp"
                                 data-bgimg="{{asset('sites/assets/img/others/gaming-world-bg3.webp')}}"
                                 data-wow-delay="0.3s"
                                 data-wow-duration="1.3s">
                                <div class="contact_info_thumb">
                                    <img width="115" height="115" src="{{asset('sites/assets/img/icon/phone.webp')}}"
                                         alt="">
                                </div>
                                <div class="contact_info_text">
                                    <h3>Phone:</h3>
                                    <p>
                                        <a href="tel:(402)685-5964"> (402) 685-5964</a>
                                        <a href="tel:+88(00)4568457437"> +88 (00) 4568 457 437</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="contact_form_area">
                    <div class="section_title text-center mb-60">
                        <h2>GET IN TOUCH</h2>
                        <p>When unknown printer took type and scrambled it to make <br>
                            type specimen book centuries,</p>
                    </div>
                    <div class="contact_form_inner">
                        <form id="contact-form" action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_input">
                                        <input  class="@error('name') is-invalid @enderror" value="{{old('name')}}" name="name" placeholder="Name" type="text">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_input">
                                        <input class="@error('email') is-invalid @enderror" value="{{old('email')}}" name="email" placeholder="E-Mail" type="text">
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_input">
                                        <input class="@error('phone') is-invalid @enderror" value="{{old('phone')}}" name="phone" placeholder="Phone" type="text">
                                    </div>
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_input">
                                        <input class="@error('address') is-invalid @enderror" value="{{old('address')}}" name="address" placeholder="Address" type="text">
                                    </div>
                                    @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form_textarea">
                                <textarea class="@error('message') is-invalid @enderror" name="message" placeholder="Write a review from here">{{old('message')}}</textarea>
                                @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form_input_btn text-center">
                                <button type="submit" class="btn btn-link">SUBMIT NOW <img width="20" height="20"
                                                                                           src="{{asset('sites/assets/img/icon/arrrow-icon.webp')}}"
                                                                                           alt=""></button>
                            </div>
                            <p class="form-message"></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact section end -->

        <!--contact map start-->
        <div class="contact_map mt-70">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2691.981630361088!2d108.25360469836741!3d15.975370867085296!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1636647995161!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!--contact map end-->

        <!-- gaming update section start -->
        <section class="gaming_update_section contact_gaming_update">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="gaming_update_inner d-flex justify-content-between align-items-center"
                             data-bgimg="{{asset('sites/assets/img/bg/gaming-update.webp')}}">
                            <div class="gaming_update_text">
                                <h2>Connect with us <br>
                                    for gamING update.</h2>
                            </div>
                            <div class="gaming_update_btn">
                                <a class="btn btn-link" href="#">CONNECT NOW <img width="20" height="20"
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
    <!-- page wrapper end -->
@endsection
