<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = ['id_producto', 'id_user', 'contenido'];

    public function producto() {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function usuario() {
        return $this->belongsTo(User::class, 'id_user');
    }
}
