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
    public $accessories_name;

    #[Rule('required', message:'Harga Barang harus di isi')]
    public $accessories_price;

    #[Rule('required', message:'Nomor Seri Barang harus di isi')]
    #[Rule('integer', message:'Nomor Seri Barang Harus di isi dengan format angka')]
    public $accessories_serial_number;

    #[Rule('required', message:'Jumlah Barang tidak boleh kosong')]
    #[Rule('integer', message:'Jumlah Barang tidak boleh berupa huruf')]
    public $accessories_stock;

    public function mount()
    {
        $this->id = request()->route('id');
        $accessories = Accessories::find($this->id);
        $this->accessories_name = $accessories->accessories_name;
        $this->accessories_price = $accessories->accessories_price;
        $this->accessories_serial_number = $accessories->accessories_serial_number;
        $this->accessories_stock = $accessories->accessories_stock;
    }

    public function update()
    {
        $this->validate();
        $accessories = Accessories::find($this->id);
        $accessories->update([
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
