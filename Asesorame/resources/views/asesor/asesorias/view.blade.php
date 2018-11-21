@extends('layouts.app')

@section('breadcrum')
<ol class="breadcrumb">
    <li><a href="{!! url('/') !!}">Inicio</a></li>
    <li class="active">Contacto de asesoría</li>
</ol>
@endsection

@section('content')

<div class="block-header">
	<h2>Contacto</h2>

    <!-- <div class="text-right">
        <a data-toggle="modal" href="#modalDefault" class="btn btn-sm btn-primary waves-effect">Solicitar asesoría</a>
    </div> -->
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h2>Contacta al solicitante</h2>
            </div>

            <div class="card-body card-padding">
                <strong>Carrera:</strong> {{ $asesoria->carrera->nombre }} </br>
                <strong>Materia:</strong> {{ $asesoria->materia }} </br>
                <strong>Tema:</strong> {{ $asesoria->tema }} </br>
                <strong>Comentario:</strong> {{ $asesoria->comentario }} </br>
                <strong>Estado:</strong> {{ $asesoria->pretty_status() }} </br>
                <strong>Fecha creación:</strong> {{ $asesoria->pretty_date() }} </br></br>

                <strong>Usuario:</strong> {{ $asesoria->usuario->nombre }} </br>
                <strong>Email:</strong> {{ $asesoria->usuario->email }} </br>
            </div>
        </div>
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
