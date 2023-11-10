<?php

namespace App\Livewire\Asset;

use Livewire\Component;
use App\Models\asset;

class DetailAsset extends Component
{
    public $assets;

    public function delete($id)
    {
        $assets = asset::where('id', $id)->first();
        if ($assets) {
            $assets->delete();
            return redirect()->to('/asset');
        }
    }

    public function mount()
    {
        $this->assets = asset::find(request()->route('id'));
    }

    public function render()
    {
        return view('livewire.asset.detail-asset', [
            'assets' => $this->assets,
        ]);
    }
}
