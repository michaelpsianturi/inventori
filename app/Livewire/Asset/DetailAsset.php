<?php

namespace App\Livewire\Asset;

use Livewire\Component;
use App\Models\asset;
use App\Models\datauser;

class DetailAsset extends Component
{
    public $assets;
    public $isOpen = false;
    public $datausers;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
        return redirect()->to('/asset');
    }

    public function delete($id)
    {
        $assets = asset::where('id', $id)->first();
        if ($assets) {
            $assets->delete();
            return redirect()->to('/asset/details/{{ $asset->id }}');
        }
    }

    public function mount()
    {
        $this->assets = asset::with('datauser')->find(request()->route('id'));

        $this->datausers = datauser::all();
    }

    public function render()
    {
        return view('livewire.asset.detail-asset', [
            'assets' => $this->assets
        ]);
    }
}
