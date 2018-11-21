@extends('layouts.app')

@section('breadcrum')
<ol class="breadcrumb">
    <li><a href="{!! url('/') !!}">Inicio</a></li>
    <li class="active">Solicitudes</li>
</ol>
@endsection

@section('content')

<div class="block-header">
	<h2>Solicitudes</h2>

    <!-- <div class="text-right">
        <a data-toggle="modal" href="#modalDefault" class="btn btn-sm btn-primary waves-effect">Solicitar asesoría</a>
    </div> -->
</div>

<div class="row">
    <div class="col-sm-12">
        @if(count($users))
        <div class="card">
            <div class="card-header">
                <table id="data-table" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="col-xs-1">&nbsp;</th>
                            <th class="col-xs-1">&nbsp;</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Motivos</th>
                            <th>Temas que domina</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                <a href="{{ url('usuarios/'.$user->id.'/activar') }}" class="" target="_self">
                                    <button type="button" class="btn btn-default waves-effect popover_info aceptar" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="" title="" data-original-title="Aceptar solicitud">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('usuarios/'.$user->id.'/rechazar') }}" class="rechazar" target="_self">
                                    <button type="button" class="btn btn-default waves-effect popover_info" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="" title="" data-original-title="Eliminar solicitud">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </td>
                                    <td>{{ $user->nombre }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->comment }}</td>
                                    <td>{{ $user->experiencia }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @else
                <div class="block-header text-center">
                	<h2>No hay solicitudes pendientes</h2>
                </div>
                @endif
            </div>
        </div>

<!-- Modals -->

@endsection

@section('after_includes')
<script type="text/javascript">
    $(document).ready(function(){
        $('#data-table').DataTable();
        });

    $('.aceptar').on('click', function(e){
        if(!confirm('¿Realmente quieres aceptar esta solicitud?')){
            e.preventDefault();
        }

    });

    $('.rechazar').on('click', function(e){
        if(!confirm('¿Realmente quieres rechazar esta solicitud?')){
            e.preventDefault();
        }
    });
</script>
@endsection
