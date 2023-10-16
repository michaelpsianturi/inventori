<div x-data="{ open: false }" class="flex justify-center">
    <!-- Trigger -->
    <span x-on:click="open = true">
        <button type="button" class="rounded-md bg-white px-5 py-2.5 shadow">
            Create New
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
                <div class="text-3xl font-bold" :id="$id('modal-title')">
                    {{ $title }}
                </div>

                <!-- Content -->
                <div class="mt-2 text-gray-600">
                    {{ $content }}
                </div>

                <!-- Buttons -->
                <div class="flex mt-8 space-x-2">
                    <button type="button" x-on:click="open = false" class="rounded-md border border-gray-200 bg-white px-5 py-2.5">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
