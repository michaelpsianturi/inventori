<x-layouts.app>
    <div class="flex">
        <x-sidebar />
        <div class="w-full ml-60">
            <x-navigation />
            <div class="ml-5 mt-7">
                <h1 class="text-2xl">Accessories data</h1>
                <div class="inline-block min-w-full py-2 mt-4 align-middle bg-white rounded-md sm:px-6 lg:px-8">
                    <table class="w-11/12 mt-4 ml-4 bg-white divide-y rounded-lg table-auto max-w-7xl">
                        <thead>
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Nama Barang</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Harga</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">No Seri</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Jumlah</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <div class="pt-6 mt4 "></div>
                            @foreach ($accessories as $accessories)
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-0">{{ $accessories->nama_barang }}</td>
                                <td class="px-1 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $accessories->harga_barang }}</td>
                                <td class="px-5 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $accessories->nomor_seri_barang }}</td>
                                <td class="px-8 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $accessories->jumlah_barang }}</td>
                                <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-0">
                                    <button wire:click="delete({{ $accessories->id }})" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
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