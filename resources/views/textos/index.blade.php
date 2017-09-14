@extends('adminlte::page')

@section('title', 'Texto Completos')

@section('content_header')
    <h1>Texto Completos</h1>
@stop

@section('content')
    <div class="col-md-12">
        @if(Session::has('success_message'))
            <p style="font-size: 20px;font-weight: 900;text-align: center;" class="bg-success alert">!!{{ Session::get('success_message') }}!!</p>
         @endif
        <!-- general form elements -->
        <div class=" box box-primary">
            <!-- form start -->

            {{ Form::open(['role' => 'form', 'url' => 'admin/textos/edit','method' => 'POST','enctype'=>'multipart/form-data']) }}

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-md-6 box-body">
                <div class="form-group">
                    <label for="title">{{$textos[0]->contexto}}</label>
                    <input type="text" required class="form-control" id="texto1" name="texto1" placeholder="Coloque un texto" value="{{$textos[0]->contenido}}">
                </div>
                <div class="form-group">
                    <label for="title">{{$textos[1]->contexto}}</label>
                    <input type="text" required class="form-control" id="texto2" name="texto2" placeholder="Coloque un texto" value="{{$textos[1]->contenido}}">
                </div>

                <div class="form-group">
                    <label for="title">{{$textos[2]->contexto}}</label>
                    <input type="text" required class="form-control" id="texto3" name="texto3" placeholder="Coloque un texto" value="{{$textos[2]->contenido}}">
                </div>
                <div class="form-group">
                    <label for="title">{{$textos[3]->contexto}}</label>
                    <input type="text" required class="form-control" id="texto4" name="texto4" placeholder="Coloque un texto" value="{{$textos[3]->contenido}}">
                </div>

                <div class="form-group">
                    <label for="title">{{$textos[4]->contexto}}</label>
                    <input type="text" required class="form-control" id="texto5" name="texto5" placeholder="Coloque un texto" value="{{$textos[4]->contenido}}">
                </div>

                <div class="form-group">
                    <label for="title">{{$textos[5]->contexto}}</label>
                    <input type="text" required class="form-control" id="texto6" name="texto6" placeholder="Coloque un texto" value="{{$textos[5]->contenido}}">
                </div>


                <div class="form-group">
                    <label for="title">{{$textos[6]->contexto}}</label>
                    <?php
                        $data=explode(",",$textos[6]->contenido);

                    ?>
                    <input type="text" required class="form-control" id="texto71" name="texto71" placeholder="Coloque un texto" value="{{$data[0]}}">
                    <input type="text" required class="form-control" id="texto72" name="texto72" placeholder="Coloque un texto" value="{{$data[1]}}">
                    <input type="text" required class="form-control" id="texto73" name="texto73" placeholder="Coloque un texto" value="{{$data[2]}}">
                    <input type="text" required class="form-control" id="texto74" name="texto74" placeholder="Coloque un texto" value="{{$data[3]}}">
                </div>

            </div>
            <div class="col-md-6 box-body">
                <div class="form-group">
                    <label for="title">{{$textos[7]->contexto}}</label>
                    <input type="text" required class="form-control" id="texto8" name="texto8" placeholder="Coloque un texto" value="{{$textos[7]->contenido}}">
                </div>
                <div class="form-group">
                    <label for="title">{{$textos[8]->contexto}}</label>
                    <input type="text" required class="form-control" id="texto9" name="texto9" placeholder="Coloque un texto" value="{{$textos[8]->contenido}}">
                </div>
                <div class="form-group">
                    <label for="title">{{$textos[9]->contexto}}</label>
                    <input type="text" required class="form-control" id="texto10" name="texto10" placeholder="Coloque un texto" value="{{$textos[9]->contenido}}">
                </div>
                <div class="form-group">
                    <label for="title">{{$textos[10]->contexto}}</label>
                    <input type="text" required class="form-control" id="texto11" name="texto11" placeholder="Coloque un texto" value="{{$textos[10]->contenido}}">
                </div>
                <div class="form-group">
                    <label for="title">{{$textos[11]->contexto}}</label>
                    <input type="text" required class="form-control" id="texto12" name="texto12" placeholder="Coloque un texto" value="{{$textos[11]->contenido}}">
                </div>
                <div class="form-group">
                    <label for="title">{{$textos[12]->contexto}}</label>
                    <input type="text" required class="form-control" id="texto13" name="texto13" placeholder="Coloque un texto" value="{{$textos[12]->contenido}}">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="row">
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">ACTUALIZAR TEXTOS</button>
                </div>
            </div>

            {{ Form::close() }}
        </div>
    </div>

@stop