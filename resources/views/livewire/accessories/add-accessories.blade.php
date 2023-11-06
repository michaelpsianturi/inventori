<div>
    <button wire:click="openModal" class="rounded-md bg-white px-5 py-2.5 shadow mt-3 ml-4">Add New Item</button>

    @if ($isOpen)
        <x-modal>
            <x-slot name="title">
                <div class="flex justify-between">
                    <h1>{{ __('Add User') }}</h1>
                    <button wire:click="closeModal">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </x-slot>

            <x-slot name="content">
                <div class="sm:col-span-4">
                    <h2 for="accessories_name" class="block text-sm font-medium leading-6 text-gray-900">Nama Barang*</h2>
                    <div class="mt-2">
                        <input wire:model="accessories_name" type="text" name="accessories_name" id="accessories_name" autocomplete="accessories_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('accessories_name') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <h2 for="accessories_price" class="block text-sm font-medium leading-6 text-gray-900">Harga Barang*</h2>
                    <div class="mt-2">
                        <input wire:model="accessories_price" id="accessories_price" name="accessories_price" type="text" autocomplete="accessories_price" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('accessories_price') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <h2 for="accessories_serial_number" class="block text-sm font-medium leading-6 text-gray-900">Nomor Seri Barang*</h2>
                    <div class="mt-2">
                        <input wire:model="accessories_serial_number" id="accessories_serial_number" name="accessories_serial_number" type="text" autocomplete="accessories_serial_number" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('accessories_serial_number') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="col-span-4">
                    <h2 for="accessories_stock" class="block text-sm font-medium leading-6 text-gray-900">Jumlah Barang*</h2>
                    <div class="mt-2">
                        <input wire:model="accessories_stock" type="text" name="accessories_stock" id="accessories_stock" autocomplete="accessories_stock" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('accessories_stock') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <button wire:click="savenewData" type="button" class="rounded-md border border-gray-200 bg-white px-5 py-2.5">{{ __('Save') }}</button>
            </x-slot>

        </x-modal>
    @endif
</div>
