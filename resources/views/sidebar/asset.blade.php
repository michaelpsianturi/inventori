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
                <div class="mt-4">
                    <table class="w-full ml-4 bg-white divide-y rounded-lg table-auto max-w-7xl">
                        <thead>
                          <tr class="grid grid-cols-4">
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">Nama Barang</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">Harga</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">Nomor Seri</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">Jumlah</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($assets as $asset)
                            <tr class="grid grid-cols-4 divide-y">
                              <td class="py-4 pl-4 pr-3 text-sm font-medium whitespace-nowrap text-gray-90">{{ $asset->nama_barang }}</td>
                              <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $asset->harga_barang }}</td>
                              <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $asset->nomor_seri_barang }}</td>
                              <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $asset->jumlah_barang }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      
                </div>
            </div>
        </div>
    </div>

@endsection