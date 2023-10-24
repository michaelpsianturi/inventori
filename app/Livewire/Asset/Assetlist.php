<?php

namespace App\Livewire\Asset;

use Livewire\Component;
use App\Models\asset;

class Assetlist extends Component
{
    public $assets;

    public function mount()
    {
        $this->assets = asset::all();
    }

    public function delete($id)
    {
        $asset = asset::where('id', $id)->first();

        if ($asset) {
            $asset->delete();
            $this->assets = asset::all();
            return redirect()->to('/asset');
        }
    }

    

    public function render()
    {
        $assets = asset::all();
        return view('sidebar.asset', [
            'assets' => $assets
        ]);
    }
}

