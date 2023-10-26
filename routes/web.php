<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Asset\Assetlist;
use App\Livewire\Asset\Assetupdate;
use App\Livewire\User\Userlist;
use App\Livewire\User\Userupdate;
use App\Livewire\Accessories\Accessorieslist;
use App\Livewire\Accessories\Accessoriesupdate;
use App\Livewire\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asset', Assetlist::class);
Route::get('/asset/formupdateasset/{id}', Assetupdate::class);
Route::get('/listuser', Userlist::class);
Route::get('/listuser/formupdateuser/{id}', Userupdate::class);
Route::get('/accessories', Accessorieslist::class);
Route::get('/accessories/formupdateaccessories/{id}',Accessoriesupdate::class);
Route::get('/dashboard', Dashboard::class);