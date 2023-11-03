<x-layouts.app>
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <x-navigation />
            
            <div class="mx-5 mt-5 xl:ml-72 lg:ml-56 md:ml-44 sm:ml-40 ml-36">
                <h1 class="xl:text-2xl">DASHBOARD</h1>
                <div class="mt-4 text-slate-700">
                    <ul class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                        <li class="p-2 ">
                            <div class="text-center">
                                <h1 class="py-4 text-base bg-teal-100 border-b-2 sm:text-sm rounded-t-xl">TOTAL ASSET</h1>
                                <h2 class="py-6 text-base bg-white sm:text-base">3</h2>
                                <div class="p-2 bg-slate-50">
                                    <h3 class="flex text-base text-left">
                                        TABEL ASSET
                                        <a href="/asset" class="ml-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                        <li class="p-2 ">
                            <div class="text-center">
                                <h1 class="py-4 bg-teal-100 border-b-2 rounded-t-xl">TOTAL USER</h1>
                                <h2 class="py-6 bg-white">3</h2>
                                <h3 class="flex p-1 text-left bg-slate-50">
                                    TABEL USER
                                    <a href="/listuser" class="ml-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </a>
                                </h3>
                            </div>
                        </li>
                        <li class="p-2 ">
                            <div class="text-center">
                                <h1 class="py-4 bg-teal-100 border-b-2 rounded-t-xl">TOTAL ACCESSORIES</h1>
                                <h2 class="py-6 bg-white">3</h2>
                                <h3 class="flex p-1 text-left bg-slate-50">
                                    TABEL ACCESSORIES
                                    <a href="/accessories" class="ml-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </a>
                                </h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</x-layouts.app>
