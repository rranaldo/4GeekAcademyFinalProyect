@extends('adminlte::page')

@section('title', 'Edicion de cuadro')

@section('content_header')
    <h1>Editar Cuadro</h1>
@stop

@section('content')



    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <!-- form start -->

                {{ Form::open(['role' => 'form', 'url' => 'admin/cuadros/'.$cuadro->id,'method' => 'PUT','enctype'=>'multipart/form-data']) }}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" required class="form-control" id="title" name="title" placeholder="Coloque un titulo" value="{{$cuadro->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Texto Boton</label>
                        <input type="text" required class="form-control" id="boton_texto" name="boton_texto" placeholder="Ingrese el texto del boton" value="{{$cuadro->boton_texto}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Url boton</label>
                        <input type="url" required class="form-control" id="url" name="url" placeholder="Ingrese la url del boton" value="{{$cuadro->url}}">
                    </div>
                    <div class="form-group">
                        <label>Contenido</label>
                        <textarea required class="form-control" rows="3" id="contenido" name="contenido" placeholder="Ingrese contenido." >{{$cuadro->contenido}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="opcionImagen" name="opcionImagen" value="0">
                        <div id="ImagenAnterior">
                            <img style="height: 80px" src="{{$cuadro->imagen}}">
                            <a class="btn btn-default" id="CambiarImagen"> Cambiar</a>
                        </div>
                        <div id="NuevaImagen" hidden>
                            <label for="imagen">Cargar Imagen</label>
                            <input  type="file" id="imagen" name="imagen" accept="image/*" value="{{url($cuadro->imagen)}}">

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