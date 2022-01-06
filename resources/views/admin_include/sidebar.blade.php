<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home.index')}}" class="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.pn') }}g" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Web Game</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

    {{--
    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
  <i class="fas fa-search fa-fw"></i>
</button>
            </div>
        </div>
    </div> --}}
    <?php
    $menu = config('menucf');
    ?>
    <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @foreach ($menu as $m)
                    <li class="nav-item">
                        <a href="{{route($m['route'])}}" class="nav-link ">
                            <i class="nav-icon fas {{$m['icon']}}"></i>
                            <p>{{$m['label']}}
                                @if(isset($m['item']))
                                    <i class="right fas fa-angle-left"></i>
                                @endif
                            </p>
                        </a>
                        @if(isset($m['item']))
                            @foreach ($m['item'] as $s)
                                <ul class="nav nav-active">
                                    <li class="nav-item">
                                        <a href="{{route($s['route'])}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{$s['label']}}</p>
                                        </a>
                                    </li>
                                </ul>
                            @endforeach
                        @endif
                    </li>
                @endforeach


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
