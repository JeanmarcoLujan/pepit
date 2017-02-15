<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps=false;


    protected $fillable=[
    	'contacto_id',
    	'mesa_id'

    ];
}
