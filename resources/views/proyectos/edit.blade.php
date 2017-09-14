@extends('adminlte::page')

@section('title', 'Editar proyecto')

@section('content_header')
    <h1>Editar Proyecto</h1>
@stop

@section('content')



    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <!-- form start -->

                {{ Form::open(['role' => 'form', 'url' => 'admin/proyectos/'.$proyecto->id,'method' => 'PUT','enctype'=>'multipart/form-data']) }}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" required class="form-control" id="title" name="title" placeholder="Coloque un titulo" value="{{$proyecto->title}}">
                    </div>
                    <div class="form-group">
                        <label>Contenido</label>
                        <textarea required class="form-control" rows="3" id="contenido" name="contenido" placeholder="Ingrese contenido." >{{$proyecto->contenido}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="opcionImagen" name="opcionImagen" value="0">
                        <div id="ImagenAnterior">
                            <img style="height: 80px" src="{{$proyecto->imagen}}">
                            <a class="btn btn-default" id="CambiarImagen"> Cambiar</a>
                        </div>
                        <div id="NuevaImagen" hidden>
                            <label for="imagen">Cargar Imagen</label>
                            <input  type="file" id="imagen" name="imagen" accept="image/*" value="{{url($proyecto->imagen)}}">

                        </div>

                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Cargar</button>
                </div>
            {{ Form::close() }}
        </div>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script>
        $("#CambiarImagen").click(function() {
            $("#ImagenAnterior").hide();
            $("#opcionImagen").val(1);
            $("#NuevaImagen").show();
            $("#imagen").prop('required',true);
        });
    </script>
    <!--/.col (left) -->
    <!-- right column -->
@stop