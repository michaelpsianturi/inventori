<div>
    <x-baseupdate.layout>
        <div>
            <x-slot name="title">
                <h1 class="text-2xl text-slate-700">Detail {{ $assets->product_name }}</h1>
            </x-slot>

            <x-slot name="content">
              <div>
                <ul>
                    <li>{{ $assets->product_price }}</li>
                    <li>{{ $assets->product_serial_number }}</li>
                    <li>{{ $assets->product_stock }}</li>

                    <li class="px-4 py-6 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <h1 class="text-sm font-medium leading-6 text-gray-900">Product Name</h1>
                        <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $assets->product_name }}</p>
                    </li>
                      <div class="px-4 py-6 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Application for</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Backend Developer</dd>
                      </div>
                      <div class="px-4 py-6 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Email address</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">margotfoster@example.com</dd>
                      </div>
                      <div class="px-4 py-6 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Salary expectation</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">$120,000</dd>
                      </div>
                      <div class="px-4 py-6 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-3">
                        <dt class="text-sm font-medium leading-6 text-gray-900">About</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                          Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur
                          qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud
                          pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                        </dd>
                      </div>
                </ul>
              </div>
            </x-slot> 

            <x-slot name="footer">
            </x-slot>
        </div>
    </x-baseupdate.layout>
</div>
