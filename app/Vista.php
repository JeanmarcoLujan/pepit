<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vista extends Model
{
    public $timestamps=true;


    protected $fillable=[
    	'empresa_id',
    	'user_id',
    	'nombre',
    	'foto',
    	'observacion',
        'tipo_inspeccion'

    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
