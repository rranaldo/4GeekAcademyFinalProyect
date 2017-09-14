@extends('adminlte::page')

@section('title', 'Proyectos')

@section('content_header')
    <h1>Proyectos - Index</h1>
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

            <div class="col-md-3">
                <a  href="{{route('proyectos.create')}}" class="btn btn-block btn-primary">Crear Nuevo</a>
            </div>


        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tr>
                    <th style="width: 10px">#ID</th>
                    <th>Titulo</th>
                    <th>Contenido</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
                @foreach($proyectos as $proy)
                    <tr>
                        <td>{{$proy->id}}</td>
                        <td>{{$proy->titulo}}</td>
                        <td>{{$proy->contenido}}</td>
                        <td><img style="height: 60px;" src="{{$proy->imagen}}"></td>
                        <td>
                            <a href="proyectos/{{ $proy->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Editar</a>
                            {{ Form::open(['url' => 'admin/proyectos/' . $proy->id, 'method' => 'DELETE']) }}
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