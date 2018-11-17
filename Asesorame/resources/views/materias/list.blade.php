@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                Materias
            </h2>

            <!-- <a class="btn btn-default btn-lg btn-block" href="{{url('invoice/add')}}">Nuevo comprobante</a> -->

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-xs-5 ">Nombre</th>
                        <th>Temas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materias as $materia)
                    <tr>
                        <td>
                            <a href="{{url('invoice/detail/' . $materia->id )}}">
                                {{ $materia->nombre }}
                            </a>
                        </td>

                        <td >
                            @foreach($materia->temas as $tema)
                            <ul>
                                <li>
                                <a class="" href="{{ url('invoice/pdf/' . $materia->id) }}">
                                <!-- <i class="fa fa-file-pdf-o"></i>{{ $tema->nombre }} -->
                                {{ $tema->nombre }}
                                </a>
                            </li>
                            </ul>
                            @endforeach
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
