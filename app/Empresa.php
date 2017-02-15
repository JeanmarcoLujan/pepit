<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public $timestamps=true;


    protected $fillable=[
    	'RUC',
    	'razon_social',
    	'representante',
    	'dni',
    	'contacto',
    	'telefono1',
    	'anexo1',
    	'telefono2',
    	'telefono3',
    	'correo1',
    	'correo2'

    ];

}
