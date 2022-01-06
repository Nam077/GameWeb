<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
    <div class="offcanvas-header justify-content-end">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="offcanvas_main_menu">
            <li class="menu-item-has-children active">
                <a href="{{route('home.index')}}">Home</a>
            </li>
            <li class="menu-item-has-children"><a href="">Game</a>
                <ul class="sub-menu">
                    <li><a href="match.html">Category</a></li>
                    <li><a href="match-details.html">Match Details</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">All Game</a></li>
                    <li><a href="#">Game Details</a></li>
                    <li><a href="#">Faq Page</a></li>
                    <li><a href="#">Players</a></li>
                    <li><a href="#">Player Details</a></li>
                    <li><a href="#">Error 404</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="#">Ranking</a>
                <ul class="sub-menu">
                    <li><a href="#">Blog Left Sidebar</a></li>
                    <li><a href="#">Blog Right Sidebar</a></li>
                    <li><a href="#">Blog Without Sidebar</a></li>
                    <li><a href="#">Blog Grid Left Sidebar</a></li>
                    <li><a href="#">Blog Grid Right Sidebar</a></li>
                    <li><a href="#">Blog Grid Without Sidebar</a></li>
                    <li><a href="#">Blog Details Left Sidebar</a></li>
                    <li><a href="#">Blog Details Right Sidebar</a></li>
                    <li><a href="#">Blog Details</a></li>
                </ul>
            </li>
            @if(auth()->check())
            <li class="menu-item-has-children"><a href="#">{{Auth::user()->name}}</a>
                <ul class="sub-menu">
                    <li><a href="#">Account</a></li>
                    <li><a href="#">All Game</a></li>
                </ul>
            </li>
            @else
                <li class="menu-item-has-children">
                    <a href="#">Login</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('home.login')}}">Login</a></li>
                        <li><a href="{{route('home.register')}}">Register</a></li>
                    </ul>
                </li>
            @endif
            <li class="menu-item-has-children"><a href="contact.html">Contact Us</a></li>
        </ul>
    </div>
</div>
