<?php

namespace App\Livewire\User;

use App\Models\datauser;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Userupdate extends Component
{
    public datauser $datausers;

    public $id;

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

    public function mount()
    {
        $this->id = request()->route('id');
        $profile = datauser::find($this->id);
        $this->profile_name = $profile->profile_name;
        $this->profile_email = $profile->profile_email;
        $this->profile_phone_number = $profile->profile_phone_number;
        $this->profile_address = $profile->profile_address;
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
