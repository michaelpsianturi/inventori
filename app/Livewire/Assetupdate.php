<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Asset;
class Assetupdate extends Component
{
    public $id;
    public $nama_barang;
    public $harga_barang;
    public $nomor_seri_barang;
    public $jumlah_barang;

    public function mount()
    {
        $this->id = request()->route('id');
        $asset = Asset::find($this->id);
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
        'jumlah_barang' => $this->jumlah_barang,
    ]);

    $asset -> save();
    return redirect()->to('/asset');
}



    public function render()
    {
        return view('livewire.assetupdate');
    }
}
