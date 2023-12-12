<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Asset\Assetlist;
use App\Livewire\Asset\Assetupdate;
use App\Livewire\Asset\DetailAsset;
use App\Livewire\User\Userlist;
use App\Livewire\User\Userupdate;
use App\Livewire\User\Detailuser;
use App\Livewire\Accessories\Accessorieslist;
use App\Livewire\Accessories\Accessoriesupdate;
use App\Livewire\Accessories\DetailAccessories;
use App\Livewire\DataLogs;
use App\Livewire\Dashboard;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');

    Route::get('/asset', Assetlist::class);
    Route::get('/asset/formupdateasset/{id}', Assetupdate::class);
    Route::get('/asset/details/{id}', DetailAsset::class);
    Route::get('/listuser', Userlist::class);
    Route::get('/listuser/formupdateuser/{id}', Userupdate::class);
    Route::get('/listuser/detail/{id}', DetailUser::class);
    Route::get('/accessories', Accessorieslist::class);
    Route::get('/accessories/formupdateaccessories/{id}', Accessoriesupdate::class);
    Route::get('/accessories/detail/{id}', DetailAccessories::class);
    Route::get('/histori_logs', DataLogs::class);
});