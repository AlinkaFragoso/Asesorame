@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                Carreras
            </h2>

            <!-- <a class="btn btn-default btn-lg btn-block" href="{{url('invoice/add')}}">Nuevo comprobante</a> -->

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-xs-5 ">Nombre</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carreras as $carrera)
                    <tr>
                        <td style="font-size: 18px;">
                            <a href="{{url('carreras/' . $carrera->id )}}">
                                {{ $carrera->nombre }}
                            </a>
                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
