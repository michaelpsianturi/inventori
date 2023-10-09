<?php

namespace App\Livewire;

use Livewire\Component;

class ModalLivewire extends Component
{

    public $tittle;
    public $name;
    public $email;

    public function mount()
    {
        $this -> tittle = $this -> viewData['tittle'];
    }

    public function render()
    {
        return view('livewire.modal-livewire');
    }
}
