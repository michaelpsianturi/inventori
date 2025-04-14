<?php

namespace App\Livewire\Asset;

use App\Models\asset;
use Livewire\Component;
use Livewire\WithPagination;

class Assetlist extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $asset = asset::where('id', $id)->first();
        if ($asset) {
            $asset->delete();

            return redirect()->to('/asset');
        }
    }

    public function render()
    {
        return view('sidebar.asset', [
            'assets' => asset::paginate(9),
        ]);
    }
}
