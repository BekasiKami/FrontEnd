<div class="relative z-10">
    <header class="fixed top-0 w-full mx-auto bg-white border-b my-auto border-slate-900/10">
        <div class="header-wrapper flex justify-between items-center mx-9 my-2">
            <a href="/home" class="text-zinc-700 text-4xl font-bold font-sans leading-[54px] tracking-[2.52px]">BAKA
            </a>

            {{-- <div class="max-mobile:invisible max-mobile:w-56 search w-[450px] h-10 px-4 py-2 bg-gray-200 rounded-[10px] justify-start items-center gap-5 inline-flex">
                <form action="#">
                    <img class="inline-block" src="assets/images/search-icon.svg" alt="" />
                    <input
                        class="bg-transparent w-[350px] ml-[20] py-2 border-0 outline-0 text-zinc-700 text-opacity-60 text-sm font-normal font-['Nunito']"
                        type="text" placeholder="Pencarian" />
                </form>
            </div> --}}

            <div class="max-tablet:invisible max-mobile:w-0">
                <form>
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative">
                        
                        <input type="search" id="default-search"
                            class="block w-[450px] p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="Cari Sesuatu Disini.." required>
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2 top-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-md text-sm px-4 py-2">
                            {{-- <img class="inline-block w-6 h-auto " src="assets/images/search-icon.svg" alt="" /> --}}
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </button>
                    </div>
                </form>

            </div>

            @include('partials.menu')
            @include('partials.sidebar')

        </div>
    </header>
</div>

{{-- <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div> --}}


@include('partials.modal.modal-newpost')
@include('partials.modal.modal-tentang')
@include('partials.modal.modal-history')
@include('partials.modal.modal-laporan')
@include('partials.modal.modal-keluar')
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
