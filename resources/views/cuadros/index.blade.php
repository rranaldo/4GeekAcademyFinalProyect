@extends('adminlte::page')

@section('title', 'Cudros')

@section('content_header')
    <h1>Cuadros - Index</h1>
@stop

@section('content')

    @if(Session::has('success_message'))
        <p style="font-size: 20px;font-weight: 900;text-align: center;" class="bg-success alert">!!{{ Session::get('success_message') }}!!</p>
    @endif
    @if(Session::has('alert_message'))
        <p style="font-size: 20px;font-weight: 900;text-align: center;" class="bg-danger alert">!!{{ Session::get('alert_message') }}!!</p>
    @endif
    <div class="box">
        <div class="box-header">
            @if(sizeof($cuadros)<3)
            <div class="col-md-3">
                <a @if(sizeof($cuadros)>=3)disabled="disabled" @endif href="{{route('cuadros.create')}}" class="btn btn-block btn-primary">Crear Nuevo</a>
            </div>
            @else
            <div class="col-md-3">
               <p class="label label-danger">Existen ya 3 Cuadros creados.!!!</p>
            </div>

            @endif

        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tr>
                    <th style="width: 10px">#ID</th>
                    <th>Titulo</th>
                    <th>Texto Boton</th>
                    <th>URL</th>
                    <th>Contenido</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
                @foreach($cuadros as $cuadro)
                    <tr>
                        <td>{{$cuadro->id}}</td>
                        <td>{{$cuadro->titulo}}</td>
                        <td>{{$cuadro->boton_texto}}</td>
                        <td>{{$cuadro->url}}</td>
                        <td>{{$cuadro->contenido}}</td>
                        <td><img style="height: 60px;" src="{{$cuadro->imagen}}"></td>
                        <td>
                            <a href="cuadros/{{ $cuadro->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Editar</a>
                            {{ Form::open(['url' => 'admin/cuadros/' . $cuadro->id, 'method' => 'DELETE']) }}
                            {{ Form::submit('Eliminar', ['class' => 'btn btn-danger'])}}
                            {{ Form::close() }}
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@stop