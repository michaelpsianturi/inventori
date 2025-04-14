<?php

namespace App\Livewire\Accessories;

use App\Models\Accessories;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Accessoriesupdate extends Component
{
    public $id;

    #[Rule('required')]
    #[Rule('min:2')]
    public $accessories_name;

    #[Rule('required')]
    public $accessories_price;

    #[Rule('required')]
    #[Rule('integer')]
    public $accessories_serial_number;

    #[Rule('required')]
    #[Rule('integer')]
    public $accessories_stock;

    public function mount()
    {
        $this->id = request()->route('id');
        $Accessories = accessories::find($this->id);
        $this->accessories_name = $Accessories->accessories_name;
        $this->accessories_price = $Accessories->accessories_price;
        $this->accessories_serial_number = $Accessories->accessories_serial_number;
        $this->accessories_stock = $Accessories->accessories_stock;
    }

    public function update()
    {
        $this->validate();
        $Accessories = Accessories::find($this->id);
        $Accessories->update([
            'accessories_name' => $this->accessories_name,
            'accessories_price' => $this->accessories_price,
            'accessories_serial_number' => $this->accessories_serial_number,
            'accessories_stock' => $this->accessories_stock,
        ]);

        return redirect()->to('/accessories');
    }

    public function render()
    {
        return view('livewire.accessories.accessoriesupdate');
    }
}
