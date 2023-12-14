<x-layouts.app>
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <x-navigation />
            <div class="mx-5 mt-5 ml-24 xl:ml-72 lg:ml-48 md:ml-36 sm:ml-28">
                <h1 class="lg:text-2xl md:text-xl sm:text-lg">
                    {{ __('Dashboard') }}
                </h1>
                <div class="mt-4 text-slate-700">
                    <ul class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                        <li class="p-2 ">
                            <div class="text-center">
                                <h1 class="py-4 text-base bg-teal-100 border-b-2 md:text-lg sm:text-sm rounded-t-xl">TOTAL ASSET</h1>
                                <h2 class="py-6 text-base bg-white sm:text-base">{{ $assets }}</h2>
                                <div class="p-2 bg-slate-50">
                                    <h3 class="w-20 text-left md:text-base sm:text-sm">
                                        <a class="flex" href="/asset">
                                            ASSET
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>

                        <li class="p-2 ">
                            <div class="text-center">
                                <h1 class="py-4 text-base bg-teal-100 border-b-2 md:text-lg sm:text-sm rounded-t-xl">TOTAL USER</h1>
                                <h2 class="py-6 bg-white">{{ $datausers }}</h2>
                                <div class="p-2 bg-slate-50">
                                    <h3 class="w-20 text-left md:text-base sm:text-sm">
                                        <a href="/listuser" class="flex">
                                            USER
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>

                        <li class="p-2 ">   
                            <div class="text-center">
                                <h1 class="py-4 text-base bg-teal-100 border-b-2 md:text-base sm:text-sm rounded-t-xl">TOTAL ACCESSORIES</h1>
                                <h2 class="py-6 bg-white">{{ $Accessories }}</h2>
                                <div class="p-2 bg-slate-50">
                                    <h3 class="w-24 text-left md:text-base sm:text-sm">
                                        <a href="/accessories" class="flex">
                                            ACCESSORIES
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</x-layouts.app>
