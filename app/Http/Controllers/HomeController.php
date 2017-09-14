<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Servicio;
use App\Models\Testimonio;
use Illuminate\Http\Request;
use App\Models\Cuadro;
use App\Models\Proyecto;
use App\Models\Texto;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cuadro = new Cuadro();
        $Proyecto = new Proyecto();
        $testimonio = new Testimonio();
        $servicios = new Servicio();
        $personal = new Personal();
        $Texto = new Texto();
        return view('index',[
                    'cuadros' => $Cuadro->getAll(),
                    'proyectos' => $Proyecto->getAll(),
                    'testimonios'=>$testimonio->getAll(),
                    'servicios'=>$servicios->getAll(),
                    'personal'=>$personal->getAll(),
                    'textos'=>$Texto->getAll(),
                ]);
    }

    public function postContact(Request $request)
    {
        $data = $request->all();

        Mail::send('email', ['data' => $data], function ($message) use ($data)
        {
            $message->from(env('MAIL_USERNAME'));
            $message->subject('Nuevo Contacto');
            $message->to('ranaldoraffaele@gmail.com');
        });

        return Redirect::to('/');

    }

}
