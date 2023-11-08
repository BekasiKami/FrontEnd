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