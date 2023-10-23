<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Contracts\Console\Kernel;
use Livewire\Component;
use App\Models\asset;

class Assetupdate extends Component
{
    public $asset;

    public function mount($id)
    {
        $this->asset = Asset::findOrFail(request()->route('asset'));
    }

    public function update()
{
    $this->asset->nama_barang = $this->asset->nama_barang;
    $this->asset->harga_barang = $this->asset->harga_barang;
    $this->asset->nomor_seri_barang = $this->asset->nomor_seri_barang;
    $this->asset->jumlah_barang = $this->asset->jumlah_barang;

    $this->asset->save();

    $this->emit('updated');
}


    public function render()
    {
        return view('livewire.assetupdate', [
            'asset' => $this->asset,
        ]);
    }
}
