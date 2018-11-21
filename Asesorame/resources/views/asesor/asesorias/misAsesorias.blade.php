@extends('layouts.app')

@section('breadcrum')
<ol class="breadcrumb">
    <li><a href="{!! url('/') !!}">Inicio</a></li>
    <li class="active">Mis Asesorías</li>
</ol>
@endsection

@section('content')

<div class="block-header">
	<h2>Mis Asesorías</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        @if(Session::has('flash_message_asesoria'))
          <div class="alert alert-success" role="alert">{{ Session::get('flash_message_asesoria') }}</div>
        @endif
        @if(count($asesorias))
        <div class="card">
            <div class="card-header">
                <table id="data-table" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <!-- <th class="col-xs-1">&nbsp;</th>
                            <th class="col-xs-1">&nbsp;</th> -->
                            <th>Carrera</th>
                            <th>Materia</th>
                            <th>Tema</th>
                            <th>Comentario</th>
                            <th>Estado</th>
                            <th>Fecha creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($asesorias as $asesoria)
                        <tr>
                            <!-- <td>
                                <a href="{{ url('zonas/'.$asesoria->id) }}" target="_self">
                                    <button type="button" class="btn btn-default waves-effect popover_info" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="" title="" data-original-title="Ver detalle de {{ $asesoria->name }}">
                                        <i class="fa fa-list" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('zonas/eliminar/'.$asesoria->id) }}" class="delete" target="_self">
                                    <button type="button" class="btn btn-default waves-effect popover_info" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="" title="" data-original-title="Eliminar {{ $asesoria->name }}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                            </td> -->
                            <td>{{ $asesoria->carrera->nombre }}</td>
                            <td>{{ $asesoria->materia }}</td>
                            <td>{{ $asesoria->tema }}</td>
                            <td>{{ $asesoria->comentario }}</td>
                            <td>{{ $asesoria->pretty_status() }}</td>
                            <td>{{ $asesoria->pretty_date() }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @else
            <div class="block-header text-center">
            	<h2>Aún no has aceptado ninguna asesoría.</h2>
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

        $('.delete').on('click', function(e){
            if(!confirm('¿Realmente quieres borrar este registro?')){
                e.preventDefault();
            }

    });
</script>
@endsection
