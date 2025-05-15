<?php
// PARA QUE??
namespace Database\Seeders;

use App\Models\Producto;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->productier('#000001', 'Parrilla barbacoa 40x40', 'Parrilla para una barbacoa tamaño 40x40.', 22.99, 34, 5, 1, 1, '\img/productos/12982_1.jpg', 19.99);
        $this->productier('#000002', 'Parrilla barbacoa 45x45', 'Parrilla para una barbacoa tamaño 45x45.', 26.50, 28, 5, 1, 1, '\img/productos/12985_1.jpg', 23.90);
        $this->productier('#000003', 'Copas Calices', 'Para beber un vinito como un rey.', 15.75, 45, 5, 1, 1, '\img/productos/20101_AR.jpg');
        $this->productier('#000004', 'Bolsilla para body care', 'Bolso para cuidado del cuerpo.', 10.99, 52, 5, 1, 1, '\img/productos/20199_1.jpg', 8.99);
        $this->productier('#000005', 'Bandeja plástico', 'Bandeja de plastica, estilo tropical.', 4.80, 76, 5, 1, 1, '\img/productos/87409_AR.jpg');
        $this->productier('#000006', 'Brocha de afeitar', 'Brocha de afeitar para hombre.', 7.30, 39, 5, 1, 1, '\img/productos/60792.jpg', 6.00);
        $this->productier('#000007', 'Pack de botellas de cristal de 1L', '6 Botellas de cristal de 1L .', 18.20, 20, 5, 1, 1, '\img/productos/79887_AR.jpg');
        $this->productier('#000008', 'Pack de botellas de cristal de 750cc', '6 Botellas de cristal de 750cc .', 16.90, 24, 5, 1, 1, '\img/productos/79888_AR.jpg');
        $this->productier('#000009', 'Soporte para jamón', 'Soporte para un presunto porte-jamon .', 25.40, 17, 5, 1, 1, '\img/productos/55083_AR.jpg', 21.99);
        $this->productier('#000010', 'Tabla de planchar', 'Tabla de planchar mediana .', 29.99, 14, 5, 1, 1, '\img/productos/11586_AR.jpg', 25.49);
        $this->productier('#000011', 'Lupa', 'Lupa de la marca pincello.', 3.99, 100, 5, 1, 1, '\img/productos/21853_1.jpg');
        $this->productier('#000012', 'Tartera de cristal', 'Tartera de cristal para 1,5L.', 9.80, 30, 5, 1, 1, '\img/productos/25852_AR.jpg');
        $this->productier('#000013', 'Saca-puntas de metal', 'Saca puntas de metal marca pincello.', 2.10, 88, 5, 1, 1, '\img/productos/29049_1.jpg');
        $this->productier('#000014', 'Cubitera de plástico', 'Cubitera para hielos.', 5.45, 60, 5, 1, 1, '\img/productos/37587_AR.jpg', 4.40);
        $this->productier('#000015', 'Cinta correctora', 'Cinta correctora para hojas.', 1.75, 120, 5, 1, 1, '\img/productos/57725_AR.jpg');
        $this->productier('#000016', 'Tabla de cortar 35x35', 'Tabla de madera para cortar, tamaño 35x35.', 14.99, 19, 5, 1, 1, '\img/productos/56437_AR.jpg', 12.99);
        $this->productier('#000017', 'Pack tablas de planchar', 'Pack de tablas de planchar tamaño 30x45.', 59.00, 8, 5, 1, 1, '\img/productos/78298_AR.jpg');
        $this->productier('#000018', 'Bote de cola blanca', 'Bote de cola blanca.', 3.20, 70, 5, 1, 1, '\img/productos/57717.jpg');
        $this->productier('#000019', 'Bote pegamento de barra blanca', 'Bote de pegamento blanco.', 1.95, 90, 5, 1, 1, '\img/productos/57719_AR.jpg', 1.50);
        $this->productier('#000020', 'Hucha para guardar dinero diseño con billete de 20€', 'Bote para guardar dinero .', 6.40, 31, 5, 1, 1, '\img/productos/34053.jpg');
        $this->productier('#000021', 'Hucha para guardar dinero diseño con moneda de 1€', 'Bote para para guardar dinero.', 6.40, 29, 5, 1, 1, '\img/productos/34118_AR.jpg');
        $this->productier('#000022', 'Paraguas grande', 'Paraguas grande de tela.', 12.50, 25, 5, 467, 12, '\img/productos/88736.jpg', 10.90);
        $this->productier('#000023', 'Paraguas pequeño', 'Paraguas pequeño de tela.', 8.99, 40, 5, 467, 12, '\img/productos/79797_AR.jpg');
        $this->productier('#000024', 'Pack de paraguas tricolor', 'Pack de 18 paraguas .', 85.00, 6, 5, 467, 12, '\img/productos/88735_AR.jpg', 75.00);
        $this->productier('#000025', 'Paraguas transparente', 'Paraguas de plástico transparente .', 10.20, 33, 5, 467, 12, '\img/productos/88814_AR.jpg');
        $this->productier('#000026', 'Pinzas de sujección', 'Pinzas de sujección .', 1.10, 300, 5, 1, 1, '\img/productos/0.jpg');
        $this->productier('#000027', 'Bolsa de paja', 'Bolsa de paja mediana .', 7.80, 22, 5, 1, 1, '\img/productos/86566.jpg');
        $this->productier('#000028', 'Velas de cumpleaños', 'Velas de cumpleaños con soporte a parte .', 2.25, 85, 5, 1, 1, '\img/productos/21200.jpg');
        $this->productier('#000029', 'Bascula', 'Para pesar alimentos .', 19.99, 15, 5, 1, 1, '\img/productos/78419_AR.jpg');
        $this->productier('#000030', 'Maceta', 'Maceta baja para plantas .', 3.60, 45, 5, 1, 1, '\img/productos/99540_AR.jpg', 2.99);
        $this->productier('#000031', 'Plantilla viscoelástica sport', 'Plantilla para zapatilla .', 3.60, 45, 5, 1, 1, '\img/productos/12021.jpg', 2);
        $this->productier('#000032', 'Cinta persiana extra 20cm', 'Cinta para persiana .', 3.60, 45, 5, 1, 1, '\img/productos/00114.jpg', 2);
        $this->productier('#000033', 'Felpudo', 'Felpudo con estampado de dibujo de abeja, con unas letras .', 3.60, 45, 5, 1, 1, '\img/productos/00114.jpg', 2);
        $this->productier('#000034', 'Basura de plástico', 'Basura de plástico azul, de 65 litros .', 5.00, 45, 5, 1, 1, '\img/productos/11061.jpg', 3.99);
        $this->productier('#000035', 'Gorro para la ducha', 'Gorro de ducha para no mojarse el pelo .', 0.50, 45, 5, 1, 1, '\img/productos/27811_AR.jpg');
        $this->productier('#000036', 'Pistola de silicona', 'Pistola de silicona .', 7.00, 45, 5, 1, 1, '\img/productos/27811_AR.jpg');
        $this->productier('#000037', 'Correa para perro', 'Correa para perro, 5 metros de longitud .', 4.99, 45, 5, 1, 1, '\img/productos/27811_AR.jpg');

    }

    public function productier(
        string $codigo,
        string $nombre,
        string $descripcion,
        float $precio,
        int $stock,
        int $rating,
        int $id_familia,
        int $id_proveedor,
        string $url,
        float $newPrecio = 0
    ) {
        Producto::create([
            'codigo' => $codigo,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'newPrecio' => $newPrecio,
            'stock' => $stock,
            'rating' => $rating,
            'id_familia' => $id_familia,
            'id_proveedor' => $id_proveedor,
            'img_url' => $url,
        ]);
    }
}
