<?php

namespace App\Livewire\Accessories;

use Livewire\Component;
use App\Models\accessories;

class Accessoriesupdate extends Component
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
        $accessories = Accessories::find($this->id);
        $this->nama_barang = $accessories->nama_barang;
        $this->harga_barang = $accessories->harga_barang;
        $this->nomor_seri_barang = $accessories->nomor_seri_barang;
        $this->jumlah_barang = $accessories->jumlah_barang;

        $this->key = 'accessoriesupdate-key';
    }

    // public function update()
    // {
    //     $this->validate([
    //         'nama_barang' => 'required',
    //         'harga_barang' => 'required | integer',
    //         'nomor_seri_barang' => 'required',
    //         'jumlah_barang' => 'required | integer'
    //     ]);

    //     $accessories = Accessories::find($this->id);
    //     $accessories->update([
    //         'nama_barang' => $this->nama_barang,
    //         'harga_barang' => $this->harga_barang,
    //         'nomor_seri_barang' => $this->nomor_seri_barang,
    //         'jumlah_barang' => $this->jumlah_barang,
    //     ]);

    //     return redirect()->to('/accessories');
    // }

    public function update()
{
    $this->validate([
        'nama_barang' => 'required',
        'harga_barang' => 'required|integer',
        'nomor_seri_barang' => 'required',
        'jumlah_barang' => 'required|integer'
    ], [
        // Pesan validasi kustom
        'nama_barang.required' => 'Nama barang harus diisi.',
        'harga_barang.required' => 'Harga barang harus diisi.',
        'harga_barang.integer' => 'Harga barang harus berupa angka.',
        'nomor_seri_barang.required' => 'Nomor seri barang harus diisi.',
        'jumlah_barang.required' => 'Jumlah barang harus diisi.',
        'jumlah_barang.integer' => 'Jumlah barang harus berupa angka.'
    ]);

    // Jika validasi berhasil, simpan data
    $accessories = Accessories::find($this->id);
    $accessories->update([
        'nama_barang' => $this->nama_barang,
        'harga_barang' => $this->harga_barang,
        'nomor_seri_barang' => $this->nomor_seri_barang,
        'jumlah_barang' => $this->jumlah_barang,
    ]);

    return redirect()->to('/dashboard');
}


    public function render()
    {
        return view('livewire.accessories.accessoriesupdate');
    }
}
