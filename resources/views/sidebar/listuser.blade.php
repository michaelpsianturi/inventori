<x-layouts.app>
    <div class="flex">
        <x-sidebar />
        <div class="w-full ml-60">
            <x-navigation />
            <div class="ml-5 mt-7">
                <h1 class="text-2xl">List User</h1>
                <table class="w-11/12 mt-4 ml-4 bg-white divide-y rounded-lg table-auto max-w-7xl">
                    <thead>
                        <tr class="grid grid-cols-4 gap-2">
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">Nama</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">Email</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">No.Telp</th>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profile as $profile)
                            <tr class="grid grid-cols-4 bg-white divide-y divide-gray-200">
                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 border-b sm:pl-6">{{ $profile->nama_pengguna }}</td>
                                <td class="py-4 text-sm text-gray-500 ">{{ $profile->email }}</td>
                                <td class="py-4 text-sm text-gray-500 ">{{ $profile->phone_number }}</td>
                                <td class="py-4 pr-6 -ml-20 text-sm text-gray-500 ">{{ $profile->alamat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-layouts.app>