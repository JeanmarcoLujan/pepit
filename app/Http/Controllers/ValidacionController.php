<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Empresa;
use App\Sucursale;
use App\Estado;
use DB;

class ValidacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }	
    public function index()
    {
    	
        $empresas= DB::table('sucursales as s')
            ->join('empresas as e', 's.empresa_id', '=', 'e.id')
            ->join('estados as est', 's.estado_id', '=', 'est.id')
            ->select('s.id as id', 'e.RUC as ruc','e.razon_social as razon_social','est.descripcion as estado','s.manzana','s.lote','s.estado_id')
            ->get();
    	$estados = Estado::where('id','!=','3')->get();
    	return view('validacion.index', compact('empresas', 'estados'));
    }

    public function store(Request $request)
    {
    	echo "aca estoy";
    }

	public function update(Request $request)
	{
		
        $sucursal =Sucursale::findOrFail($request->get('id'));
        $sucursal->estado_id='2';
    	$sucursal->update();
        return response()->json([
                "mensaje"=>"Se realizó con éxito, nuevo estado, En Proceso"
            ]); 

       
	}

    public function updateVendida(Request $request)
    {
        $sucursal =Sucursale::findOrFail($request->get('id'));
        $sucursal->estado_id='3';
        $sucursal->update();
        return response()->json([
                "mensaje"=>"Se realizó con éxito, nuevo estado, Vendida"
            ]); 
    }
}
