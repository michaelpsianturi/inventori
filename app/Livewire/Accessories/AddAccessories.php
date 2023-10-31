<?php

namespace App\Livewire\Accessories;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\accessories;

class AddAccessories extends Component
{
    public $isOpen = false;

    #[Rule('required', message:'Nama Barang harus di isi')]
    #[Rule('min:2', message:'Nama Barang minimal 2 karakter')]
    public $nama_barang;

    #[Rule('required', message:'Harga Barang harus di isi')]
    #[Rule('integer', message:'Harga Barang Harus di isi dengan format angka')]
    public $harga_barang;

    #[Rule('required', message:'Nomor Seri Barang harus di isi')]
    #[Rule('integer', message:'Nomor Seri Barang Harus di isi dengan format angka')]
    public $nomor_seri_barang;

    #[Rule('required', message:'Jumlah Barang tidak boleh kosong')]
    #[Rule('integer', message:'Jumlah Barang tidak boleh berupa huruf')]
    public $jumlah_barang;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetFields()
    {
        $this->nama_barang = null;
        $this->harga_barang = null;
        $this->nomor_seri_barang = null;
        $this->jumlah_barang = null;
    }

    public function savenewData()
    {
        $this->validate();
        accessories::create([
            'nama_barang' => $this->nama_barang,
            'harga_barang' => $this->harga_barang,
            'nomor_seri_barang' => $this->nomor_seri_barang,
            'jumlah_barang' => $this->jumlah_barang
        ]);

        $this->resetFields();
        $this->isOpen = false;
        return redirect()->to('/accessories');
    }

    public function render()
    {
        return view('livewire.accessories.add-accessories');
    }
}
