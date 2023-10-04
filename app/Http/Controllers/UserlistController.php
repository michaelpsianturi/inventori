<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datauser;

class UserlistController extends Controller
{

    public $profile;

    public function mount()
    {
        $this->profile = datauser::all();
    }

    public function render()
    {
        $profile = datauser::all();
        return view('sidebar/listuser', [
            'profile' => $profile,
        ]);
    }
}
