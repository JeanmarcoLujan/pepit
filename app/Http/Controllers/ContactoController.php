<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormContactoRequest;
use App\Contacto;
use App\Http\Requests;

class ContactoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }	
    public function index()
    {
    	return view('contacto.registro');
    }

    public function store(FormContactoRequest $request)
    {
    	Contacto::create($request->all());
        return redirect()->back();
    }
    public function show($value='')
    {
    	$contactos = Contacto::all();
    	return view('contacto.list', compact('contactos'));
    }
}
