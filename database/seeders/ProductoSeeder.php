<?php
// PARA QUE??
namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->productier('#000001', 'Afeitado Maquina Pro', 'Máquina de afeitar profesional, ideal para el afeitado diario.', 1500, 50, 5, 1, 1, "https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product");
        $this->productier('#000002', 'Afeitado Cargadores', 'Cargador para máquinas de afeitar de uso profesional.', 300, 100, 4, 1, 1, "https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product");
        $this->productier('#000003', 'Aceite Corporal', 'Aceite corporal hidratante para la piel seca.', 200, 200, 5, 2, 1, "https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product");
        $this->productier('#000004', 'Cepillo Dientes Pro', 'Cepillo de dientes profesional con cerdas suaves.', 50, 150, 4, 6, 1, "https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product");
        $this->productier('#000005', 'Gel Baño', 'Gel de baño refrescante y suave, ideal para piel sensible.', 120, 80, 5, 3, 1, "https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product");
        $this->productier('#000006', 'Colonias Exclusivas Femeninas', 'Colonias exclusivas para mujeres con aroma floral y elegante.', 250, 30, 4, 10, 1, "https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product");
        $this->productier('#000007', 'Bronceador Solar', 'Bronceador solar con protección alta contra los rayos UV.', 180, 60, 5, 9, 1, "https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product");
        $this->productier('#000008', 'Mascarilla para el Pelo', 'Mascarilla capilar para hidratación profunda del cabello.', 130, 40, 5, 11, 1, "https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product");
        $this->productier('#000009', 'Bastoncillos Higiénicos', 'Bastoncillos de algodón para limpieza de oídos.', 30, 200, 4, 12, 1, "https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product");
        $this->productier('#000010', 'Desodorante Femenino', 'Desodorante en spray para mujer, fragancia fresca y duradera.', 100, 100, 5, 13, 1, "https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product");
        $this->productier('#000011', 'Shampoo para Cabello Graso', 'Shampoo especializado para cabello graso, controla el exceso de grasa.', 150, 120, 4, 2, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000012', 'Afeitadora Eléctrica', 'Afeitadora eléctrica profesional para cortes precisos y suaves.', 500, 80, 5, 1, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000013', 'Crema Facial Hidratante', 'Crema hidratante para el rostro, combate la sequedad y suaviza la piel.', 250, 150, 5, 3, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000014', 'Exfoliante Corporal', 'Exfoliante suave para el cuerpo, ideal para eliminar células muertas.', 180, 90, 4, 4, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000015', 'Loción Capilar', 'Loción capilar revitalizante, ideal para fortalecer el cabello.', 120, 100, 4, 6, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000016', 'Colonias Masculinas', 'Colonias masculinas frescas y elegantes con aromas duraderos.', 300, 50, 5, 10, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000017', 'Jabón de Tocador', 'Jabón de tocador suave para pieles sensibles, con aroma floral.', 40, 200, 5, 7, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000018', 'Cera para Eliminar Vello', 'Cera caliente para depilación de todo el cuerpo, elimina vello de raíz.', 220, 60, 4, 8, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000019', 'Gel para Manos', 'Gel higienizante para manos, elimina gérmenes y bacterias.', 90, 150, 5, 5, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000020', 'Cepillo de Cerdas Naturales', 'Cepillo para el cabello con cerdas naturales, ideal para un acabado brillante.', 160, 100, 4, 6, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000021', 'Desinfectante Multiusos', 'Desinfectante para uso doméstico, elimina el 99% de bacterias.', 130, 200, 5, 4, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000022', 'Mascarilla Facial', 'Mascarilla facial para rejuvenecer la piel y combatir signos de envejecimiento.', 180, 80, 5, 3, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000023', 'Papel Higiénico', 'Papel higiénico suave y resistente, ideal para el hogar.', 60, 500, 4, 2, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000024', 'Tijeras para Uñas', 'Tijeras profesionales para uñas, perfectas para un corte preciso.', 90, 150, 4, 12, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000025', 'Cinta Adhesiva', 'Cinta adhesiva transparente para uso general, ideal para oficina y hogar.', 30, 300, 4, 5, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000026', 'Crema de Manos', 'Crema hidratante para manos secas, con acción nutritiva y reparadora.', 110, 250, 5, 3, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000027', 'Aceite para Masajes', 'Aceite natural para masajes relajantes y terapéuticos.', 220, 70, 4, 2, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000028', 'Lacas para Uñas', 'Lacas de uñas de alta calidad en diversos colores.', 150, 100, 4, 9, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000029', 'Limpieza de Cristales', 'Producto limpiador para cristales, deja un acabado sin marcas.', 80, 120, 5, 4, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        $this->productier('#000030', 'Protector Solar', 'Protector solar de amplio espectro para todo tipo de piel.', 250, 50, 5, 1, 1, 'https://via.assets.so/img.jpg?w=30&h=15&tc=blue&bg=#cecece&t=Product');
        // Producto::factory(10)->create();
    }

    public function productier(string $codigo, string $nombre, string $descripcion, int $precio, int $stock, int $rating, int $id_familia, int $id_proveedor, string $url)
    {
        Producto::create([
            'codigo' => $codigo,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'stock' => $stock,
            'rating' => $rating,
            'id_familia' => $id_familia,
            'id_proveedor' => $id_proveedor,
            'img_url' => $url,
        ]);
    }
}
