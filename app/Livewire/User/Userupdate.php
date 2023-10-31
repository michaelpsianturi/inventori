<?php

namespace App\Livewire\User;

use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\datauser;

class Userupdate extends Component
{
    public datauser $datausers;
    public $id;

    #[Rule('required', message:'harap di isi')]
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

    public function mount()
    {
        $this->id = request()->route('id');
        $profile = datauser::find($this->id);
        $this->nama_pengguna = $profile->nama_pengguna;
        $this->email = $profile->email;
        $this->phone_number = $profile->phone_number;
        $this->alamat = $profile->alamat;
    }

    public function update()
    {
        $this->validate();
        $profile = datauser::find($this->id);
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
