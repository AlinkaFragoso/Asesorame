<?php
$menu = array();
if (!Auth::guest()){
    if(Auth::user()->type == 'admin'){
        $menu[] = array('target' => '_self', 'url' => 'dashboard',  'icon' => 'home',   'text' => 'Dashboard');
        $menu[] = array('target' => '_self', 'url' => 'zonas',   'icon' => 'map-o',   'text' => 'Zonas');
        $menu[] = array('target' => '_self', 'url' => 'usuarios',   'icon' => 'user',  'text' => 'Usuarios');
        $menu[] = array('target' => '_self', 'url' => 'almacenes',   'icon' => 'building',  'text' => 'Almacenes');
        $menu[] = array('target' => '_self', 'url' => 'materiales',   'icon' => 'cubes',  'text' => 'Materiales');
    }elseif(Auth::user()->type == 'supervisor'){
        $menu[] = array('target' => '_self', 'url' => 'zonas',   'icon' => 'map-o',   'text' => 'Mis Zonas');
        $menu[] = array('target' => '_self', 'url' => 'usuarios',   'icon' => 'user',  'text' => 'Usuarios');
        $menu[] = array('target' => '_self', 'url' => 'almacenes',   'icon' => 'building',   'text' => 'Mis Almacenes');
        $menu[] = array('target' => '_self', 'url' => 'materiales',   'icon' => 'cubes',   'text' => 'Materiales');

    }elseif(Auth::user()->type == 'worker'){
        $menu[] = array('target' => '_self', 'url' => 'dashboard',  'icon' => 'home',   'text' => 'Dashboard');
        $menu[] = array('target' => '_self', 'url' => 'zonas',   'icon' => 'map-o',   'text' => 'Mis zonas');
    }
}else{
    $menu[] = array('target' => '_self', 'url' => 'login',  'icon' => 'home',   'text' => 'Dashboard');
}
?>
<aside id="sidebar" class="sidebar c-overflow">
    <div class="s-profile">
        <a href="" data-ma-action="profile-menu-toggle">
            <div class="sp-pic">
                @if(!Auth::guest())
                <img src="{{ URL::asset('img/profiles/'.Auth::user()->id.'.png') }}" alt="">
                @endif
            </div>

            <div class="sp-info">
                @if(!Auth::guest())
                    {{ Auth::user()->name }}
                @endif
                <i class="zmdi zmdi-caret-down"></i>
            </div>
        </a>

        <ul class="main-menu">
            <li>
                <a href="{{ url('/perfil') }}"><i class="zmdi zmdi-face"></i> Mi perfil</a>
            </li>
            <li>
                <a href="{{ url('/logout') }}"><i class="zmdi zmdi-time-restore"></i> Cerrar sesión</a>
            </li>
        </ul>
    </div>


    <ul class="main-menu">
        @foreach($menu as $m)
            @if($m['url'] == Route::currentRouteName())
            <li class="active">
            @else
            <li class="">
            @endif
                <a href="{{ url($m['url']) }}" target="{{ $m['target'] }}"><i class="fa fa-{{ $m['icon'] }}"></i> {{ $m['text'] }}</a>
            </li>
        @endforeach
    </ul>
</aside>
