<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\asset;

class Assetlist extends Component
{
    public $assets;

    public function mount()
    {
        $this->assets = Asset::all();
    }

    public function delete($id)
    {
        $asset = Asset::where('id', $id)->first();

        if ($asset) {
            $asset->delete();
            $this->assets = Asset::all();
            return redirect()->to('/asset');
        }
    }


    public function render()
    {
        $assets = Asset::all();
        return view('sidebar.asset', [
            'assets' => $assets,
        ]);
    }
}

