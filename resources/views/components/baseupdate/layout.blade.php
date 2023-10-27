<x-layouts.app>
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <x-navigation />
            <div class="p-2 mx-4 mt-3 bg-white rounded-md shadow-lg ml-60">
                <h2 class="text-lg font-semibold leading-7 text-gray-900">
                    {{ $title }}
                </h2>
                
                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8">
                    {{ $content }}
                </div>
                <!-- Buttons -->
                <div class="flex mt-8 space-x-2">
                    {{ $footer }}
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>