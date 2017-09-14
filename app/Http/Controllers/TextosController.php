<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Texto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TextosController extends Controller
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
        $Texto = new Texto();

        return view('textos.index',['textos' => $Texto->getAll()]);
    }


    public function update(Request $request)
    {
        for($i=1;$i<14;$i++)
        {
            if($i!=7){
                $texto=$request->all();
                $texto = Texto::find($i);
                $texto->contenido=$request['texto'.$i];
                $texto->save();
            }else{
                $data=$request['texto'.$i.'1'].','.$request['texto'.$i.'2']
                    .','.$request['texto'.$i.'3'].','.$request['texto'.$i.'4'];
                $texto=$request->all();
                $texto = Texto::find($i);
                $texto->contenido=$data;
                $texto->save();
            }


        }


        return Redirect::to('admin/textos')->with('success_message', 'Textos Actualizados con exito :D');
    }



}
