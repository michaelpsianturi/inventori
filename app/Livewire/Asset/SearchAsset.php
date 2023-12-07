<?php

namespace App\Livewire\Asset;

use Livewire\Component;

use App\Models\asset;

class SearchAsset extends Component
{
    public function render()
    {
        return view('livewire.asset.search-asset', ('assets'));
    }
}
