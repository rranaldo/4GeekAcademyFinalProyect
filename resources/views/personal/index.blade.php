@extends('adminlte::page')

@section('title', 'Personal')

@section('content_header')
    <h1>Personal - Index</h1>
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


            @if(sizeof($personal)<3)
                <div class="col-md-3">
                    <a @if(sizeof($personal)>=3)disabled="disabled" @endif href="{{route('personal.create')}}" class="btn btn-block btn-primary">Crear Nuevo</a>
                </div>
            @else
                <div class="col-md-3">
                    <p class="label label-danger">Existen ya 3 Personas creadas.!!!</p>
                </div>

            @endif

        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <tr>
                    <th style="width: 10px">#ID</th>
                    <th>nombre</th>
                    <th>Cargo</th>
                    <th>Contenido</th>
                    <th>twitter</th>
                    <th>facebook</th>
                    <th>github</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
                @foreach($personal as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->nombre}}</td>
                        <td>{{$p->cargo}}</td>
                        <td>{{$p->contenido}}</td>
                        <td>{{$p->twitter}}</td>
                        <td>{{$p->facebook}}</td>
                        <td>{{$p->github}}</td>
                        <td><img style="height: 60px;" src="{{$p->imagen}}"></td>
                        <td>
                            <a href="personal/{{ $p->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Editar</a>
                            {{ Form::open(['url' => 'admin/personal/' . $p->id, 'method' => 'DELETE']) }}
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