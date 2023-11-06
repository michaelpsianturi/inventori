<div>
    <button wire:click="openModal" class="rounded-md bg-white px-5 py-2.5 shadow mt-3 ml-4">Add New User</button>

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
                    <h2 for="profile_name" class="block text-sm font-medium leading-6 text-gray-900">Nama Pengguna *</h2>
                    <div class="mt-2">
                        <input wire:model="profile_name" type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('profile_name') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>
                
                <div class="sm:col-span-4">
                    <h2 for="profile_email" class="block text-sm font-medium leading-6 text-gray-900">Email *</h2>
                    <div class="mt-2">
                        <input wire:model="profile_email" id="profile_email" name="profile_email" type="text" autocomplete="profile_email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('profile_email') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <h2 for="profile_phone_number" class="block text-sm font-medium leading-6 text-gray-900">Nomor Telepon *</h2>
                    <div class="mt-2">
                        <input wire:model="profile_phone_number" id="profile_phone_number" name="profile_phone_number" type="text" autocomplete="profile_phone_number" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('profile_phone_number') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-span-4">
                    <h2 for="profile_address" class="block text-sm font-medium leading-6 text-gray-900">Alamat Pengguna *</h2>
                    <div class="mt-2">
                        <input wire:model="profile_address" type="text" name="profile_address" id="profile_address" autocomplete="profile_address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                        @error('profile_address') <span class="text-red-500 eror">{{ $message }}</span> @enderror
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <button wire:click="saveUser" type="button" class="rounded-md border border-gray-200 bg-white px-5 py-2.5">{{ __('Save') }}</button>
            </x-slot>
        </x-modal>
    @endif
</div>
