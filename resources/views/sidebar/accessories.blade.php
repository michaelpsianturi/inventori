<x-layouts.app>
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <x-navigation />
            <div class="mx-5 mt-5 ml-24 xl:ml-72 lg:ml-48 md:ml-36 sm:ml-28">
                <div>
                    <h1 class="text-2xl">Accessories Data</h1>
                    @livewire('Accessories.AddAccessories')
                </div>
                <div class="flow-root mt-8">
                     <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Nama Barang</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Harga</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">No Seri</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Jumlah</th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($Accessories as $accessories)
                                        <tr>
                                            <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">{{ $accessories->accessories_name }}</td>
                                            <td class="px-1 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $accessories->accessories_price }}</td>
                                            <td class="px-5 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $accessories->accessories_serial_number }}</td>
                                            <td class="px-8 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $accessories->accessories_stock }}</td>
                                            <td class="relative flex justify-center gap-3 py-4 text-sm font-medium whitespace-nowrap sm:pr-0">
                                                <a href="/accessories/detail/{{ $accessories->id }}">
                                                    <button wire:click="openDropdown" class="p-2 bg-teal-200 rounded-md btn btn-danger">
                                                        Details
                                                    </button>
                                                </a>
                                                
                                                <a href="/accessories/formupdateaccessories/{{ $accessories->id }}">
                                                    <button class="p-2 bg-yellow-200 rounded-md btn btn-danger">
                                                        Edit
                                                    </button>
                                                </a>
                                                
                                                <button wire:click="delete({{ $accessories->id }})" class="p-2 bg-blue-200 rounded-md btn btn-danger">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="p-2 border-t-2">
                                    {{ $Accessories->links('pagination::simple-tailwind') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

