<div class="w-[200px] h-auto flex-col justify-center items-start gap-2 inline-flex fixed left-[20px] top-24 max-tablet:invisible">

    <div></div>
    <a href="/home"
        class="self-stretch px-3 py-3 hover:bg-zinc-100 rounded-[7px] justify-start items-center gap-4 inline-flex">
        <div class="w-4 h-auto relative">
            <img src="assets/icons/home-icon.svg" alt="Icon Home">
        </div>
        <div class="text-zinc-700 text-md font-medium leading-[18px] tracking-tight">Beranda</div>
    </a>

    <button data-modal-target="modal-newpost" data-modal-toggle="modal-newpost"
        class="self-stretch px-3 py-3 hover:bg-zinc-100 rounded-[7px] justify-start items-center gap-4 inline-flex">
        <div class="w-4 h-auto relative">
            <img src="assets/icons/post-icon.svg" alt="Icon Posting">
        </div>
        <div class="text-zinc-700 text-md font-medium leading-[18px] tracking-wide">Posting</div>
    </button>

    <a href="/trending"
        class="self-stretch px-3 py-3 hover:bg-zinc-100 rounded-[7px] justify-start items-center gap-4 inline-flex">
        <div class="w-4 h-auto relative">
            <img src="assets/icons/chart-icon.svg" alt="Icon Trending">
        </div>
        <div class="text-zinc-700 text-md font-medium leading-[18px] tracking-wide">Trending</div>
    </a>

    <a href="/profile"
        class="self-stretch px-3 py-3 hover:bg-zinc-100 rounded-[7px] justify-start items-center gap-4 inline-flex">
        <div class="w-4 h-auto relative">
            <img src="assets/icons/profile-icon.svg" alt="">
        </div>
        <div class="text-zinc-700 text-md font-medium leading-[18px] tracking-wide">Profile</div>
    </a>

</div>



{{-- RESPONSIVE MOBILE --}}
<div
    class="fixed bottom-0 z-50 w-full -translate-x-1/2 bg-white border-t border-gray-200 left-1/2 min-desktop:invisible max-mobile:fixed">

    {{-- ICON NAVBAR --}}
    <div class="grid h-full max-w-lg grid-cols-5 mx-auto">
        <button data-tooltip-target="tooltip-home" type="button"
            class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <a href="/home">
                    <img src="assets/icons/home-icon.svg" alt="Icon Home">
            </a>
            <span class="sr-only">Home</span>
        </button>
        <div id="tooltip-home" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Home
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <button data-tooltip-target="tooltip-trendings" type="button"
            class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <a href="/trending">
                    <img src="assets/icons/chart-icon.svg" alt="Icon Trending">
            </a>
            <span class="sr-only">Trendings</span>
        </button>
        <div id="tooltip-trendings" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Trendings
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <button data-modal-target="modal-newpost" data-modal-toggle="modal-newpost" data-tooltip-target="tooltip-post" type="button"
            class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <img src="assets/icons/post-icon.svg" alt="Icon Posting">
            <span class="sr-only">New post</span>
        </button>
        <div id="tooltip-post" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            New post
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <button data-tooltip-target="tooltip-search" type="button"
            class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <div class="w-[25px] h-[25px] relative">
                <img src="assets/icons/search-icon.svg" alt="Icon Search">
            </div>
            <span class="sr-only">Search</span>
        </button>
        <div id="tooltip-search" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Search
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <button data-tooltip-target="tooltip-settings" type="button"
            class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <a href="/profile">
            <div class="w-[25px] h-[25px] relative">
                <img src="assets/icons/profile-icon.svg" alt="Icon Profile">
            </div>
            </a>
            <span class="sr-only">Profile</span>
        </button>
        <div id="tooltip-settings" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Profile
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
</div>
