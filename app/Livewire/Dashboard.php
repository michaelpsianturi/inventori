<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\asset;
use App\Models\datauser;
use App\Models\accessories;

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
            'Accessories' => $Acceessories
        ]);
    }
}
