<div>
    <x-form.baseform>
        <div class="">
            <x-slot name="title">
                <h2>Update Asset</h2>
            </x-slot>
            
            <x-slot name="content">
                <input class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" wire:model="nama_barang">
                <input class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="number" wire:model="harga_barang">
                <input class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" wire:model="nomor_seri_barang">
                <input class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="number" wire:model="jumlah_barang">
                
                <button wire:click="update">Update</button>
            </x-slot>   
            
            <x-slot name="footer">
            </x-slot>
        </div>
    </x-form.baseform>
</div>
