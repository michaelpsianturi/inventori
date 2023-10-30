<x-layouts.app>
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <x-navigation />
            <div class="p-2 mx-4 mt-3 bg-white rounded-md shadow-lg ml-60">
                <div class="font-semibold text-gray-900">
                    {{ $title }}
                </div>
                
                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-4">
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