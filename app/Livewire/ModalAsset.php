<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\asset;


class ModalAsset extends Component
{
    public $isOpen = false;
    public $nama_barang = null;
    public $harga_barang = null;
    public $nomor_seri_barang = null;
    public $jumlah_barang = null;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->resetFields();
        $this->isOpen = false;
    }

    public function saveAsset()
    {
        $this->validate([
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'nomor_seri_barang' => 'required',
            'jumlah_barang' => 'required|numeric',
        ]);

        asset::create([
            'nama_barang' => $this->nama_barang,
            'harga_barang' => $this->harga_barang,
            'nomor_seri_barang' => $this->nomor_seri_barang,
            'jumlah_barang' => $this->jumlah_barang,
        ]);

        $this->resetFields();
        $this->isOpen = false;
        return redirect()->to('/asset');
    }


    private function resetFields()
    {
        $this->nama_barang = '';
        $this->harga_barang = '';
        $this->nomor_seri_barang = '';
        $this->jumlah_barang = '';
    }

    public function render()
    {
        return view('livewire.modal-asset');
    }
}