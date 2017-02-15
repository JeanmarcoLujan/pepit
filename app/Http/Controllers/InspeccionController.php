<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Vista;
use App\Sucursale;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\FormInspeccionRequest;
use App\Http\Requests;
use DB;

class InspeccionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }	
    public function index()
    {
    	
        $empresas = DB::table('sucursales as s')
            ->join('empresas as e', 's.empresa_id', '=', 'e.id')
            ->join('estados as est', 's.estado_id', '=', 'est.id')
            ->select('s.id as id', 'e.RUC as ruc','e.razon_social as razon_social','est.descripcion as estado', 's.manzana', 's.lote')
            ->where('s.estado_id','3')
            ->get();

    	return view('inspeccion.vendidas.lista', compact('empresas'));
    }

    public function proceso()
    {
        $empresas = DB::table('sucursales as s')
            ->join('empresas as e', 's.empresa_id', '=', 'e.id')
            ->join('estados as est', 's.estado_id', '=', 'est.id')
            ->select('s.id as id', 'e.RUC as ruc','e.razon_social as razon_social','est.descripcion as estado','s.manzana','s.lote')
            ->where('s.estado_id','2')
            ->get();

        return view('inspeccion.proceso.lista_proceso', compact('empresas'));
    }

    public function ver($id)
    {
    	
      $vistas = Vista::where('sucursale_id',$id)->where('tipo_inspeccion','3')->get();
      $empresa = Sucursale::findOrFail($id);
      return view('inspeccion.vendidas.inspecciones_v', compact('empresa', 'vistas'));

    	
    }

    public function ver_proceso($id)
    {
        
        $vistas = Vista::where('sucursale_id',$id)->where('tipo_inspeccion','2')->get();
        $empresa = Sucursale::findOrFail($id);
        
        return view('inspeccion.proceso.inspecciones_p', compact('empresa', 'vistas'));
        
    }


    public function registrar(FormInspeccionRequest $request)
    {
        $time_start = microtime(true);
    	$inspeccion=new Vista;
        if ($request->get('estado_inspeccion') == 1) {
            $estado =  "Aprobada";
        }else{
            $estado = "Desaprobada";
        }
        $inspeccion->sucursale_id=$request->get('sucursal_id');
        $inspeccion->user_id=$request->get('user_id');
        $inspeccion->nombre=$request->get('nombre');
        $inspeccion->recibido=$request->get('recibido');
        $inspeccion->observacion=$request->get('observacion');
        $inspeccion->tipo_inspeccion=$request->get('tipo_inspeccion');
        $inspeccion->fecha=$request->get('fecha');
        $inspeccion->estado_inspeccion=$estado;
        if (Input::hasFile('foto')) {
        	$file=Input::file('foto');
        	$file->move(public_path().'/fotos/inspecciones/',$file->getClientOriginalName());
        	$inspeccion->foto=$file->getClientOriginalName();
        }
        $inspeccion->save();

        $time_end = microtime(true);
        $time = $time_end - $time_start;
        $request->session()->flash('segundos',$time);
        $request->session()->flash('success','El registro se realizo correctamente');

        return redirect()->back();
        
        
    }
}
