<?php

namespace App\Livewire;

use App\Models\Familia;
use Flux\Flux;
use Livewire\Component;

class FamiliaCreate extends Component
{
    public $nombre, $descripcion;
    public function render()
    {
        return view('livewire.familia-create');
    }

    public function submit() {
        $this->validate([
            "nombre" => "required\string|unique:familias,nombre",
            'descripcion' => 'required|string|max:250|unique:familias,descripcion',
        ]);

        Familia::create([
            "nombre" => $this->nombre,
            "descripcion" => $this->descripcion,
        ]);

        $this->resetForm();

        Flux::modal('create-familia')->close();

        $this->dispatch('reloadFamilias');
    }

    public function resetForm() {
        $this->nombre = '';
        $this->descripcion = '';
    }
}
