
<div x-data="{ open: false }" class="w-40">
    <!-- Trigger -->
    <span x-on:click="open = true">
        <button type="button" class="rounded-md bg-white px-5 py-2.5 shadow flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Add Asset
        </button>
    </span>

    <!-- Modal -->
    <div
        x-show="open"
        style="display: none"
        x-on:keydown.escape.prevent.stop="open = false"
        role="dialog"
        aria-modal="true"
        x-id="['modal-title']"
        :aria-labelledby="$id('modal-title')"
        class="fixed inset-0 z-10 overflow-y-auto"
    >
        <!-- Overlay -->
        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

        <!-- Panel -->
        <div
            x-show="open" x-transition
            x-on:click="open = false"
            class="relative flex items-center justify-center min-h-screen p-4"
        >
            <div
                x-on:click.stop
                x-trap.noscroll.inert="open"
                class="relative w-full max-w-2xl p-12 overflow-y-auto bg-white shadow-lg rounded-xl"
            >
                <!-- Title -->
                <h2 class="text-3xl font-bold" :id="$id('modal-title')">Add Asset</h2>

                <!-- Content -->
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Nama Asset</label>
                    <div class="mt-2">
                      <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2" placeholder="Laptop,PC,Monitor">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Harga Asset</label>
                    <div class="mt-2">
                      <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-teal-600 sm:text-sm sm:leading-6 pl-2">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">No Seri</label>
                    <div class="mt-2">
                      <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex mt-8 space-x-2">
                    <button type="button" x-on:click="open = false" class="rounded-md border border-gray-200 bg-white px-5 py-2.5">
                        Confirm
                    </button>

                    <button type="button" x-on:click="open = false" class="rounded-md border border-gray-200 bg-white px-5 py-2.5">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>