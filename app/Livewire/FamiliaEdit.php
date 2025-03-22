<?php

namespace App\Livewire;

use App\Models\Familia;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;

class FamiliaEdit extends Component
{
    public $nombre, $descripcion, $familiaId;
    public function render()
    {
        return view('livewire.familia-edit');
    }

    #[On("editFamilia")]
    public function editFamilia($id) 
    {
        $familia = Familia::find($id);
        $this->familiaId = $id;
        $this->nombre = $familia->nombre;
        $this->descripcion = $familia->descripcion;
        Flux::modal('edit-familia')->show();
    }

    public function update() 
    {
        $this->validate([
            'nombre' => "required",
            'descripcion' => "required",
        ]);
        $familia = Familia::find($this->familiaId);

        $familia->nombre = $this->nombre;
        $familia->descripcion = $this->descripcion;
    }
}
