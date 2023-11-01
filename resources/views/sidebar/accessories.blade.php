<x-layouts.app>
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <x-navigation />
            <div class="ml-64 mt-7">
                <h1 class="text-2xl">Accessories data</h1>
                @livewire('Accessories.AddAccessories')
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
                            @foreach ($Accessories as $Accessories)
                                <tr>
                                    <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-0">{{ $Accessories->nama_barang }}</td>
                                    <td class="px-1 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $Accessories->harga_barang }}</td>
                                    <td class="px-5 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $Accessories->nomor_seri_barang }}</td>
                                    <td class="px-8 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $Accessories->jumlah_barang }}</td>
                                    <td class="relative flex justify-center gap-3 py-4 text-sm font-medium whitespace-nowrap sm:pr-0">
                                        <button wire:click="openDropdown" class="p-2 bg-teal-200 rounded-md btn btn-danger">
                                            Details
                                        </button>
                                        
                                        <a href="/accessories/formupdateaccessories/{{ $Accessories->id }}">
                                            <button class="p-2 bg-yellow-200 rounded-md btn btn-danger">
                                                Edit
                                            </button>
                                        </a>
                                        
                                        <button wire:click="delete({{ $Accessories->id }})" class="p-2 bg-blue-200 rounded-md btn btn-danger">
                                            Delete
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