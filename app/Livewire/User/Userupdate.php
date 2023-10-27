<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\datauser;

class Userupdate extends Component
{
    public $id;
    public $nama_pengguna;
    public $email;
    public $phone_number;
    public $alamat;
    public $key = 'userupdate-key';

    public function mount($id)
    {
        $dataUser = DataUser::findOrFail($id);
        $this->id = $dataUser->id;
        $this->nama_pengguna = $dataUser->nama_pengguna;
        $this->email = $dataUser->email;
        $this->phone_number = $dataUser->phone_number;
        $this->alamat = $dataUser->alamat;
    }

    public function rules()
    {
        return [
            'nama_pengguna' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:profile,email,' . $this->id],
            'phone_number' => ['required', 'integer', 'max:255'],
            'alamat' => ['required', 'string'],
        ];
    }

    public function update()
    {
        $dataUser = DataUser::findOrFail($this->id);
        $dataUser->update([
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
