<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonio;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TestimoniosController extends Controller
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
        $Testimonio = new Testimonio();

        return view('testimonios.index',['testimonios' => $Testimonio->getAll()]);
    }

    public function create()
    {
        return view('testimonios.create');
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
        $Testimonio = Testimonio::create(
                [
                    'nombre'=>$request['nombre'],
                    'empresa'=>$request['empresa'],
                    'url'=>$request['url'],
                    'cargo'=>$request['cargo'],
                    'contenido'=>$request['contenido'],
                    'imagen' =>$carpeta.$filename

                 ]);
        $Testimonio->save();


            return Redirect::to('admin/testimonios')->with('success_message', 'Testimonio Creado con exito :D');

    }


    public function edit($id)
    {
        $Testimonio = Testimonio::whereId($id)->first();

        return view('testimonios.edit',['testimonio'=>$Testimonio]);
    }
    public function update($id, Request $request)
    {
        $Testimonio = Testimonio::find($id);
        $Testimonio->nombre=$request['nombre'];
        $Testimonio->empresa=$request['empresa'];
        $Testimonio->url=$request['url'];
        $Testimonio->cargo=$request['cargo'];
        $Testimonio->contenido=$request['contenido'];
        if($request['opcionImagen']==1){
            $destinationPath = '';
            $filename        = '';

            $file= $request->file('imagen');

            $carpeta='/imagenes_cargadas/';
            $destinationPath = public_path().$carpeta;

            $filename        = $file->hashName();

            $uploadSuccess   = $file->move($destinationPath,$filename);
            $Testimonio->imagen =$carpeta.$filename;
        }
        $Testimonio->save();


        return Redirect::to('admin/testimonios')->with('success_message', 'Testimonio Actualizado con exito :D');
    }

    public function destroy($id){

        Testimonio::destroy($id);

        return Redirect::to('admin/testimonios')->with('success_message', 'Testimonio Eliminado con exito :D');
    }


}
