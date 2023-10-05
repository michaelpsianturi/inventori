<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;

class AssetController extends Controller
{
    public $assets;

    public function mount()
    {
        $this->assets = Asset::all();
    }

    public function render()
    {
        $assets = Asset::all();
        dd($assets);
        return view('sidebar.asset', [
            'assets' => $assets,
        ]);
    }
}

