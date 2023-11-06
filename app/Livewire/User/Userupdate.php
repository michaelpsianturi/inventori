<?php

namespace App\Livewire\User;

use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\datauser;

class Userupdate extends Component
{
    public datauser $datausers;
    public $id;

    #[Rule('required', message:'Nama tidak boleh kosong')]
    #[Rule('min:2', message:'Nama tidak boleh kurang dari dua')]
    public $profile_name;

    #[Rule('required', message:'harap di isi')]
    #[Rule('min:4', message:'menggunakan format email yang bena',)]
    public $profile_email;

    #[Rule('required', message:'harap di isi')]
    #[Rule('integer', message:'harap di isi dengan angka')]
    #[Rule('min:10', message:'minimal 10 angka')]
    public $profile_phone_number;

    #[Rule('required', message:'harap di isi')]
    public $profile_address;
    
    public function mount()
    {
        $this->id = request()->route('id');
        $profile = datauser::find($this->id);
        $this->profile_name  = $profile->profile_name;
        $this->profile_email  = $profile->profile_email;
        $this->profile_phone_number  = $profile->profile_phone_number;
        $this->profile_address  = $profile->profile_address;
    }

    public function update()
    {
        $this->validate();
        $profile = datauser::find($this->id);
        $profile->update([
            'profile_name' => $this->profile_name,
            'profile_email' => $this->profile_email,
            'profile_phone_number' => $this->profile_phone_number,
            'profile_address' => $this->profile_address,
        ]);
            return redirect()->to('/listuser');
    }

    public function render()
    {
        return view('livewire.user.userupdate');
    }
}
