<div>
    <button wire:click="openModal" class="rounded-md bg-white px-5 py-2.5 shadow mt-3 ml-4">Add Asset</button>

    @if($isOpen)
        <x-modal wire:click="closeModal" x-data={}>
            <x-slot name="title" class="modal-content">
                <h1>{{ __('Add Asset') }}</h1>
            </x-slot>

            <x-slot name="content" class="">
                <div class="sm:col-span-4">
                    <h2 for="nama-asset" class="block text-sm font-medium leading-6 text-gray-900">Nama Asset</h2>
                    <div class="mt-2">
                        <input wire:model="nama_barang" type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <h2 for="harga_barang" class="block text-sm font-medium leading-6 text-gray-900">Harga</h2>
                    <div class="mt-2">
                        <input wire:model="harga_barang" id="harga_barang" name="harga_barang" type="text" autocomplete="harga_barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <h2 for="nomor_seri_barang" class="block text-sm font-medium leading-6 text-gray-900">Nomor Seri Barang</h2>
                    <div class="mt-2">
                        <input wire:model="nomor_seri_barang" id="nomor_seri_barang" name="nomor_seri_barang" type="text" autocomplete="nomor_seri_barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="col-span-4">
                    <h2 for="total-barang" class="block text-sm font-medium leading-6 text-gray-900">Total Barang</h2>
                    <div class="mt-2">
                        <input wire:model="jumlah_barang" type="text" name="total-barang" id="total-barang" autocomplete="total-barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <button wire:click="saveAsset" type="button" class="rounded-md border border-gray-200 bg-white px-5 py-2.5">{{ __('Save') }}</button>
            </x-slot>
        </x-modal>
    @endif
</div>
