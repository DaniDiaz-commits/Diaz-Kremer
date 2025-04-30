<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // use HasFactory;
    // protected $table = "productos"; 

    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'precio',
        'newPrecio',
        'stock',
        'rating',
        'id_familia',
        'id_proveedor',
        'img_url',
    ];

    public function familia()
    {
        return $this->belongsTo(Familia::class, 'id_familia');
    }
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_producto');  // Relación inversa con comentarios
    }
}
