<div>
    <x-baseupdate.layout>
        <div>
            <x-slot name="title">
                <h1 class="text-2xl text-slate-700">Detail {{ $assets->product_name }}</h1>
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
            </x-slot>
        </div>
    </x-baseupdate.layout>
</div>
