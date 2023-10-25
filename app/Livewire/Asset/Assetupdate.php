<?php

namespace App\Livewire\Asset;

use Livewire\Component;
use App\Models\asset;

class Assetupdate extends Component
{
    public $key;
    public $id;
    public $nama_barang;
    public $harga_barang;
    public $nomor_seri_barang;
    public $jumlah_barang;

    public function mount()
    {
        $this->id = request()->route('id');
        $asset = asset::find($this->id);
        $this->nama_barang = $asset->nama_barang;
        $this->harga_barang = $asset->harga_barang;
        $this->nomor_seri_barang = $asset->nomor_seri_barang;
        $this->jumlah_barang = $asset->jumlah_barang;
    }


    public function update()
    {
        $this->validate([
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'nomor_seri_barang' => 'required',
            'jumlah_barang' => 'required|numeric',
        ]);

        $asset = Asset::find($this->id);
        $asset->update([
            'nama_barang' => $this->nama_barang,
            'harga_barang' => $this->harga_barang,
            'nomor_seri_barang' => $this->nomor_seri_barang,
            'jumlah_barang' => $this->jumlah_barang
        ]);


        return redirect()->to('/asset');
    }

    public function render()
    {
        $this->key = 'assetupdate-key';
        return view('livewire.asset.assetupdate');
    }
}
