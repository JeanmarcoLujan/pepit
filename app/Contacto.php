<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public $timestamps=true;


    protected $fillable=[
    	'nombre',
    	'nombre',
    	'titulo',
    	'institucion',
    	'cargo',
    	'direccion',
    ];

}
