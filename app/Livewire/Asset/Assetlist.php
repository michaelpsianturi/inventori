<?php

namespace App\Livewire\Asset;

use Livewire\Component;
use App\Models\asset;
use Livewire\WithPagination;

class Assetlist extends Component
{
    use WithPagination;

    public $search;

    public function search()
    {
        $assets = Asset::where('name', 'like', "%{$this->search}%")->orWhere('category', 'like', "%{$this->search}%")->paginate(9);
        $this->emit('refreshAssets', $assets);
    }

    public function delete($id)
    {
        $asset = asset::where('id', $id)->first();
        if ($asset) {
            $asset->delete();
            return redirect()->to('/asset');
        }
    }

    public function render()
    {
        return view('sidebar.asset', [
            'assets' => asset::paginate(9),
        ]);
    }
}