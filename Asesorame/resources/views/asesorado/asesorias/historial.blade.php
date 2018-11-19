@extends('layouts.app')

@section('breadcrum')
<ol class="breadcrumb">
    <li><a href="{!! url('/') !!}">Inicio</a></li>
    <li class="active">Mis asesorías</li>
</ol>
@endsection

@section('content')

<div class="block-header">
	<h2>Mis Asesorías</h2>

    <!-- <div class="text-right">
        <a data-toggle="modal" href="#modalDefault" class="btn btn-sm btn-primary waves-effect">Solicitar asesoría</a>
    </div> -->
</div>

<div class="row">
    <div class="col-sm-12">
        @if(count($asesorias))
        <div class="card">
            <div class="card-header">
                <table id="data-table" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="col-xs-1">&nbsp;</th>
                            <th class="col-xs-1">&nbsp;</th>
                            <th>Tema</th>
                            <th>Estado</th>
                            <th>Fecha creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($asesorias as $asesoria)
                        <tr>
                            <td>
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
                                    </td>
                                    <td>{{ $asesoria->tema->nombre }}</td>
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
                	<h2>Aún no tienes asesorías finalizadas</h2>
                </div>
                @endif
            </div>
        </div>

<!-- Modals -->

@endsection

@section('after_includes')
<div class="modal fade" id="modalDefault" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bgm-teal">
                <h4 class="modal-title">Solicitar asesoría</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" action="{{ url('/asesorias') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="card-body card-padding">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Carrera</label>
                            <div class="col-sm-10">
                                <div class="fg-line">
                                    <div class="select">
                                        <select class="form-control">
                                            @foreach($carreras as $carrera)
                                            <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Materia</label>
                            <div class="col-sm-10">
                                <div class="fg-line">
                                    <input type="text" class="form-control input-sm" name="materia" placeholder="Escribe el materia de tu interés..." required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Tema</label>
                            <div class="col-sm-10">
                                <div class="fg-line">
                                    <input type="text" class="form-control input-sm" name="tema" placeholder="Escribe el tema de tu interés..." required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Comentario</label>
                            <div class="col-sm-10">
                                <div class="fg-line">
                                    <textarea class="form-control" name="comentario" rows="5" placeholder="Agrega un comentario..." required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary btn-sm waves-effect">Enviar</button>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

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
