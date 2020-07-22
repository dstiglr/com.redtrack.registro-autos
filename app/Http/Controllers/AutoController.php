<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Employee;
use App\Company;
use App\TypeCar;

class AutoController extends Controller
{
    public function registro(Request $request)
    {
        $servicio = new Service();
        $servicio->car_model = $request->auto;
        $servicio->price = $request->precio;
        $servicio->plates = $request->placas;
        $servicio->economic = $request->economico;
        $servicio->employed_sanitizer = $request->empleado;
        $servicio->company = $request->empresa;
        $servicio->type_car = $request->tipo;
        $servicio->comments = $request->comentario;

        $servicio->save();
        return back()->withInput();
    }

    public function tablaView(Request $request)
    {
        return view('tabla_autos');
    }

    public function registroView(Request $request)
    {
        $empleados = Employee::all();
        $companias = Company::all();
        $tipos = TypeCar::all();

        return view('registro',['empleados'=> $empleados,'companias'=>$companias,'tipos'=> $tipos]);
    }

    public function modificaRegistroView(Request $request,$id)
    {
        $empleados = Employee::all();
        $companias = Company::all();
        $tipos = TypeCar::all();
        $servicio = Service::where("id",$id)->firstOrFail();
        return view('modifica_registro',['servicio'=> $servicio,'empleados'=> $empleados,'companias'=>$companias,'tipos'=> $tipos]);
    }

    public function modificaRegistro(Request $request)
    {
        $servicio = Service::where("id",$request->id)->firstOrFail();

        $servicio->car_model = $request->auto;
        $servicio->price = $request->precio;
        $servicio->plates = $request->placas;
        $servicio->economic = $request->economico;
        $servicio->employed_sanitizer = $request->empleado;
        $servicio->company = $request->empresa;
        $servicio->type_car = $request->tipo;
        $servicio->comments = $request->comentario;

        $servicio->save();

        return redirect()->route('view_tabala');
    }
}
