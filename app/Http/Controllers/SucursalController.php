<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormSucursalRequest;
use App\Empresa;
use App\Sucursale;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class SucursalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }	
    public function index()
    {
    	$empresas = Empresa::all();
    	return view('sucursal.registro', compact('empresas'));
    }

    public function store(FormSucursalRequest $request)
    {
        $time_start = microtime(true);
    	Sucursale::create($request->all());
        $time_end = microtime(true);
        $time = $time_end - $time_start;
        $request->session()->flash('segundos',$time);
        $request->session()->flash('success','El registro se realizo correctamente');
    
        return Redirect::to('sucursal');
    }

    public function show()
    {
        $sucursales =Sucursale::orderBy('empresa_id')->get();
        return response()->json([
                $sucursales->toArray()
            ]);
    }
}
