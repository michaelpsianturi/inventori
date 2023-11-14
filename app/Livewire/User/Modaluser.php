<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\datauser;
class Modaluser extends Component
{
    public $isOpen = false;

    #[Rule('required', message:'Nama tidak boleh kosong')]
    #[Rule('min:2', message:'Nama tidak boleh kurang dari dua')]
    public $profile_name;

    #[Rule('required', message:'harap di isi')]
    #[Rule('min:4', message:'menggunakan format email yang bena',)]
    public $profile_email;

    #[Rule('required', message:'harap di isi')]
    #[Rule('min:10', message:'minimal 10 angka')]
    public $profile_phone_number;

    #[Rule('required', message:'harap di isi')]
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
