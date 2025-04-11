<?php

namespace App\Livewire\User;

use App\Models\datauser;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Modaluser extends Component
{
    public $isOpen = false;

    #[Rule('required')]
    #[Rule('min:2', )]
    public $profile_name;

    #[Rule('required')]
    #[Rule('min:4')]
    public $profile_email;

    #[Rule('required')]
    #[Rule('integer')]
    #[Rule('min:10')]
    public $profile_phone_number;

    #[Rule('required')]
    public $profile_address;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetFields()
    {
        $this->profile_name = null;
        $this->profile_email = null;
        $this->profile_phone_number = null;
        $this->profile_address = null;
    }

    public function saveUser()
    {
        $this->validate();
        datauser::create([
            'profile_name' => $this->profile_name,
            'profile_email' => $this->profile_email,
            'profile_phone_number' => $this->profile_phone_number,
            'profile_address' => $this->profile_address,
        ]);

        $this->resetFields();
        $this->isOpen = false;

        return redirect()->to('/listuser');
    }

    public function render()
    {
        return view('livewire.user.modaluser');
    }
}
