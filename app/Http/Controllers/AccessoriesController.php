<?php

namespace App\Http\Controllers;

use App\Models\accessories;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{

    public $accessories;

    public function mount()
    {
        $this->accessories = accessories::all();
    }

    public function show ()
    {
        $accessories = accessories::all();
        return view('sidebar/accessories', [
            'accessories' => $accessories,
        ]);
    }
}