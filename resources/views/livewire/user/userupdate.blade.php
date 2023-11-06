<div>
    <x-baseupdate.layout>
        <div>
            <x-slot name="title">
                <h2 class="text-2xl text-slate-700">Update User</h2>
            </x-slot>
            
            <x-slot name="content">
                <div>
                    <h2 class="mb-2 -mt-3 text-xl">Nama Pengguna</h2>
                    <input wire:model="profile_name" class="block p-2 w-2/3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text">
                    <div>
                        @error('profile_name') <span class="eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <h2 class="mt-4 mb-2 text-xl">Email</h2>
                    <input wire:model="profile_email" class="block p-2 w-2/3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="email">
                    <div>
                        @error('profile_email') <span class="eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <h2 class="mt-4 mb-2 text-xl">No Telp</h2>
                    <input wire:model="profile_phone_number" class="block p-2 w-2/3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text">
                    <div>
                        @error('profile_phone_number') <span class="eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <h2 class="mt-4 mb-2 text-xl">Alamat</h2>
                    <input wire:model="profile_address" class="block p-2 w-2/3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text">
                    <div>
                        @error('profile_address') <span class="eror">{{ $message }}</span> @enderror
                    </div>
                </div>
            </x-slot>
            
            <x-slot name="footer">
                <button wire:click='update' class="p-2 bg-gray-300">Save Update</button>
            </x-slot>
        </div>
    </x-baseupdate.layout>
</div>
