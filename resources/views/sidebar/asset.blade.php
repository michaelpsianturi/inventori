<x-layouts.app>
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <x-navigation />
            <div class="ml-5 mt-7">
                <h1 class="ml-4 text-2xl">Asset Data</h1>
                @livewire('modal-asset')
                <div class="mt-4">
                    <table class="w-11/12 ml-4 bg-white divide-y rounded-lg table-auto max-w-7xl">
                        <thead>
                            <tr class="grid grid-cols-5 divide-y">
                                <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">Nama Barang</th>
                                <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">Harga</th>
                                <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">Nomor Seri</th>
                                <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">Jumlah</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assets as $asset)
                                <tr class="grid grid-cols-5 bg-white divide-y divide-gray-200">
                                    <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">{{ $asset->nama_barang }}</td>
                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $asset->harga_barang }}</td>
                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $asset->nomor_seri_barang }}</td>
                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $asset->jumlah_barang }}</td>
                                    <td>
                                        <button wire:click="delete({{ $asset->id }})" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                              </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>