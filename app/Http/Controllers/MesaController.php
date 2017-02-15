<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormMesaRequest;
use App\Mesa;
use App\Contacto;
use App\Grupo;
use App\Http\Requests;
use DB;

class MesaController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }	
    public function index()
    {
    	$grupos = Mesa::all();
        return view('mesa.registro', compact('grupos'));
    }

    public function save(FormMesaRequest $request)
    {
    	Mesa::create($request->all());
        return redirect()->back();
    }

    public function ver($id)
    {
       $contactos_select = Contacto::all();
       $grupo = Mesa::findOrFail($id);
       $contactos = DB::table('groups')
            ->join('contactos', 'groups.contacto_id', '=', 'contactos.id')
            ->join('mesas', 'groups.mesa_id', '=', 'mesas.id')
            ->select('contactos.*', 'mesas.id as mesa')
            ->where('groups.mesa_id','=',$id)
            ->get();
       return view('mesa.ver', compact('grupo','contactos_select','contactos'));
    }    
    

  
}
