<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProyectosController extends Controller
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
        $Proyecto = new Proyecto();

        return view('proyectos.index',['proyectos' => $Proyecto->getAll()]);
    }

    public function create()
    {
        return view('proyectos.create');
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
        $proyecto = Proyecto::create(
                [
                    'title'=>$request['title'],
                    'contenido'=>$request['contenido'],
                    'imagen' =>$carpeta.$filename

                 ]);
        $proyecto->save();


            return Redirect::to('admin/proyectos')->with('success_message', 'Proyecto Creado con exito :D');

    }


    public function edit($id)
    {
        $proy = Proyecto::whereId($id)->first();

        return view('proyectos.edit',['proyecto'=>$proy]);
    }
    public function update($id, Request $request)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->title=$request['title'];
        $proyecto->contenido=$request['contenido'];
        if($request['opcionImagen']==1){
            $destinationPath = '';
            $filename        = '';

            $file= $request->file('imagen');

            $carpeta='/imagenes_cargadas/';
            $destinationPath = public_path().$carpeta;

            $filename        = $file->hashName();

            $uploadSuccess   = $file->move($destinationPath,$filename);
            $proyecto->imagen =$carpeta.$filename;
        }
        $proyecto->save();


        return Redirect::to('admin/proyectos')->with('success_message', 'Proyecto Actualizado con exito :D');
    }

    public function destroy($id){

        Proyecto::destroy($id);

        return Redirect::to('admin/proyectos')->with('success_message', 'Proyecto Eliminado con exito :D');
    }


}
