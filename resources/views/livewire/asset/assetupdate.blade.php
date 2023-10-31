<div>
    <x-baseupdate.layout>
        <div>
            <x-slot name="title">
                <h1 class="text-2xl text-slate-700">Update Asset</h1>
            </x-slot>

            <x-slot name="content">
                <div>
                    <h2 class="mb-2 -mt-3 text-xl">Nama Barang</h2>
                    <input class="block p-2 w-2/3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" wire:model="nama_barang">
                    <div>
                        @error('nama_barang') <span class="eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <h2 class="mt-4 mb-2 text-xl">Harga Barang</h2>
                    <input class="block p-2 w-2/3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="number" wire:model="harga_barang">
                    <div>
                        @error('harga_barang') <span class="eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <h2 class="mt-4 mb-2 text-xl">No Seri Barang</h2>
                    <input class="block w-2/3 p-2 text-gray-900 border-0 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" wire:model="nomor_seri_barang">
                    <div>
                        @error('nomor_seri_barang') <span class="eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <h2 class="mt-4 mb-2 text-xl">Jumlah Barang</h2>
                    <input class="block w-2/3 p-2 text-gray-900 border-0 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="number" wire:model="jumlah_barang">
                    <div>
                        @error('jumlah_barang') <span class="eror">{{ $message }}</span> @enderror
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="p-2 duration-200 rounded-md bg-cyan-400 hover:bg-cyan-600 hover:text-white hover:shadow-lg" wire:click="update">Update</button>
            </x-slot>
        </div>
    </x-baseupdate.layout>
</div>
