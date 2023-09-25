@extends('layouts.app')

@section('content')
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <x-navigation />
            
            <div class="mt-5 ml-5">
                <h1 class="text-2xl">DASHBOARD</h1>
            </div>
        </div>
    </div>
@endsection