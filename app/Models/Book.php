<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
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
        return $this->belongsTo('App\Models\Author','idAuthor','id')->withTrashed();
    }

    
}
