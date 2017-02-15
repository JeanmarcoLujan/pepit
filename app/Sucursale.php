<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursale extends Model
{
   public $timestamps=true;


    protected $fillable=[
    	'empresa_id',
    	'manzana',
    	'lote',
    ];

    protected $with = ['empresa'];

    public function empresa()
    {
    	return $this->belongsTo('App\Empresa');
    }

    public function estado()
    {
    	return $this->belongsTo('App\Estado');
    }

    
    
}
