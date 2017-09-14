<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PersonalController extends Controller
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
        $Personal = new Personal();

        return view('personal.index',['personal' => $Personal->getAll()]);
    }

    public function create()
    {
        return view('personal.create');
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
        $Personal = Personal::create(
                [
                    'nombre'=>$request['nombre'],
                    'cargo'=>$request['cargo'],
                    'twitter'=>$request['twitter'],
                    'facebook'=>$request['facebook'],
                    'github'=>$request['github'],
                    'contenido'=>$request['contenido'],
                    'imagen' =>$carpeta.$filename

                 ]);
        $Personal->save();


            return Redirect::to('admin/personal')->with('success_message', 'personal Creado con exito :D');

    }


    public function edit($id)
    {
        $Personal = Personal::whereId($id)->first();

        return view('personal.edit',['personal'=>$Personal]);
    }
    public function update($id, Request $request)
    {
        $Personal = Personal::find($id);
        $Personal->nombre=$request['nombre'];
        $Personal->contenido=$request['contenido'];
        $Personal->cargo=$request['cargo'];
        $Personal->twitter=$request['twitter'];
        $Personal->facebook=$request['facebook'];
        $Personal->github=$request['github'];

        if($request['opcionImagen']==1){
            $destinationPath = '';
            $filename        = '';

            $file= $request->file('imagen');

            $carpeta='/imagenes_cargadas/';
            $destinationPath = public_path().$carpeta;

            $filename        = $file->hashName();

            $uploadSuccess   = $file->move($destinationPath,$filename);
            $Personal->imagen =$carpeta.$filename;
        }
        $Personal->save();


        return Redirect::to('admin/personal')->with('success_message', 'personal Actualizado con exito :D');
    }

    public function destroy($id){

        Personal::destroy($id);

        return Redirect::to('admin/personal')->with('success_message', 'personal Eliminado con exito :D');
    }


}
