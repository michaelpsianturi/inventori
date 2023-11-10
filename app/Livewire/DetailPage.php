<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\asset;

class DetailPage extends Component
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
        return view('livewire.detail-page', [
            'assets' => $this->assets
        ]);
    }
}
