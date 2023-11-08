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

            @include('partials.menu')
            @include('partials.sidebar')

        </div>
    </header>
</div>




@include('partials.modal.modal-posting')
@include('partials.modal.modal-tentang')
@include('partials.modal.modal-history')
@include('partials.modal.modal-laporan')
@include('partials.modal.modal-keluar')
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
