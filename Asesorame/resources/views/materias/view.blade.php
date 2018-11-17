@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                Temas de {{ $materia->nombre }}
            </h2>

            <!-- <a class="btn btn-default btn-lg btn-block" href="{{url('invoice/add')}}">Nuevo comprobante</a> -->

            @if(count($materia->temas))
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-xs-5 ">Nombre</th>
                        <th>Notas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materia->temas as $tema)
                    <tr>
                        <td style="font-size: 18px;">
                            <a href="{{url('materias/' . $materia->id )}}">
                                {{ $tema->nombre }}
                            </a>
                        </td>
                        <td> {{ $tema->notas }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="panel-body text-center" style="font-size: 20px;">
                {{ $materia->nombre }} aún no tiene temas, agrega uno!
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
