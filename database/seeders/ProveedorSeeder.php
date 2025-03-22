<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->proveetor("Arte regal", null, null, null, "arteRegal-logo.png", null);
        $this->proveetor("Euro Quimica", null, null, null, "euroquimica-logo.png", null);
        $this->proveetor("Soudal", null, null, null, "soudal-logo.png", null);
        $this->proveetor("Pons Quimicas", null, null, null, "ponsQuimicas-logo.png", null);
        $this->proveetor("Grupo Cuatrogasa", null, null, null, "grupoCuatrogasa-logo.png", null);
        $this->proveetor("Ac marca", null, null, null, "acmarca-logo.jpeg", null);
        $this->proveetor("Essity", null, null, null, "essity-logo.png", null);
        $this->proveetor("Palboplast", null, null, null, "palboplast-logo.png", null);
        $this->proveetor("MakroPlast", null, null, null, "makroplas-logo.png", null);
        $this->proveetor("Instituto Español", null, null, null, "institutoEspañol-logo.jpg", null);
        $this->proveetor("Goma camps", null, null, null, "gomacamps-logo.jpeg", null);
        $this->proveetor("Loreal", null, null, null, "loreal-logo.png", null);
        $this->proveetor("Beiersdorf", null, null, null, "Beiersdorf-logo.webp", null);
        $this->proveetor("Quimunsa", null, null, null, "quimunsa-logo.png", null);
        $this->proveetor("Vetusplas", null, null, null, "vetusplas-logo.png", null);
        $this->proveetor("Zelnova Zeltia", null, null, null, "zelnovaZeltia-logo.jpg", null);
        

        // Proveedor::factory(10)->create();
    }

    public function proveetor (string $nombre, ?string $telefono, ?string $direccion, ?string $email, ?string $logo_url, ?string $img_url) {
        Proveedor::create([
            'nombre' => $nombre,
            'email' => $email,
            'telefono' => $telefono,
            'direccion' => $direccion,
            'logo_url' => $logo_url,
            'img_url' => $img_url
        ]);
    }
}
