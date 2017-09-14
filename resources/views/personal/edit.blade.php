@extends('adminlte::page')

@section('title', 'Editar Personal')

@section('content_header')
    <h1>Editar Personal</h1>
@stop

@section('content')



    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <!-- form start -->

                {{ Form::open(['role' => 'form', 'url' => 'admin/personal/'.$personal->id,'method' => 'PUT','enctype'=>'multipart/form-data']) }}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="title">Nombre</label>
                        <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Coloque un nombre" value="{{$personal->nombre}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Cargo</label>
                        <input type="text" required class="form-control" id="cargo" name="cargo" placeholder="Coloque un cargo" value="{{$personal->cargo}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Twitter</label>
                        <input type="url" required class="form-control" id="twitter" name="twitter" placeholder="Coloque un twitter" value="{{$personal->twitter}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Facebook</label>
                        <input type="url" required class="form-control" id="facebook" name="facebook" placeholder="Coloque un facebook" value="{{$personal->facebook}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Github</label>
                        <input type="url" required class="form-control" id="github" name="github" placeholder="Coloque un github" value="{{$personal->github}}">
                    </div>
                    <div class="form-group">
                        <label>Contenido</label>
                        <textarea required class="form-control" rows="3" id="contenido" name="contenido" placeholder="Ingrese contenido." >{{$personal->contenido}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="opcionImagen" name="opcionImagen" value="0">
                        <div id="ImagenAnterior">
                            <img style="height: 80px" src="{{$personal->imagen}}">
                            <a class="btn btn-default" id="CambiarImagen"> Cambiar</a>
                        </div>
                        <div id="NuevaImagen" hidden>
                            <label for="imagen">Cargar Imagen</label>
                            <input  type="file" id="imagen" name="imagen" accept="image/*" value="{{url($personal->imagen)}}">

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