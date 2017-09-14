@extends('adminlte::page')

@section('title', 'Carga de Testimonios')

@section('content_header')
    <h1>Cargar Testimonios</h1>
@stop

@section('content')



    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" action="{{route('testimonios.store')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="title">Nombre</label>
                        <input type="text" required class="form-control" id="nombre" name="nombre"placeholder="Coloque un nombre">
                    </div>
                    <div class="form-group">
                        <label for="title">Empresa</label>
                        <input type="text" required class="form-control" id="empresa" name="empresa"placeholder="Coloque una empresa">
                    </div>
                    <div class="form-group">
                        <label for="title">Url de la empresa</label>
                        <input type="url" required class="form-control" id="url" name="url" placeholder="Coloque una url">
                    </div>
                    <div class="form-group">
                        <label for="title">Cargo</label>
                        <input type="text" required class="form-control" id="cargo" name="cargo"placeholder="Coloque un cargo">
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