<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use App\Service;
use Illuminate\Http\Request;

class ApiRestController extends Controller
{
    public function autosTabla(Request $request)
    {
        return Datatables::of(Service::all())->toJson();
    }
}
