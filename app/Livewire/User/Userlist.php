<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\datauser;
use Livewire\WithPagination;

class Userlist extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $datauser = datauser::Where('id', $id)->first();
        if ($datauser) {
            $datauser->delete();
            return redirect()->to('/listuser');
        }
    }

    public function render()
    {
        return view('sidebar.listuser', [
            'datausers' =>  datauser::paginate(9)
        ]);
    }
}