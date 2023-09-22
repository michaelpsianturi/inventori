<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function show ()
    {
        return view('sidebar/asset');
    }
}
