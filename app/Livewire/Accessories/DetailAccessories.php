<?php

namespace App\Livewire\Accessories;

use App\Models\accessories;
use App\Models\datauser;
use Livewire\Component;

class DetailAccessories extends Component
{
    public $Accessories;

    public $datausers;

    public function delete($id)
    {
        $Accessories = accessories::where('id', $id)->first();
        if ($Accessories) {
            $Accessories->delete($id);

            return redirect()->to('/accessories');
        }
    }

    public function mount()
    {
        $this->Accessories = accessories::with('datauser')->find(request()->route('id'));

        $this->datausers = datauser::all();
    }

    public function render()
    {
        return view('livewire.accessories.detail-accessories', [
            'Accessories' => $this->Accessories,
        ]);
    }
}
