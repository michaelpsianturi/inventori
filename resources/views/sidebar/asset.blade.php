@extends('layouts.app')

@section('content')
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <x-navigation />
            <div class="ml-5 mt-7">
                <h1 class="text-2xl">Data Asset</h1>
                <button class="flex p-1 mt-2 bg-blue-400 rounded-md hover:bg-blue-600 text-slate-800 hover:text-white hover:shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Insert Data
                </button>
            </div>
        </div>
    </div>
@endsection