<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\datauser;

class Userlist extends Component
{
    public $datausers;

    public function mount()
    {
        $this->datausers = datauser::all();
    }

    public function delete($id)
    {
        $datauser = datauser::Where('id', $id)->first();

        if ($datauser) {
            $datauser->delete();
            $this->datausers = datauser::all();
            return redirect()->to('/listuser');
        }
    }

    public function render()
    {
        $datausers = datauser::all();
        return view('sidebar.listuser', [
            'datausers' => $datausers
        ]);
    }
}
