<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\datauser;

// class Userupdate extends Component
// {
//     public $key;
//     public $id;
//     public $nama_pengguna;
//     public $email;
//     public $phone_number;
//     public $alamat;

//     public function mount()
//     {
//         $this->id = request()->route('id');
//         $datauser = datauser::find($this->id);
//         $this->nama_pengguna = $datauser->nama_pengguna;
//         $this->email = $datauser->email;
//         $this->phone_number = $datauser->phone_number;
//         $this->alamat = $datauser->alamat;

//         $this->key = 'userupdate-key';
//     }

//     public function rules()
//     {
//         return [
//             'nama_pengguna' => ['required', 'string', 'max:255'],
//             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//             'phone_number' => ['required', 'integer', 'max:20'],
//             'alamat' => ['required', 'string',]
//         ];
//     }

//     public function update()
//     {
//         $datauser = datauser::find($this->id);
//         $this->validate();

//         $datauser->update([
//             'nama_pengguna' => $this->nama_pengguna,
//             'email' => $this->email,
//             'phone_number' => $this->phone_number,
//             'alamat' => $this->alamat
//         ]);
//         // dd($this);
//         return redirect()->to('/listuser');
//     }

//     public function render()
//     {

//         return view('livewire.user.userupdate');
//     }
// }


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
        $this->id = $id;
        $datauser = datauser::find($this->id);

        $this->nama_pengguna = $datauser->nama_pengguna;
        $this->email = $datauser->email;
        $this->phone_number = $datauser->phone_number;
        $this->alamat = $datauser->alamat;
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
        $this->validate();

        $datauser = datauser::find($this->id);
        $datauser->update([
            'nama_pengguna' => $this->nama_pengguna,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'alamat' => $this->alamat,
        ]);

        session()->flash('message', 'Data pengguna berhasil diperbarui.');
    }

    public function render()
    {
        return view('livewire.user.userupdate');
    }
}
