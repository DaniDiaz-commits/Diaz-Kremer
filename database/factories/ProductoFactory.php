<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $values = [];
        for ($i = 0; $i < 6; $i++) {
            // get a random digit, but always a new one, to avoid duplicates
            $values []= $this->faker->randomDigit();
        }
        $numero = str_replace(",", "", implode(",", $values));
        return [
            'codigo' => "#".$numero,
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->text(200),
            'precio' => $this->faker->randomFloat(2, 1, 100),
            'newPrecio' => $this->faker->randomFloat(2, 1, 100),
            'stock' => $this->faker->randomDigit(),
            'rating' => $this->faker->numberBetween(1, 5),
            'id_familia' => $this->faker->numberBetween(1,12),
            'id_proveedor' => $this->faker->numberBetween(1,10),
            'img_url' => "https://via.assets.so/img.jpg?w=300&h=150&tc=blue&bg=#cecece&t=Product",
        ];
    }
}
