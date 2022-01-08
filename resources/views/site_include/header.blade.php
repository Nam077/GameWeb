<header class="header_section header_transparent sticky-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main_header d-flex justify-content-between align-items-center">
                    <div class="header_logo">
                        <a class="sticky_none" href="{{route('home.index')}}"><img aria-label="logo" width="215"
                                                                                   height="79"
                                                                                   src="{{ asset('sites/assets/img/logo/logo.webp') }}"
                                                                                   alt=""></a>
                    </div>
                    <!--main menu start-->
                    <div class="main_menu d-none d-lg-block">
                        <nav>
                            <ul class="d-flex">
                                <li><a href="{{route('home.index')}}">Home</a></li>
                                <li><a href="#">Game</a>
                                    <ul class="sub_menu">
                                        <li><a href={{route('home.allgame')}}>All Game</a></li>
                                        <li><a href="#">Match Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('home.blog')}}">BLog</a>
                                </li>
                                <li><a href="#">Category</a>
                                    <ul class="sub_menu">
                                        @foreach($category as $item)
                                            <li><a href="{{route('home.gameCategory',['slug'=> $item->slug])}}">{{$item -> name}}</a></li>
                                        @endforeach


                                    </ul>
                                </li>
                                <li><a href="blog-left-sidebar.html">Ranking</a>
                                    <ul class="sub_menu">
                                        @foreach($gameall as $item)
                                            <li><a href="{{route('home.ranking',['id'=>$item->id])}}">{{$item->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li><a href="{{route('home.contact')}}">Contact</a></li>
                                @if(auth()->check())
                                    <li><a href="blog-left-sidebar.html">{{Auth::user()->name}}</a>
                                        <ul class="sub_menu">
                                            <li><a href="blog-left-sidebar.html">Account</a></li>
                                            <li><a href="{{route('home.logout')}}">Log Out</a></li>
                                        </ul>
                                    </li>
                                @else
                                    <li><a href="#">Login</a>
                                        <ul class="sub_menu">
                                            <li><a href="{{route('home.login')}}">Login</a></li>
                                            <li><a href="{{route('home.register')}}">Register</a></li>
                                        </ul>
                                    </li>
                                @endif

                            </ul>
                        </nav>
                    </div>
                    <!--main menu end-->
                    <div class="header_right_sidebar d-flex align-items-center">
                        <div class="canvas_open">
                            <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"><i
                                    class="icofont-navigation-menu"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
