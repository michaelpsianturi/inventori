<?php

namespace App\Livewire\Asset;

use Livewire\Component;

class SearchAsset extends Component
{
    public function render()
    {
        return view('livewire.asset.search-asset', ('assets'));
    }
}
