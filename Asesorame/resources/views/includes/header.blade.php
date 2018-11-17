<header id="header" class="clearfix" data-ma-theme="blue">
    <ul class="h-inner">
        <li class="hi-trigger ma-trigger" data-ma-action="sidebar-open" data-ma-target="#sidebar">
            <div class="line-wrap">
                <div class="line top"></div>
                <div class="line center"></div>
                <div class="line bottom"></div>
            </div>
        </li>

        <li class="hi-logo hidden-xs">
            <a href="{{ url('/') }}"> <img src="{{ URL::asset('img/software_logos/areas_verdes.png') }}" class="header-img"> Áreas verdes</a>
        </li>

        <li class="pull-right">
            <ul class="hi-menu">
                <li class="dropdown">
                    <a data-toggle="dropdown" href=""><i class="him-icon zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <li>
                            <a href="{{ url('/perfil') }}"><i class="zmdi zmdi-face"></i> Mi perfil</a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}"><i class="zmdi zmdi-time-restore"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Top Search Content -->
    <div class="h-search-wrap">
        <div class="hsw-inner">
            <i class="hsw-close zmdi zmdi-arrow-left" data-ma-action="search-close"></i>
            <input type="text">
        </div>
    </div>
</header>