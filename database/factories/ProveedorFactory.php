<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $values = [];
        for ($i = 0; $i < 9; $i++) {
            // get a random digit, but always a new one, to avoid duplicates
            $values []= $this->faker->randomDigit();
        }
        $numero = str_replace(",", "", implode(",", $values));
        return [
            'nombre' => $this->faker->name(),
            'email' => $this->faker->email(),
            'telefono' => $numero,
            'direccion' => $this->faker->sentence(),
            'logo_url' => "https://via.assets.so/img.jpg?w=100&h=50&tc=black&bg=#cecece&t=Holder",
            'img_url' => "https://via.assets.so/img.jpg?w=500&h=250&tc=black&bg=#cecece&t=Img",
        ];
    }
}
