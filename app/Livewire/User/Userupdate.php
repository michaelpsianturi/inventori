<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\datauser;

class Userupdate extends Component
{
    public $key;
    public $id;
    public $nama_pengguna;
    public $email;
    public $phone_number;
    public $alamat;

    public function mount()
    {
        $this->id = request()->route('id');
        $datauser = Datauser::find($this->id);
        $this->nama_pengguna = $datauser->nama_pengguna;
        $this->email = $datauser->email;
        $this->phone_number = $datauser->phone_number;
        $this->alamat = $datauser->alamat;

        $this->key = 'userupdate-key';
    }

    public function update()
    {
        $this->validate([
            'nama_pengguna' => 'required',
            'email' => 'required',
            'phone_number' => 'required|numeric',
            'alamat' => 'required'
        ]);

        $datauser = Datauser::find($this->id);
        $datauser->update([
            'nama_pengguna' => $this->nama_pengguna,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'alamat' => $this->alamat
        ]);

        return redirect()->to('/listuser');
    }

    public function render()
    {

        return view('livewire.user.userupdate');
    }
}