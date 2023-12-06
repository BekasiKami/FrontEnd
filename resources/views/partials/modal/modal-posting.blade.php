<!-- The Modal -->
<div id="modal-posting"
    class="hidden fixed top-0 left-0 z-40 w-screen h-screen bg-black/70 flex justify-center items-center">

    <!-- The close button -->
    <a class="fixed z-90 top-32 right-8 text-white text-5xl font-bold" href="javascript:void(0)"
        onclick="closeModal()">&times;</a>

    <!-- A big image will be displayed here -->
    <div class="bg-white w-[1200px] h-auto inline-flex" id="posting">
        <img id="modal-img" class="max-w-[800px] max-h-[600px]" />
        <div class="w-full h-[50px] mt-5 px-5 justify-between inline-flex">
            <div class="justify-center items-center gap-5 flex">
                <img class="w-[30px] h-[30px] rounded-[250px] border border-zinc-600"
                    src="/assets/images/jessica.svg" />
                <div class="">
                    <p class="text-zinc-700 text-sm font-normal">
                        Kevin86
                    </p>
                    <p class="text-zinc-700 text-opacity-60 text-xs font-normal">
                        2 jam yang lalu
                    </p>
                </div>
            </div>

            <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 16 3">
                    <path
                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownDotsHorizontal"
                class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownMenuIconHorizontalButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tambah
                            ke simpan</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Laporkan</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sembunyikan
                            postingan</a>
                    </li>
                </ul>
                {{-- <div class="py-2">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
                            link</a>
                    </div> --}}
            </div>
        </div>
    </div>
</div>
