<div>
    <button wire:click="$toggle('showModalAsset')" class="rounded-md bg-white px-5 py-2.5 shadow flex">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Add Asset
    </button>
        <!-- Modal -->
    <div
        wire:model="showModalAsset"
        style ="display: {{ $showModalAsset == false ? 'none' : 'block' }}"
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
                <div class="pb-12 border-b border-gray-900/10">
                    <h2 class="text-lg font-semibold leading-7 text-gray-900">Add New Asset</h2>

                    <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <h2 for="nama-asset" class="block text-sm font-medium leading-6 text-gray-900">Nama Asset</h2>
                            <div class="mt-2">
                                <input wire:model="nama_barang" type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <h2 for="harga_barang" class="block text-sm font-medium leading-6 text-gray-900">Harga</h2>
                            <div class="mt-2">
                                <input wire:model="harga_barang" id="harga_barang" name="harga_barang" type="text" autocomplete="harga_barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <h2 for="nomor_seri_barang" class="block text-sm font-medium leading-6 text-gray-900">Nomor Seri Barang</h2>
                            <div class="mt-2">
                                <input wire:model="nomor_seri_barang" id="nomor_seri_barang" name="nomor_seri_barang" type="text" autocomplete="nomor_seri_barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-4">
                            <h2 for="total-barang" class="block text-sm font-medium leading-6 text-gray-900">Total Barang</h2>
                            <div class="mt-2">
                                <input wire:model="jumlah_barang" type="text" name="total-barang" id="total-barang" autocomplete="total-barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buttons -->
                <div class="flex mt-8 space-x-2">
                    <button wire:click="saveAsset" type="button" class="rounded-md border border-gray-200 bg-white px-5 py-2.5">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
