<x-layouts.app>
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <x-navigation />
            <div class="ml-5 mt-7">
                <h1 class="text-2xl">Data Asset</h1>
                @livewire('modal-livewire')
                <div class="mt-4">
                    <table class="w-11/12 ml-4 bg-white divide-y rounded-lg table-auto max-w-7xl">
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
                                <tr class="grid grid-cols-4 bg-white divide-y divide-gray-200">
                                    <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">{{ $asset->nama_barang }}</td>
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
</x-layouts.app>