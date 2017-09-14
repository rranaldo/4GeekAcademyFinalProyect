<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ServiciosController extends Controller
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
        $servicios = new Servicio ();

        return view('servicios.index',['servicios' => $servicios->getAll()]);
    }

    public function create()
    {
        return view('servicios.create');
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
        $servicios = Servicio::create(
                [
                    'title'=>$request['title'],
                    'contenido'=>$request['contenido'],
                    'imagen' =>$carpeta.$filename

                 ]);
        $servicios->save();


            return Redirect::to('admin/servicios')->with('success_message', 'servicio Creado con exito :D');

    }


    public function edit($id)
    {
        $servicios = Servicio::whereId($id)->first();

        return view('servicios.edit',['servicio'=>$servicios]);
    }
    public function update($id, Request $request)
    {
        $servicios = Servicio::find($id);
        $servicios->title=$request['title'];
        $servicios->contenido=$request['contenido'];
        if($request['opcionImagen']==1){
            $destinationPath = '';
            $filename        = '';

            $file= $request->file('imagen');

            $carpeta='/imagenes_cargadas/';
            $destinationPath = public_path().$carpeta;

            $filename        = $file->hashName();

            $uploadSuccess   = $file->move($destinationPath,$filename);
            $servicios->imagen =$carpeta.$filename;
        }
        $servicios->save();


        return Redirect::to('admin/servicios')->with('success_message', 'servicio Actualizado con exito :D');
    }

    public function destroy($id){

        Servicio::destroy($id);

        return Redirect::to('admin/servicios')->with('success_message', 'servicio Eliminado con exito :D');
    }


}
