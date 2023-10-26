<?php

namespace App\Livewire\Accessories;

use Livewire\Component;
use App\Models\accessories;

class Accessorieslist extends Component
{
    public $Accessories;

    public function mount()
    {
        $this->Accessories = accessories::all();
    }

    public function delete($id)
    {
        $accessories = accessories::Where('id', $id)->first();

        if ($accessories) {
            $accessories->delete();
            $this->Accessories = accessories::all();
            return redirect()->to('/accessories');
        }
    }

    public function render()
    {
        $Accessories = accessories::all();
        return view('sidebar.accessories', [
            'Accessories' => $Accessories
        ]);
    }
}
