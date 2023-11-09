<div>
    <x-baseupdate.layout>
        <div>
            <x-slot name="title">
                <h1 class="text-2xl text-slate-700">Update Asset</h1>
            </x-slot>

            <x-slot name="content">
              <div>
                <ul>
                    <li>{{ $assets->product_name }}</li>
                    <li>{{ $assets->product_price }}</li>
                    <li>{{ $assets->product_serial_number }}</li>
                    <li>{{ $assets->product_stock }}</li>
                </ul>
              </div>
            </x-slot>

            <x-slot name="footer">
                <button class="p-2 duration-200 rounded-md bg-cyan-400 hover:bg-cyan-600 hover:text-white hover:shadow-lg" wire:click="update">Update</button>
            </x-slot>
        </div>
    </x-baseupdate.layout>
</div>
