<?php

namespace App\Livewire\Accessories;

use Livewire\Component;
use App\Models\accessories;
use Livewire\WithPagination;

class Accessorieslist extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $accessories = accessories::Where('id', $id)->first();
        if ($accessories) {
            $accessories->delete();
            return redirect()->to('/accessories');
        }
    }

    public function render()
    {
        return view('sidebar.accessories', [
            'Accessories' => accessories::paginate(9)
        ]);
    }
}