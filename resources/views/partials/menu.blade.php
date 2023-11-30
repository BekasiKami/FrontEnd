<div class="h-[20px] ml-7 justify-end items-center gap-10 inline-flex">
    {{-- notifikasi --}}
    <a href="/notification">
        <img src="assets/icons/bell-icon.svg" alt="" style="cursor: pointer">
    </a>


    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="inline-flex items-center" type="button">
        <img src="assets/icons/menu-bar-icon.svg" alt="">
    </button>

    <!-- Dropdown menu -->
    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pengaturan
                </a>
            </li>
            <li>
                <a data-modal-target="modal-history" data-modal-toggle="modal-history"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Riwayat
                    Aktifitas
                </a>
            </li>
            <li>
                <a data-modal-target="modal-tentang" data-modal-toggle="modal-tentang"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tentang
                </a>
            </li>
            <li>
                <a data-modal-target="modal-laporan" data-modal-toggle="modal-laporan"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Laporan Masalah
                </a>
            </li>
            <li>
                <a data-modal-target="modal-keluar" data-modal-toggle="modal-keluar"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keluar
                </a>
            </li>
        </ul>
    </div>
</div>
