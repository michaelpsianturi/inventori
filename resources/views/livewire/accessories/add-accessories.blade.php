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
                    <h2 for="nama_barang" class="block text-sm font-medium leading-6 text-gray-900">Nama Barang*</h2>
                    <div class="mt-2">
                        <input wire:model="nama_barang" type="text" name="nama_barang" id="nama_barang" autocomplete="nama_barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('nama_barang') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <h2 for="harga_barang" class="block text-sm font-medium leading-6 text-gray-900">Harga Barang*</h2>
                    <div class="mt-2">
                        <input wire:model="harga_barang" id="harga_barang" name="harga_barang" type="text" autocomplete="harga_barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('harga_barang') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <h2 for="nomor_seri_barang" class="block text-sm font-medium leading-6 text-gray-900">Nomor Seri Barang*</h2>
                    <div class="mt-2">
                        <input wire:model="nomor_seri_barang" id="nomor_seri_barang" name="nomor_seri_barang" type="text" autocomplete="nomor_seri_barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('nomor_seri_barang') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="col-span-4">
                    <h2 for="jumlah_barang" class="block text-sm font-medium leading-6 text-gray-900">Jumlah Barang*</h2>
                    <div class="mt-2">
                        <input wire:model="jumlah_barang" type="text" name="jumlah_barang" id="jumlah_barang" autocomplete="jumlah_barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('jumlah_barang') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <button wire:click="savenewData" type="button" class="rounded-md border border-gray-200 bg-white px-5 py-2.5">{{ __('Save') }}</button>
            </x-slot>

        </x-modal>
    @endif
</div>
