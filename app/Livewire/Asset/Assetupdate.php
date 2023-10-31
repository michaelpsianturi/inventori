<?php

namespace App\Livewire\Asset;

use Livewire\Component;
use App\Models\asset;
use Livewire\Attributes\Rule;

class Assetupdate extends Component
{
    public $key;
    public $id;

    #[Rule('required', message: 'harap di isi namanya')]
    public $nama_barang;

    #[Rule('required', message: 'harap di isi harganya')]
    #[Rule('min:2', message:'masih kurang minima lagi 3')]
    public $harga_barang;

    #[Rule('required', message: 'harap di isi nomor serinya')]
    #[Rule('min:3', message:'masih kurang minima lagi 3')]
    public $nomor_seri_barang;

    #[Rule('required', message: 'harap di isijumlahnya')]
    public $jumlah_barang;

    public function mount()
    {
        $this->id = request()->route('id');
        $assets = asset::find($this->id);
        $this->nama_barang = $assets->nama_barang;
        $this->harga_barang = $assets->harga_barang;
        $this->nomor_seri_barang = $assets->nomor_seri_barang;
        $this->jumlah_barang = $assets->jumlah_barang;

    }


    public function update()
    {
        $this->validate();
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
        return view('livewire.asset.assetupdate');
    }
}
