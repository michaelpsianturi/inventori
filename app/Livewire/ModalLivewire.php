<?php

namespace App\Livewire;

use App\Models\Asset;
use Livewire\Component;

class ModalLivewire extends Component
{
    public $isOpen;

    public function __construct()
    {
        $this->isOpen = false;
    }

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
        return view('components.livewire.modal-livewire');
    }
}
