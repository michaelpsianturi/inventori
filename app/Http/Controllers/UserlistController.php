<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserlistController extends Controller
{
    public function index()
    {
        return view('userprofile/listuser');
    }
}
