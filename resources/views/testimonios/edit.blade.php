@extends('adminlte::page')

@section('title', 'Cudros')

@section('content_header')
    <h1>Cuadros - Index</h1>
@stop

@section('content')



    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <!-- form start -->

                {{ Form::open(['role' => 'form', 'url' => 'admin/testimonios/'.$testimonio->id,'method' => 'PUT','enctype'=>'multipart/form-data']) }}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="title">Nombre</label>
                        <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Coloque un nombre" value="{{$testimonio->nombre}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Empresa</label>
                        <input type="text" required class="form-control" id="empresa" name="empresa" placeholder="Coloque una empresa" value="{{$testimonio->empresa}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Url de la empresa</label>
                        <input type="url" required class="form-control" id="url" name="url"placeholder="Coloque una url" value="{{$testimonio->url}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Cargo</label>
                        <input type="text" required class="form-control" id="cargo" name="cargo"placeholder="Coloque un cargo" value="{{$testimonio->cargo}}">
                    </div>
                    <div class="form-group">
                        <label>Contenido</label>
                        <textarea required class="form-control" rows="3" id="contenido" name="contenido" placeholder="Ingrese contenido." >{{$testimonio->contenido}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="opcionImagen" name="opcionImagen" value="0">
                        <div id="ImagenAnterior">
                            <img style="height: 80px" src="{{$testimonio->imagen}}">
                            <a class="btn btn-default" id="CambiarImagen"> Cambiar</a>
                        </div>
                        <div id="NuevaImagen" hidden>
                            <label for="imagen">Cargar Imagen</label>
                            <input  type="file" id="imagen" name="imagen" accept="image/*" value="{{url($testimonio->imagen)}}">

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