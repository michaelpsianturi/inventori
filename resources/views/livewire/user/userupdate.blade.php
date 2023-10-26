<div>
    <x-form.baseform>
        <div>
            <x-slot name="title">
                <h2>Update User</h2>
            </x-slot>
            
            <x-slot name="content">
                <input class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" wire:model="nama_pengguna">
                <input class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="email" wire:model="email">
                <input class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="tel" wire:model="phone_number">
                <input class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" wire:model="alamat">
            </x-slot>
            
            <x-slot name="footer">
                <button wire:click='update' class="p-2 bg-gray-300">Save Update</button>
            </x-slot>
        </div>
    </x-form.baseform>
</div>
