@extends('adminlte::page')

@section('title', 'Creador de cuadros')

@section('content_header')
    <h1>Creador Cuadros</h1>
@stop

@section('content')



    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" action="{{route('cuadros.store')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" required class="form-control" id="title" name="title"placeholder="Coloque un titulo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Texto Boton</label>
                        <input type="text" required class="form-control" id="boton_texto" name="boton_texto" placeholder="Ingrese el texto del boton">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Url boton</label>
                        <input type="url" required class="form-control" id="url" name="url" placeholder="Ingrese la url del boton">
                    </div>
                    <div class="form-group">
                        <label>Contenido</label>
                        <textarea required class="form-control" rows="3" id="contenido" name="contenido" placeholder="Ingrese contenido."></textarea>
                        <h5>Se recomiendan textos con mas de 8 palabras por el tipo de template.</h5>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Cargar Imagen</label>
                        <input required type="file" id="imagen" accept="image/*" name="imagen">

                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Cargar</button>
                </div>
            </form>
        </div>
        <!-- /.box -->

    </div>
    <!--/.col (left) -->
    <!-- right column -->
@stop