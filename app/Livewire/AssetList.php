<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Asset;

class AssetList extends Component
{
    public $assets;

    public function mount()
    {
        $this->assets = Asset::all();

    }

    public function render()
    {
        return view('sidebar.asset', [
            'assets' => $this->assets,
        ]);
    }
}
