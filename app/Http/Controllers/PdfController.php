<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use PDF;
use App\Vista;
use App\Http\Requests;
use DB;

class PdfController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function pdfEmpresas()
    {
        $empresas = Empresa::all();
        $pdf = PDF::loadView('/reportes/pdf_empresas',['empresas'=> $empresas]);
        //return $pdf->stream();
        return $pdf->download("Lista_Empresas.pdf");
    }

    public function pdfInspecciones($id)
    {
    	$vistas = Vista::where('sucursale_id',$id)->get();
    	$pdf = PDF::loadView('/reportes/pdf_inspecciones',['vistas'=> $vistas]);
        //return $pdf->stream();
        return $pdf->download("Lista_Inspecciones.pdf");

    }

    public function pdfSucursalesProceso()
    {
        $empresas = DB::table('sucursales as s')
            ->join('empresas as e', 's.empresa_id', '=', 'e.id')
            ->join('estados as est', 's.estado_id', '=', 'est.id')
            ->select('s.id as id', 'e.RUC as ruc','e.razon_social as razon_social','est.descripcion as estado','s.manzana','s.lote')
            ->where('s.estado_id','2')
            ->get();

        $pdf = PDF::loadView('/reportes/pdf_sucursales_proceso',['empresas'=> $empresas]);
        //return $pdf->stream();
        return $pdf->download("Lista_Sucursales_Proceso.pdf");

    }

    public function pdfSucursalesVendidas()
    {
        $empresas = DB::table('sucursales as s')
            ->join('empresas as e', 's.empresa_id', '=', 'e.id')
            ->join('estados as est', 's.estado_id', '=', 'est.id')
            ->select('s.id as id', 'e.RUC as ruc','e.razon_social as razon_social','est.descripcion as estado', 's.manzana', 's.lote')
            ->where('s.estado_id','3')
            ->get();

        $pdf = PDF::loadView('/reportes/pdf_sucursales_vendidas',['empresas'=> $empresas]);
        //return $pdf->stream();
        return $pdf->download("Lista_Sucursales_Vendidas.pdf");

    }
}
