<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'idAuthor', 
        'titulo', 
        'annoPublicacion',
        'numeroCopia',
        'ubicacionLibrero',
        'descripcion',
        'estado',
    ];
    
    public function author(){
        return $this->belongsTo('App\Models\Author','idAuthor','id');
    }
}
