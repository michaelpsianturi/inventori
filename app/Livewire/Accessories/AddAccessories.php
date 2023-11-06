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
    public $accessories_name;

    #[Rule('required', message:'Harga Barang harus di isi')]
    public $accessories_price;

    #[Rule('required', message:'Nomor Seri Barang harus di isi')]
    #[Rule('integer', message:'Nomor Seri Barang Harus di isi dengan format angka')]
    public $accessories_serial_number;

    #[Rule('required', message:'Jumlah Barang tidak boleh kosong')]
    #[Rule('integer', message:'Jumlah Barang tidak boleh berupa huruf')]
    public $accessories_stock;


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
        $this->accessories_name = null;
        $this->accessories_price = null;
        $this->accessories_serial_number = null;
        $this->accessories_stock = null;
    }

    public function savenewData()
    {
        $this->validate();
        accessories::create([
            'accessories_name' => $this->accessories_name,
            'accessories_price' => $this->accessories_price,
            'accessories_serial_number' => $this->accessories_serial_number,
            'accessories_stock' => $this->accessories_stock
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
