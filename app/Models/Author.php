<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    //
    use SoftDeletes;

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
        return $this->hasMany('App\Models\Book')->withTrashed();
    }
}
