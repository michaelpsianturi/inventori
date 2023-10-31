<?php

namespace App\Livewire\Accessories;

use Livewire\Component;
use App\Models\accessories;
use Livewire\Attributes\Rule;

class Accessoriesupdate extends Component
{
    public $id;

    #[Rule('required', message:'Nama Barang harus di isi')]
    #[Rule('min:2', message:'Nama Barang minimal 2 karakter')]
    public $nama_barang;

    #[Rule('required', message:'Harga Barang harus di isi')]
    public $harga_barang;

    #[Rule('required', message:'Nomor Seri Barang harus di isi')]
    #[Rule('integer', message:'Nomor Seri Barang Harus di isi dengan format angka')]
    public $nomor_seri_barang;

    #[Rule('required', message:'Jumlah Barang tidak boleh kosong')]
    #[Rule('integer', message:'Jumlah Barang tidak boleh berupa huruf')]
    public $jumlah_barang;

    public function mount()
    {
        $this->id = request()->route('id');
        $accessories = Accessories::find($this->id);
        $this->nama_barang = $accessories->nama_barang;
        $this->harga_barang = $accessories->harga_barang;
        $this->nomor_seri_barang = $accessories->nomor_seri_barang;
        $this->jumlah_barang = $accessories->jumlah_barang;
    }

    public function update()
    {
        $this->validate();
        $accessories = Accessories::find($this->id);
        $accessories->update([
            'nama_barang' => $this->nama_barang,
            'harga_barang' => $this->harga_barang,
            'nomor_seri_barang' => $this->nomor_seri_barang,
            'jumlah_barang' => $this->jumlah_barang,
        ]);

        return redirect()->to('/accessories');
    }


    public function render()
    {
        return view('livewire.accessories.accessoriesupdate');
    }
}
