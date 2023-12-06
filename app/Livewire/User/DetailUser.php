<?php

namespace App\Livewire\User;
use App\Models\datauser;

use Livewire\Component;

class DetailUser extends Component
{
    public $datausers;

    public function delete($id)
    {
        $datausers = datauser::where('id', $id)->first();
        if ($datausers){
                $datausers->delete();
                return redirect()->to('/listuser');
        }
    }

    public function mount()
    {
        $this->datausers = datauser::find(request()->route('id'));
    }

    public function render()
    {
        return view('livewire.user.detail-user', [
            'datausers' => $this->datausers
        ]);
    }
}
