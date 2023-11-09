<?php

namespace App\Livewire\Asset;

use Livewire\Component;
use App\Models\asset;
use Livewire\Attributes\Rule;

class Assetupdate extends Component
{
    public $id;

    #[Rule('required', message: 'harap di isi namanya')]
    public $product_name;

    #[Rule('required', message: 'harap di isi harganya')]
    #[Rule('min:2', message:'masih kurang minima lagi 3')]
    public $product_price;

    #[Rule('required', message: 'harap di isi nomor serinya')]
    #[Rule('min:3', message:'masih kurang minima lagi 3')]
    public $product_serial_number;

    #[Rule('required', message: 'harap di isijumlahnya')]
    public $product_stock;

    public $description;

    public function mount()
    {
        $this->id = request()->route('id');
        $assets = asset::find($this->id);
        $this->product_name = $assets->product_name;
        $this->product_price = $assets->product_price;
        $this->product_serial_number = $assets->product_serial_number;
        $this->product_stock = $assets->product_stock;
        $this->description = $assets->description;
    }


    public function update()
    {
        $this->validate();
        $asset = Asset::find($this->id);
        $asset->update([
            'product_name' => $this->product_name,
            'product_price' => $this->product_price,
            'product_serial_number' => $this->product_serial_number,
            'product_stock' => $this->product_stock,
            'description' => $this->description
        ]);

        return redirect()->to('/asset');
    }

    public function render()
    {
        return view('livewire.asset.assetupdate');
    }
}
