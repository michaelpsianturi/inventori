<x-layouts.app>
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <x-navigation />
            <div class="mt-5 ml-24 xl:ml-72 lg:ml-48 md:ml-36 sm:ml-28">
                <div>
                    <h1 class="text-2xl">Asset Data</h1>
                    @livewire('Asset.ModalAsset')
                </div>
                <div class="flow-root mt-8">
                     <div class="overflow-x-auto">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Asset Name</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Price</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Serial Number</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Stock</th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($assets as $asset)
                                            <tr>
                                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">{{ $asset->product_name }}</td>
                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $asset->product_price }}</td>
                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $asset->product_serial_number }}</td>
                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $asset->product_stock }}</td>
                                                <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                                    <a href="/asset/details/{{ $asset->id }}">
                                                        <button class="p-2 bg-teal-200 rounded-md btn btn-danger">
                                                            Details
                                                        </button>
                                                    </a>
            
                                                    <a href="/asset/formupdateasset/{{ $asset->id }}">
                                                        <button class="p-2 bg-yellow-200 rounded-md btn btn-danger">
                                                            Edit
                                                        </button>
                                                    </a>
            
                                                    <button wire:click="delete({{ $asset->id }})" class="p-2 bg-blue-200 rounded-md btn btn-danger">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="p-2 border-t-2">
                                    {{ $assets->links('pagination::simple-tailwind') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

