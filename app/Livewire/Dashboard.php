<?php

namespace App\Livewire;

use App\Models\accessories;
use App\Models\asset;
use App\Models\datauser;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $assets = asset::count();
        $datausers = datauser::count();
        $Acceessories = accessories::count();

        return view('livewire.dashboard', [
            'assets' => $assets,
            'datausers' => $datausers,
            'Accessories' => $Acceessories,
        ]);
    }
}
