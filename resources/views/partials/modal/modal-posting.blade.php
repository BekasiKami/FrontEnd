<!-- The Modal -->
<div id="modal-posting"
    class="hidden fixed top-0 left-0 z-40 w-screen h-screen bg-black/70 flex justify-center items-center">

    <!-- The close button -->
    <a class="fixed z-50 top-32 right-8 text-white text-5xl font-bold" href="javascript:void(0)"
        onclick="closeModal()">&times;</a>

    <!-- A big image will be displayed here -->
    <div class="bg-white w-min min-w-0 max-w-[1200px] h-auto max-h-[800px] inline-flex" id="posting">
        <div class="h-[600px]">
            <img id="modal-img" class="max-w-[800px] max-h-[600px]" />
        </div>
        <div class="max-w-full h-[50px] mt-8 px-5">
            <div class="justify-center items-center gap-5 inline-flex">
                <img class="w-[30px] h-[30px] rounded-[250px] border border-zinc-600"
                    src="/assets/images/jessica.svg" />
                <div class="pr-[198px]">
                    <p class="text-zinc-700 text-sm font-normal">
                        Kevin86
                    </p>
                    <p class="text-zinc-700 text-opacity-60 text-xs font-normal">
                        2 jam yang lalu
                    </p>
                </div>
                <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal"
                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
                    type="button">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 16 3">
                        <path
                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                    </svg>
                </button>
            </div>



            <!-- Dropdown menu -->
            <div id="dropdownDotsHorizontal"
                class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconHorizontalButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Tambah
                            ke simpan</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Laporkan</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sembunyikan
                            postingan</a>
                    </li>
                </ul>
                {{-- <div class="py-2">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
                            link</a>
                    </div> --}}
            </div>

            {{-- CAPTION --}}
            <div class="w-[380px] mt-5">
                <p class="text-zinc-700 text-sm font-normal">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut blanditiis voluptatum commodi ipsum
                    incidunt eos quaerat, ad, enim labore sint expedita pariatur ex harum a magni ducimus! Harum, veniam
                    alias?
                </p>
                <br>
                <p class="text-zinc-700 text-sm font-normal">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis alias nam animi ut corporis?
                    Magnam provident possimus, id ducimus error ipsam vitae. Earum ex molestiae, fugiat est autem
                    cupiditate laboriosam sint. Sequi vitae sunt minima possimus hic, magni eos corporis consequatur
                    inventore. Ratione commodi, facilis excepturi aliquid eos optio omnis?
                </p>
            </div>
            <div
                class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-auto my-5 justify-start items-start gap-5 inline-flex px-5 md:p-0">
                <button class="likes w-4 h-4">
                    <img src="assets/images/arrow-turn-up-solid.svg" alt="" />
                </button>
                <button class="comments w-5 h-5">
                    <img src="assets/images/message-regular.svg" alt="" />
                </button>
                <button class="share w-5 h-5">
                    <img src="assets/images/share-icon.svg" alt="" />
                </button>
            </div>
            <div
                class="posted-activities md:w-[450px] max-mobile:w-[450px] mobile:w-full h-4 justify-start items-center gap-2.5 inline-flex px-5 md:p-0">
                <span class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">20 Upvotes</span>
                <span class="text-center text-zinc-700 text-opacity-70 text-xs font-normal"> | </span>
                <span class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">0 Komentar</span>
            </div>
            <br>
            <br>
            <div class="w-[380px] border-b border-gray-600"></div>
        </div>
    </div>
</div>
