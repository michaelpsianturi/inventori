<?php

namespace App\Livewire;

use Livewire\Component;

class ModalLivewire extends Component
{

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.modal-livewire');
    }
}
