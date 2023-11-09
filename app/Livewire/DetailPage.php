<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\asset;
use Livewire\Attributes\Rule;

class DetailPage extends Component
{
    public $assets;

    public function mount()
    {
        $this->assets = asset::find(request()->route('id'));
    }

    public function render()
    {
        return view('livewire.detail-page', [
            'assets' => $this->assets
            // dd($this->mount());
        ]);
    }
}
