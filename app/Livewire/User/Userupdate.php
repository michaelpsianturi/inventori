<?php

namespace App\Livewire\User;

use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\datauser;

class Userupdate extends Component
{
    public datauser $datausers;
    public $id;
    #[Rule('required|min:3', onUpdate: false)]
    public $nama_pengguna= '';
    #[Rule('required|min:3|unique', onUpdate: false)]
    public $email = '';
    #[Rule('required|min:10|numeric', onUpdate: false)]
    public $phone_number = '';
    #[Rule('required|min:3', onUpdate: false)]
    public $alamat = '';
    public $key = 'userupdate-key';

    public function mount($id)
    {
        $profile = datauser::findOrFail($id);
        $this->id = $profile->id;
        $this->nama_pengguna = $profile->nama_pengguna;
        $this->email = $profile->email;
        $this->phone_number = $profile->phone_number;
        $this->alamat = $profile->alamat;
    }

    public function update()
    {
        $validated = $this->validate();
        datauser::updated($validated);
        $profile = datauser::findOrFail($this->id);
        $profile->update([
            'nama_pengguna' => $this->nama_pengguna,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'alamat' => $this->alamat,
        ]);
            return redirect()->to('/listuser');
    }

    public function render()
    {
        return view('livewire.user.userupdate');
    }
}
