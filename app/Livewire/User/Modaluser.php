<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\datauser;

class Modaluser extends Component
{
    public $isOpen = false;
    public $nama_pengguna = null;
    public $email = null;
    public $phone_number = null;
    public $alamat = null;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function saveAsset()
    {
        $this->validate([
            'nama_pengguna' => 'required',
            'email' => 'required',
            'phone_number' => 'required|numeric',
            'alamat' => 'required'
        ]);

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

    private function resetFields()
    {
        $this->nama_pengguna = null;
        $this->email = null;
        $this->phone_number = null;
        $this->alamat = null;
    }

    public function render()
    {
        return view('livewire.user.modaluser');
    }
}
