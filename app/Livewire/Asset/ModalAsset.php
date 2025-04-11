<?php

namespace App\Livewire\Asset;

use App\Models\asset;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ModalAsset extends Component
{
    public $isOpen = false;

    #[Rule('required')]
    #[Rule('min:2')]
    public $product_name = null;

    #[Rule('required')]
    #[Rule('min:3')]
    public $product_price = null;

    #[Rule('required')]
    #[Rule('min:3')]
    public $product_serial_number = null;

    #[Rule('required')]
    #[Rule('min:1')]
    public $product_stock = '';

    public $description = '';

    public $datauser_id = '';

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

        $newAsset = asset::create([
            'product_name' => $this->product_name,
            'product_price' => $this->product_price,
            'product_serial_number' => $this->product_serial_number,
            'product_stock' => $this->product_stock,
            'description' => $this->description,
        ]);

        $newAsset->historilogs()->create([
            'name' => $this->product_name,
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
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.asset.modal-asset');
    }
}
