@extends('layouts.app')

@section('breadcrum')
<ol class="breadcrumb">
    <li><a href="{!! url('/') !!}">Inicio</a></li>
    <li class="active">Asesores</li>
</ol>
@endsection

@section('content')

<div class="block-header">
	<h2>Asesores</h2>

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
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Motivos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                <a href="{{ url('usuarios/'.$user->id.'/rechazar') }}" class="delete" target="_self">
                                    <button type="button" class="btn btn-default waves-effect popover_info" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="" title="" data-original-title="Eliminar a {{ $user->nombre }}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </td>
                                    <td>{{ $user->nombre }}</td>
                                    <td>{{ $user->emil }}</td>
                                    <td>{{ $user->comment }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @else
                <div class="block-header text-center">
                	<h2>Aún no hay ningún asesor registrado</h2>
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
        if(!confirm('¿Realmente quieres eliminar este usuario?')){
            e.preventDefault();
        }

    });
</script>
@endsection
