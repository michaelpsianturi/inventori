<?php

namespace App\Http\Controllers;

use App\Models\Asset;

class AssetController extends Controller
{
    public $assets;

    public function mount()
    {
        $this->assets = Asset::all();
    }

    public function delete($id)
{
    $asset = Asset::where('id', $id)->first();

    if ($asset) {
        $asset->delete();

        $this->assets = Asset::all();
        $this->dispatch('alert', [
            'type' => 'success',
            'message' => 'Data berhasil dihapus.',
        ]);
    }
}


    public function render()
    {
        $assets = Asset::all();
        return view('sidebar.asset', [
            'assets' => $assets,
        ]);
    }
}

