<div class="relative z-20">
    <header class="fixed top-0 left-0 right-0 mx-auto bg-white border-b my-auto border-slate-900/10">
        <div class="header-wrapper flex justify-between items-center mx-9 my-2">
            <a href="/home" class="text-zinc-700 text-4xl font-bold font-sans leading-[54px] tracking-[2.52px]">BAKA</a>
            <div
                class="search w-[450px] h-10 px-4 py-2 bg-gray-200 rounded-[10px] justify-start items-center gap-5 inline-flex">
                <form action="#">
                    <img class="inline-block" src="assets/images/search-icon.svg" alt="" />
                    <input
                        class="bg-transparent w-[350px] ml-[20] py-2 border-0 outline-0 text-zinc-700 text-opacity-60 text-sm font-normal font-['Nunito']"
                        type="text" placeholder="Pencarian" />
                </form>
            </div>

            <div class="menu-bar h-[20px] ml-7 justify-end items-center gap-10 inline-flex">
                {{-- notifikasi --}}
                <a href="/notification">
                    <img src="assets/icons/bell-icon.svg" alt="" style="cursor: pointer">
                </a>


                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="inline-flex items-center"
                    type="button"><img src="assets/images/menu-bar-icon.svg" alt="">
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="/"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </header>
</div>


@include('partials.sidebar')

@include('partials.modal-posting')
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
