<div>
    <x-baseupdate.layout>
        <div>
            <x-slot name="title">
                <h1 class="text-2xl text-slate-700">Detail {{ $datausers->profile_name }}</h1>
            </x-slot>

            <x-slot name="content">
              <div>
                <ul>
                    <li class="px-4 py-6 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <h1 class="text-sm font-medium leading-6 text-gray-900">Name</h1>
                        <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $datausers->profile_name }}</p>
                    </li>

                    <li class="px-4 py-6 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <h1 class="text-sm font-medium leading-6 text-gray-900">Email</h1>
                        <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $datausers->profile_email }}</p>
                    </li>

                    <li class="px-4 py-6 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <h1 class="text-sm font-medium leading-6 text-gray-900">Phone Number</h1>
                        <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $datausers->profile_phone_number }}</p>
                    </li>

                    <li class="px-4 py-6 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <h1 class="text-sm font-medium leading-6 text-gray-900">Address</h1>
                        <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $datausers->profile_address }}</p>
                    </li>
                </ul>
              </div>
            </x-slot> 

            <x-slot name="footer">
                <div class="text-right">
                    <a href="/listuser/formupdateuser/{{ $datausers->id }}">
                        <button class="p-2 bg-yellow-200 rounded-md btn btn-danger">
                            Edit
                        </button>
                    </a>
    
                    <button wire:click="delete({{ $datausers->id }})" class="p-2 bg-blue-200 rounded-md btn btn-danger">
                        Delete
                    </button>
                </div>
            </x-slot>
        </div>
    </x-baseupdate.layout>
</div>
