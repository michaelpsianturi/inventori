<?php

namespace App\Livewire\Asset;

use Livewire\Component;
use App\Models\asset;
use Livewire\Attributes\Rule;

class ModalAsset extends Component
{
    public $isOpen = false;
    #[Rule('required', message: 'harap di isi namanya')]
    #[Rule('min:2', message:'masih kurang minimal lagi 3')]
    public $nama_barang = null;
    #[Rule('required', message: 'harap di isi harganya')]
    #[Rule('min:3', message:'masih kurang minimal lagi 3')]
    public $harga_barang = null;
    #[Rule('required', message: 'harap di isi nomor serinya')]
    #[Rule('min:3', message:'masih kurang minimal lagi 3')]
    public $nomor_seri_barang = null;
    #[Rule('required', message: 'harap di isijumlahnya')]
    #[Rule('min:1', message:'harap di isi')]
    public $jumlah_barang = '';

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
        return redirect()->to('/asset');
    }

    public function saveAsset()
    {
        $this->validate();

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
        return view('livewire.asset.modal-asset');
    }
}