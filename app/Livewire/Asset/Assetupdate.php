<?php

namespace App\Livewire\Asset;

use Livewire\Component;
use App\Models\asset;
use App\Models\datauser;
use Livewire\Attributes\Rule;

class Assetupdate extends Component
{
    public $id;
    public $selectedDatauserId;
    public $datausers;
    public $description;

    #[Rule('required')]
    #[Rule('min:2')]
    public $product_name;

    #[Rule('required')]
    #[Rule('min:3')]
    public $product_price;

    #[Rule('required')]
    #[Rule('min:3')]
    public $product_serial_number;

    #[Rule('required')]
    #[Rule('min:1')]
    public $product_stock;

    public function mount()
    {
        $this->id = request()->route('id');
        $this->datausers = datauser::all();
        $assets = asset::find($this->id);
        $this->product_name = $assets->product_name;
        $this->product_price = $assets->product_price;
        $this->product_serial_number = $assets->product_serial_number;
        $this->product_stock = $assets->product_stock;
        $this->description = $assets->description;
        $this->selectedDatauserId = $assets->datauser_id;
    }

    public function update()
    {
        $this->validate();
        $asset = asset::find($this->id);
        $asset->update([
            'product_name' => $this->product_name,
            'product_price' => $this->product_price,
            'product_serial_number' => $this->product_serial_number,
            'product_stock' => $this->product_stock,
            'description' => $this->description,
            'datauser_id' => $this->selectedDatauserId
        ]);

        return redirect()->to('/asset');
    }

    public function render()
    {
        return view('livewire.asset.assetupdate');
    }
}
