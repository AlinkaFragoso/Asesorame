@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                Asesorías
            </h2>

            <!-- <a class="btn btn-default btn-lg btn-block" href="{{url('invoice/add')}}">Nuevo comprobante</a> -->

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-xs-5 ">Tema</th>
                        <th> Usuario</th>
                        <th> Estado</th>
                        <th> Fecha solicitud</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($asesorias as $asesoria)
                    <tr>
                        <td style="font-size: 18px;">
                            {{ $asesoria->tema->nombre }}
                        </td>
                        <td>{{ $asesoria->usuario->nombre }}</td>
                        <td>{{ $asesoria->estado }}</td>
                        <td>{{ substr($asesoria->created_at, 0, 10) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
