<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // creamos nuevos atributos para mostrar en la vista
    // se crean y sedean de una vez con getNombreCampoAtributte()
    // se llamaran en la vista con guion bajo nombre_campo

    public function getExcerptAttribute()
    {
        return substr($this->content, 0, 120);
    }

    public function getPublishedAtAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }
}
