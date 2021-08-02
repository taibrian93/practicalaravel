<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //

    protected $fillable = [
        'nombre', 
        'apellido', 
        'dni',
        'edad',
        'telefono',
        'direccion',
        'estado'
    ];

    public function book(){
        return $this->hasMany('App\Models\Book');
    }
}
