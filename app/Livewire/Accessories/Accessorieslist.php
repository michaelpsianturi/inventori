<?php

namespace App\Livewire\Accessories;

use App\Models\Accessories;
use Livewire\Component;
use Livewire\WithPagination;

class Accessorieslist extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $accessories = Accessories::Where('id', $id)->first();
        if ($accessories) {
            $accessories->delete();

            return redirect()->to('/accessories');
        }
    }

    public function render()
    {
        return view('sidebar.accessories', [
            'Accessories' => Accessories::paginate(9),
        ]);
    }
}
