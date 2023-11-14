<div class="fixed inset-0 z-10 overflow-y-auto">
    <div class="fixed inset-0 bg-black bg-opacity-50">
        <div class="relative flex items-center justify-center min-h-screen p-4">
            <div class="relative w-full max-w-2xl p-12 overflow-y-auto bg-white shadow-lg rounded-xl">
                <h2 class="text-lg font-semibold leading-7 text-gray-900">
                    {{ $title }}
                </h2>
                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{ $content }}
                </div>
                <!-- Buttons -->
                <div class="flex mt-8 space-x-2">
                    {{ $footer }}
                </div>
            </div>
        </div>
    </div>
</div>