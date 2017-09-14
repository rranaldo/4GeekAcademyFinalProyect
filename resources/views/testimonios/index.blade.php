@extends('adminlte::page')

@section('title', 'Testimonios')

@section('content_header')
    <h1>Testimonios - Index</h1>
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
            @if(sizeof($testimonios)<3)
                <div class="col-md-3">
                    <a @if(sizeof($testimonios)>=3)disabled="disabled" @endif href="{{route('testimonios.create')}}" class="btn btn-block btn-primary">Crear Nuevo</a>
                </div>
            @else
                <div class="col-md-3">
                    <p class="label label-danger">Existen ya 3 Testimonios creados.!!!</p>
                </div>

            @endif


        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tr>
                    <th style="width: 10px">#ID</th>
                    <th>Nombre</th>
                    <th>Empresa</th>
                    <th>Url</th>
                    <th>Cargo</th>
                    <th>Contenido</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
                @foreach($testimonios as $testi)
                    <tr>
                        <td>{{$testi->id}}</td>
                        <td>{{$testi->nombre}}</td>
                        <td>{{$testi->empresa}}</td>
                        <td>{{$testi->url}}</td>
                        <td>{{$testi->cargo}}</td>
                        <td>{{$testi->contenido}}</td>
                        <td><img style="height: 60px;" src="{{$testi->imagen}}"></td>
                        <td>
                            <a href="testimonios/{{ $testi->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Editar</a>
                            {{ Form::open(['url' => 'admin/testimonios/' . $testi->id, 'method' => 'DELETE']) }}
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