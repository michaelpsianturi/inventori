<div>
    <x-baseupdate.layout>
        <div>
            <x-slot name="title">
                <h1 class="text-2xl text-slate-700">Detail {{ $assets->product_name }}</h1>
            </x-slot>

            <x-slot name="content">
              <div>
                <ul>
                    <li class="px-4 py-6 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <h1 class="text-sm font-medium leading-6 text-gray-900">User</h1>
                        @isset($assets->datauser->profile_name)
                            <p class="text-sm text-slate-700"> {{ $assets->datauser->profile_name }}</p>
                        @else
                            <p class="text-sm text-slate-700">not owned yet</p>
                        @endisset
                    </li>

                    <li class="px-4 py-6 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <h1 class="text-sm font-medium leading-6 text-gray-900">Product Name</h1>
                        <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $assets->product_name }}</p>
                    </li>

                    <li class="px-4 py-6 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <h1 class="text-sm font-medium leading-6 text-gray-900">Product Price</h1>
                        <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $assets->product_price }}</p>
                    </li>

                    <li class="px-4 py-6 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <h1 class="text-sm font-medium leading-6 text-gray-900">Serial Number</h1>
                        <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $assets->product_serial_number }}</p>
                    </li>

                    <li class="px-4 py-6 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <h1 class="text-sm font-medium leading-6 text-gray-900">Stock</h1>
                        <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $assets->product_stock }}</p>
                    </li>

                    <li class="px-4 py-6 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <h1 class="text-sm font-medium leading-6 text-gray-900">Description</h1>
                        <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $assets->description }}</p>
                    </li>
                </ul>
              </div>
            </x-slot> 

            <x-slot name="footer">
                <div class="text-right" class="grid grid-cols-3">
                    <div>
                        <button wire:click="openModal" class="p-2 bg-teal-200 rounded-md btn btn-danger">Assigned</button>

                        @if ($isOpen)
                            <x-modal>
                                <x-slot name="title">
                                    <div class="flex justify-between">
                                        Assigned To
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" wire:click="closeModal" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </a>

                                    </div>
                                </x-slot>
                                
                                <x-slot name="content">
                                    <label for="assigned_to">
                                        Ditetapkan ke
                                    </label>
                                    <select class="w-48 form-control" id="assigned_to" name="assigned_to">
                                        @foreach ($datausers as $datauser)
                                            <option value="{{ $datauser->id }}">{{ $datauser->profile_name }}</option>
                                        @endforeach
                                    </select>
                                </x-slot>
                                <x-slot name="footer">asdf</x-slot>
                            </x-modal>
                        @endif
                    </div>

                    <a href="/asset/formupdateasset/{{ $assets->id }}">
                        <button class="p-2 bg-yellow-200 rounded-md btn btn-danger">
                            Edit
                        </button>
                    </a>

                    <button wire:click="delete({{ $assets->id }})" class="p-2 bg-blue-200 rounded-md btn btn-danger">
                        Delete
                    </button>
                </div>
            </x-slot>
        </div>
    </x-baseupdate.layout>
</div>
