<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comentario;
use App\Models\Producto;
use App\Models\User;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = Producto::all();
        $usuarios = User::all();

        if ($productos->isNotEmpty() && $usuarios->isNotEmpty()) {
            foreach ($productos as $producto) {
                for ($i = 0; $i < 5; $i++) {
                    Comentario::create([
                        'id_producto' => $producto->id,    
                        'id_user' => $usuarios->random()->id,
                        'contenido' => 'Este es un comentario de prueba sobre el producto. ' . ($i + 1),
                    ]);
                }
            }
        }
    }
}
