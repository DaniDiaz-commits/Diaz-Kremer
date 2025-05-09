<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comentario;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Support\Str;

class ComentarioSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comentariosEjemplo = [
            "Excelente calidad, superó mis expectativas.",
            "No está mal, pero esperaba un poco más por el precio.",
            "Muy útil, lo uso casi todos los días.",
            "Llegó rápido y bien empaquetado, lo recomiendo.",
            "Producto de buena calidad, repetiré la compra.",
            "Tuvo algunos defectos menores, pero me lo resolvieron rápido.",
            "El diseño es muy bonito y funcional.",
            "No era lo que esperaba, pero funciona.",
            "Muy satisfecho con este producto.",
            "Una gran relación calidad-precio.",
            "El producto cumplió con lo prometido, muy contento con mi compra.",
            "Buena calidad, aunque el tamaño no es el que esperaba.",
            "Lo compré como regalo y le encantó, gran acierto.",
            "Es justo lo que necesitaba, recomendado.",
            "Me encantó el color, aunque la textura no es lo que pensaba.",
            "El servicio de atención al cliente fue excelente, resolvieron todo rápidamente.",
            "Quedé decepcionado, no era lo que esperaba.",
            "Llegó en perfecto estado, y el rendimiento es justo como se describe.",
            "El producto es bueno, pero el precio podría ser más accesible.",
            "Lo he usado un par de veces y parece resistente, pero aún es pronto para juzgar.",
            "Decepcionado, no cumple con las expectativas generadas por las imágenes.",
        ];

        $productos = Producto::all();
        $usuarios = User::all();

        if ($productos->isNotEmpty() && $usuarios->isNotEmpty()) {
            foreach ($productos as $producto) {
                for ($i = 0; $i < 1; $i++) {
                    Comentario::create([
                        'id_producto' => $producto->id,
                        'id_user' => 1,
                        'contenido' => 'Este producto es bueno. ' . ($i + 1),
                    ]);
                }
            }
        }

        if ($productos->isNotEmpty() && $usuarios->isNotEmpty()) {
            $productosSeleccionados = $productos->take(10); // Tomamos 10 productos aleatorios

            foreach ($productosSeleccionados as $index => $producto) {
                // Puedes generar entre 1 y 3 comentarios por producto si quieres más variedad
                $cantidadComentarios = rand(1, 3);
                for ($i = 0; $i < $cantidadComentarios; $i++) {
                    Comentario::create([
                        'id_producto' => $producto->id,
                        'id_user' => 1,
                        'contenido' => $comentariosEjemplo[array_rand($comentariosEjemplo)],
                    ]);
                }
            }
        }
    }
}
