<?php

namespace App\Livewire;

use App\Models\Proveedor;
use Flux\Flux;
use Livewire\Component;

class ProveedorCreate extends Component
{
    public $nombre, $descripcion, $email, $telefono, $direccion, $logo_url;
    public function render()
    {
        return view('livewire.proveedor-create');
    }

    public function submit()
    {
        $this->validate([
            "nombre" => "required|string|unique:proveedores,nombre",
            "descripcion" => "nullable|string|max:250",
            "email" => "nullable|email",
            "telefono" => "nullable|regex:/^\d{9,15}$/",
            "direccion" => "nullable|string|max:250",
            "logo_url" => "nullable|string"
        ]);

        Proveedor::create([
            "nombre" => $this->nombre,
            "descripcion" => $this->descripcion,
            "email" => $this->email,
            "telefono" => $this->telefono,
            "direccion" => $this->direccion,
            "logo_url" => $this->logo_url,
            "img_url" => null
        ]);

        $this->reset();

        Flux::modal("create-proveedor")->close();

        $this->dispatch("reloadProveedores");
    }

    public function resetForm() {
        $this->nombre = "";
        $this->descripcion = "";
        $this->email = "";
        $this->telefono = "";
        $this->direccion = "";
        $this->logo_url = "";
    }
}
