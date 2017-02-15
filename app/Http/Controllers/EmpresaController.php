<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormEmpresaRequest;
use App\Empresa;
use App\Http\Requests;
use PDF;
use Illuminate\Support\Facades\Redirect;

class EmpresaController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }	
    public function index()
    {
    	return view('empresa.registro');
    }

    public function store(Request $request)
    {
        $time_start = microtime(true);
        $this->validate($request, [
            'RUC' => 'size:11|required',
            'razon_social' => 'required',
            'representante' => 'required',
            'dni'=>'required|size:8',
            'telefono1' => 'required|numeric',
            'anexo1' => 'required|numeric',
            'telefono2' => 'required|numeric',
            'telefono3' => 'numeric',
            'correo1'=>'required|e-mail',
            'correo2'=>'e-mail',
        ]);
    	Empresa::create($request->all());
        $time_end = microtime(true);
        $time = $time_end - $time_start;
    
        $request->session()->flash('segundos',$time);
        $request->session()->flash('success','El registro se realizo correctamente');
        //return Redirect::route('empresa', compact('time'));
        //return redirect()->back()->with('time');
        return Redirect::to('empresa');
    }

    

    public function show()
    {
        $empresas = Empresa::all();
        return view('empresa.list', compact('empresas'));
    }

    public function ver($id)
    {
        $empresa = Empresa::findOrFail($id);
        return view('empresa.see', compact('empresa'));
    }

    public function edit($id)
    {
        $empresa = Empresa::findOrFail($id);
        return view('empresa.edit', compact('empresa'));
    }

    public function update(Request $request,$id)
    {
        $empresa = Empresa::findOrFail($id);

        $empresa->RUC=$request->get('RUC');
        $empresa->razon_social=$request->get('razon_social');
        $empresa->representante=$request->get('representante');
        $empresa->dni=$request->get('dni');
        $empresa->contacto=$request->get('contacto');
        $empresa->telefono1=$request->get('telefono1');
        $empresa->anexo1=$request->get('anexo1');
        $empresa->telefono2=$request->get('telefono2');
        $empresa->telefono3=$request->get('telefono3');
        $empresa->correo1=$request->get('correo1');
        $empresa->correo2=$request->get('correo2');
        
        $empresa->update();
        return redirect()->back();
    }


    

 
}
