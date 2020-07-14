<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class AutoController extends Controller
{
    public function registro(Request $request)
    {
        $servicio = new Service();
        $servicio->car_model = $request->auto;
        $servicio->price = $request->precio;
        $servicio->comments = $request->auto;

        $servicio->save();
        return back()->withInput();
    }

    public function tablaView(Request $request)
    {
        return view('tabla_autos');
    }

    public function registroView(Request $request)
    {
        return view('registro');
    }
}
