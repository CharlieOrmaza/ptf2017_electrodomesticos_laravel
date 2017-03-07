<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    public function categoria()
    {
        return $this->belongsTo('App\CategoriaProducto', 'categoria_producto_id');
    }
}
