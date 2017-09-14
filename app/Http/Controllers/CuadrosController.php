<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuadro;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CuadrosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cuadro = new Cuadro();

        return view('cuadros.index',['cuadros' => $Cuadro->getAll()]);
    }

    public function create()
    {
        return view('cuadros.create');
    }
    public function store(Request $request)
    {
        $destinationPath = '';
        $filename        = '';

            $file= $request->file('imagen');

            $carpeta='/imagenes_cargadas/';
            $destinationPath = public_path().$carpeta;

            $filename        = $file->hashName();

              $uploadSuccess   = $file->move($destinationPath,$filename);
            $Cuadro = Cuadro::create(
                [
                    'title'=>$request['title'],
                    'contenido'=>$request['contenido'],
                    'boton_texto'=>$request['boton_texto'],
                    'url'=>$request['url'],
                    'imagen' =>$carpeta.$filename

                 ]);
            $Cuadro->save();


            return Redirect::to('admin/cuadros')->with('success_message', 'Cuadro Creado con exito :D');

    }


    public function edit($id)
    {
        $cuadro = Cuadro::whereId($id)->first();

        return view('cuadros.edit',['cuadro'=>$cuadro]);
    }
    public function update($id, Request $request)
    {
        $cuadro = Cuadro::find($id);
        $cuadro->title=$request['title'];
        $cuadro->contenido=$request['contenido'];
        $cuadro->boton_texto=$request['boton_texto'];
        $cuadro->url=$request['url'];
        if($request['opcionImagen']==1){
            $destinationPath = '';
            $filename        = '';

            $file= $request->file('imagen');

            $carpeta='/imagenes_cargadas/';
            $destinationPath = public_path().$carpeta;

            $filename        = $file->hashName();

            $uploadSuccess   = $file->move($destinationPath,$filename);
            $cuadro->imagen =$carpeta.$filename;
        }
        $cuadro->save();


        return Redirect::to('admin/cuadros')->with('success_message', 'Cuadro Actualizado con exito :D');
    }

    public function destroy($id){

        Cuadro::destroy($id);

        return Redirect::to('admin/cuadros')->with('success_message', 'Cuadro Eliminado con exito :D');
    }

}
