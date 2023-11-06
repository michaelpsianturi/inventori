<div>
    <button wire:click="openModal" class="rounded-md bg-white px-5 py-2.5 shadow mt-3 ml-4">Add New Item</button>

    @if($isOpen)
        <x-modal>
            <x-slot name="title">
                <div class="flex justify-between">
                    <h1>{{ __('Add Asset') }}</h1>
                    <button wire:click="closeModal">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </x-slot>

            <x-slot name="content">
                <div class="sm:col-span-4">
                    <h2 for="nama-asset" class="block text-sm font-medium leading-6 text-gray-900">Nama Asset *</h2>
                    <div class="mt-2">
                        <input wire:model="product_name" type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('product_name') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <h2 for="product_price" class="block text-sm font-medium leading-6 text-gray-900">Harga *</h2>
                    <div class="mt-2">
                        <input wire:model="product_price" id="product_price" name="product_price" type="text" autocomplete="product_price" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('product_price') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <h2 for="product_serial_number" class="block text-sm font-medium leading-6 text-gray-900">Nomor Seri Barang *</h2>
                    <div class="mt-2">
                        <input wire:model="product_serial_number" id="product_serial_number" name="product_serial_number" type="text" autocomplete="product_serial_number" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('product_serial_number') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="col-span-4">
                    <h2 for="product_stock" class="block text-sm font-medium leading-6 text-gray-900">Total Barang *</h2>
                    <div class="mt-2">
                        <input wire:model="product_stock" type="text" name="product_stock" id="product_stock" autocomplete="product_stock" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('product_stock') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <button wire:click="saveAsset" type="button" class="rounded-md border border-gray-200 bg-white px-5 py-2.5">{{ __('Save') }}</button>
            </x-slot>
        </x-modal>
    @endif
</div>
