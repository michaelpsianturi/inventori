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
    public $product_name = null;

    #[Rule('required', message: 'harap di isi harganya')]
    #[Rule('min:3', message:'masih kurang minimal lagi 3')]
    public $product_price = null;

    #[Rule('required', message: 'harap di isi nomor serinya')]
    #[Rule('min:3', message:'masih kurang minimal lagi 3')]
    public $product_serial_number = null;

    #[Rule('required', message: 'harap di isijumlahnya')]
    #[Rule('min:1', message:'harap di isi')]
    public $product_stock = '';

    public function openModal()
    {
        $this->isOpen = true;
        // dd($this->isOpen);
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
            'product_name' => $this->product_name,
            'product_price' => $this->product_price,
            'product_serial_number' => $this->product_serial_number,
            'product_stock' => $this->product_stock,
        ]);

        $this->resetFields();
        $this->isOpen = false;
        return redirect()->to('/asset');
        dd($this->saveAsset);
    }


    private function resetFields()
    {
        $this->product_name = '';
        $this->product_price = '';
        $this->product_serial_number = '';
        $this->product_stock = '';
    }

    public function render()
    {
        return view('livewire.asset.modal-asset');
    }
}