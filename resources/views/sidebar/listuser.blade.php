<x-layouts.app>
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <x-navigation />
            <div class="mx-5 mt-5 ml-24 xl:ml-72 lg:ml-48 md:ml-36 sm:ml-28">
                <div>
                    <h1 class="text-2xl">List User</h1>
                    @livewire('User.Modaluser')
                </div>
                <div class="flow-root mt-8">
                    <div class="overflow-x-auto">
                       <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                           <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                               <table class="min-w-full divide-y divide-gray-300">
                                   <thead class="bg-gray-50">
                                       <tr>
                                           <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                                           <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                                           <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">No.Telp</th>
                                           <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6"></th>
                                       </tr>
                                   </thead>
                                   <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($datausers as $datauser)
                                           <tr>
                                               <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">{{ $datauser->profile_name }}</td>
                                               <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $datauser->profile_email }}</td>
                                               <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $datauser->profile_phone_number }}</td>
                                               <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                                    <a href="/listuser/detail/{{ $datauser->id }}">
                                                       <button class="p-2 bg-teal-200 rounded-md btn btn-danger">
                                                           Details
                                                       </button>
                                                   </a>
           
                                                   <a href="/listuser/formupdateuser/{{ $datauser->id }}">
                                                       <button class="p-2 bg-yellow-200 rounded-md btn btn-danger">
                                                           Edit
                                                       </button>
                                                   </a>
           
                                                   <button wire:click="delete({{ $datauser->id }})" class="p-2 bg-blue-200 rounded-md btn btn-danger">
                                                       Delete
                                                   </button>
                                               </td>
                                           </tr>
                                       @endforeach
                                   </tbody>
                               </table>
                               <div class="p-2 border-t-2">
                                    {{ $datausers->links('pagination::simple-tailwind') }}
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>

    </div>
</x-layouts.app>