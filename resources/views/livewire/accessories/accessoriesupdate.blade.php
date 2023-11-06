<div>
    <x-baseupdate.layout>
        <div>
            <x-slot name="title">
                <h2>Update Data</h2>
            </x-slot>

            <x-slot name="content">
                <div>
                    <h2>Nama Barang</h2>
                    <input wire:model="accessories_name" class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text">
                    @error('accessories_name') <span class="eror">{{ $message }}</span> @enderror
                </div>

                <div>
                    <h2>Harga Barang</h2>
                    <input wire:model="accessories_price" class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="number">
                    @error('accessories_price') <span class="eror">{{ $message }}</span> @enderror
                </div>

                <div>
                    <h2>Nomor Seri Barang</h2>
                    <input wire:model="accessories_serial_number" class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text">
                    @error('accessories_serial_number') <span class="eror">{{ $message }}</span> @enderror
                </div>

                <div>
                    <h2>Jumlah Barang</h2>
                    <input wire:model="accessories_stock" class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="number">
                    @error('accessories_stock') <span class="eror">{{ $message }}</span> @enderror
                </div>
            </x-slot>

            <x-slot name="footer">
                <button wire:click="update">Update</button>
            </x-slot>
        </div>
    </x-baseupdate.layout>
</div>
