@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                Materias de {{ $carrera->nombre }}
            </h2>

            <!-- <a class="btn btn-default btn-lg btn-block" href="{{url('invoice/add')}}">Nuevo comprobante</a> -->

            @if(count($carrera->materias))
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-xs-5 ">Nombre</th>
                        <th>Semestre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carrera->materias as $materia)
                    <tr>
                        <td style="font-size: 18px;">
                            <a href="{{url('materias/' . $materia->id )}}">
                                {{ $materia->nombre }}
                            </a>
                        </td>
                        <!-- <td class="text-right">
                            <a class="btn btn-success btn-block btn-xs" href="{{ url('invoice/pdf/' . $materia->id) }}">
                                <i class="fa fa-file-pdf-o"></i> Descargar
                            </a>
                        </td> -->
                        <td> {{ $materia->semestre }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="panel-body text-center" style="font-size: 20px;">
                {{ $carrera->nombre }} aún no tiene materias, agrega una!
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
