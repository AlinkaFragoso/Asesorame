<?php
$menu = array();
if (!Auth::guest()){
    if(Auth::user()->tipo == 'asesor'){
        //$menu[] = array('target' => '_self', 'url' => 'dashboard',  'icon' => 'home',   'text' => 'Dashboard');
        $menu[] = array('target' => '_self', 'url' => '/asesorias',   'icon' => 'clipboard',   'text' => 'Solicitudes');
        //$menu[] = array('target' => '_self', 'url' => '/asesorias',   'icon' => 'edit',   'text' => 'Mis Asesorías');
        $menu[] = array('target' => '_self', 'url' => '/asesorias/historial',   'icon' => 'history',  'text' => 'Mi historial');
    }elseif(Auth::user()->tipo == 'asesorado'){
        $menu[] = array('target' => '_self', 'url' => '/mis_asesorias/solicitudes',   'icon' => 'clipboard',   'text' => 'Mis Solicitudes');
        $menu[] = array('target' => '_self', 'url' => '/mis_asesorias',   'icon' => 'edit',  'text' => 'Mis Asesorías');
        $menu[] = array('target' => '_self', 'url' => '/mis_asesorias/historial',   'icon' => 'history',   'text' => 'Mi historial');
    }elseif(Auth::user()->tipo == 'admin'){
        $menu[] = array('target' => '_self', 'url' => '/solicitudes',   'icon' => 'clipboard',   'text' => 'Solicitudes');
        $menu[] = array('target' => '_self', 'url' => '/usuarios/asesores',   'icon' => 'pencil',  'text' => 'Asesores');
        $menu[] = array('target' => '_self', 'url' => '/usuarios/asesorados',   'icon' => 'leanpub',  'text' => 'Asesorados');
    }
}
?>
@if(!Auth::guest())
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
                    {{ Auth::user()->nombre }}
                @endif
                <i class="fa fa-angle-down"></i>
            </div>
        </a>

        <ul class="main-menu">
            <li>
                <a href="{{ url('/perfil') }}"><i class="fa fa-child"></i> Mi perfil</a>
            </li>
            <li>
                <a href="{{ url('/logout') }}"><i class="fa fa-arrow-left"></i> Cerrar sesión</a>
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
@endif
