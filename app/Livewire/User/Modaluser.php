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
    public $nama_pengguna;

    #[Rule('required', message:'harap di isi')]
    #[Rule('min:4', message:'menggunakan format email yang bena',)]
    public $email;

    #[Rule('required', message:'harap di isi')]
    #[Rule('integer', message:'harap di isi dengan angka')]
    #[Rule('min:10', message:'minimal 10 angka')]
    public $phone_number;

    #[Rule('required', message:'harap di isi')]
    public $alamat;

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
        $this->nama_pengguna = null;
        $this->email = null;
        $this->phone_number = null;
        $this->alamat = null;
    }

    public function saveAsset()
    {
        $this->validate();
        datauser::create([
            'nama_pengguna' => $this->nama_pengguna,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'alamat' => $this->alamat,
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
