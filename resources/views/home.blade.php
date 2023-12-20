    <!DOCTYPE html>
    <html lang="en">

    {{-- Head Section --}}

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include('partials.head')
        @include('partials.modal.modal-posting')
    </head>
    {{-- End of Head --}}

    {{-- Body Section --}}

    <body>
        {{-- Navbar --}}
        @include('partials.navbar')
        {{-- Trending --}}
        @include('partials.trending')

        {{-- TOKEN CHECK --}}
        @if (session()->has('token'))
            {{-- <p>Your token: {{ session('token') }}</p> --}}
            <script>
                // Save the token to session storage
                sessionStorage.setItem('token', '{{ session('token') }}');
            </script>
        @else
            <p>No token available.</p>
        @endif
        {{-- END TOKEN CHECK --}}

        {{-- TOKEN STORAGE SCRIPT --}}
        <script>
            // Retrieve the token from session storage
            const jwtToken = sessionStorage.getItem('token');

            // Check if the token is available
            if (jwtToken) {
                // Add the token to the headers (JavaScript)
                document.addEventListener('DOMContentLoaded', function() {
                    document.querySelector('#xxx-token').setAttribute('value', jwtToken);
                });
            } else {
                console.error('JWT token not found in session storage.');
            }
        </script>
        {{-- END TOKEN STORAGE SCRIPT --}}

        {{-- Home Content --}}
        <main>
            <div class="mb-4 border-b border-gray-200 mt-24 content-center mx-auto mobile:w-full sm:w-full md:w-[450px] max-mobile:w-[450px] text-sm font-medium text-center text-gray-500">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="md:mx-2 mx-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="semua-tab" data-tabs-target="#semua" type="button" role="tab" aria-controls="semua" aria-selected="false">Semua</button>
                    </li>
                    <li class="md:mx-2 mx-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="loker-tab" data-tabs-target="#loker" type="button" role="tab" aria-controls="loker" aria-selected="false">Loker</button>
                    </li>
                    <li class="md:mx-2 mx-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="event-tab" data-tabs-target="#event" type="button" role="tab" aria-controls="event" aria-selected="false">Event</button>
                    </li>
                    <li class="md:mx-2 mx-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="wisata-tab" data-tabs-target="#wisata" type="button" role="tab" aria-controls="wisata" aria-selected="false">Wisata</button>
                    </li>
                    <li class="md:mx-2 mx-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="kuliner-tab" data-tabs-target="#kuliner" type="button" role="tab" aria-controls="kuliner" aria-selected="false">Kuliner</button>
                    </li>
                </ul>
            </div>
            
            {{-- SEMUA --}}
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg" id="semua" role="tabpanel" aria-labelledby="semua-tab">
                    <div class="container mx-auto md:w-[450px] max-mobile:w-[450px] mobile:w-full">
                        <section class="md:w-[450px] max-mobile:w-[450px] mobile:w-full mx-auto">
                            <div class="grid grid-rows-[0.5fr_3fr] gap-[15px] mx-0 mt-[10px] py-[1.2rem]">
                                <div class="">
                                    <div
                                        class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-[50px] py-2.5 justify-between items-center inline-flex px-5 md:p-0">
                                        <div class="justify-center items-center gap-5 flex">
                                            <img class="w-[30px] h-[30px] rounded-[250px] border border-zinc-600"
                                                src="{{ $profile_image }}" />
                                            <div class="text-center text-zinc-700 text-sm font-normal">silver.ash
                                            </div>
                                        </div>
                                        <div class="justify-center items-center gap-5 flex">
                                            <div class="text-center text-zinc-700 text-opacity-60 text-xs font-normal">
                                                {{ $post_time }}
                                            </div>
            
                                            <button id="dropdownMenuIconHorizontalButton"
                                                data-dropdown-toggle="dropdownDotsHorizontal"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 16 3">
                                                    <path
                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                </svg>
                                            </button>
            
                                            <!-- Dropdown menu -->
                                            <div id="dropdownDotsHorizontal"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
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
                                            </div>
            
                                        </div>
                                    </div>
                                    <div class="post">
                                        <img class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-auto"
                                            src="{{ $image }}"
                                            onclick="showModal('{{$image}}')"/>
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
                                        <span
                                            class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $upvotes }}</span>
                                        <span class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">-</span>
                                        <span
                                            class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $comments }}</span>
                                    </div>
                                    <div
                                        class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-[97px] py-5 px-5 md:p-0 justify-center items-center inline-flex">
                                        <div class="w-auto text-zinc-700 text-sm font-normal">
                                            {{ $caption }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                {{-- LOKER --}}
                <div class="hidden p-4 rounded-lg" id="loker" role="tabpanel" aria-labelledby="loker-tab">
                    <div class="container mx-auto md:w-[450px] max-mobile:w-[450px] mobile:w-full">
                        <section class="md:w-[450px] max-mobile:w-[450px] mobile:w-full mx-auto">
                            <div class="grid grid-rows-[0.5fr_3fr] gap-[15px] mx-0 mt-[10px] py-[1.2rem]">
                                <div class="">
                                    <div
                                        class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-[50px] py-2.5 justify-between items-center inline-flex px-5 md:p-0">
                                        <div class="justify-center items-center gap-5 flex">
                                            <img class="w-[30px] h-[30px] rounded-[250px] border border-zinc-600"
                                                src="assets/images/silverash-profile.svg" />
                                            <div class="text-center text-zinc-700 text-sm font-normal">silver.ash
                                            </div>
                                        </div>
                                        <div class="justify-center items-center gap-5 flex">
                                            <div class="text-center text-zinc-700 text-opacity-60 text-xs font-normal">
                                                {{ $post_time }}
                                            </div>
            
                                            <button id="dropdownMenuIconHorizontalButton"
                                                data-dropdown-toggle="dropdownDotsHorizontal"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 16 3">
                                                    <path
                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                </svg>
                                            </button>
            
                                            <!-- Dropdown menu -->
                                            <div id="dropdownDotsHorizontal"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
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
                                            </div>
            
                                        </div>
                                    </div>
                                    <div class="post">
                                        <img class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-auto"
                                            src="assets/images/dummy/loker.jpg"
                                            onclick="showModal('assets/images/dummy/loker.jpg')"/>
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
                                        <span
                                            class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $upvotes }}</span>
                                        <span class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">-</span>
                                        <span
                                            class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $comments }}</span>
                                    </div>
                                    <div
                                        class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-[97px] py-5 px-5 md:p-0 justify-center items-center inline-flex">
                                        <div class="w-auto text-zinc-700 text-sm font-normal">
                                            {{ $caption }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                
                {{-- EVENT --}}
                <div class="hidden p-4 rounded-lg" id="event" role="tabpanel" aria-labelledby="event-tab">
                    <div class="container mx-auto md:w-[450px] max-mobile:w-[450px] mobile:w-full">
                        <section class="md:w-[450px] max-mobile:w-[450px] mobile:w-full mx-auto">
                            <div class="grid grid-rows-[0.5fr_3fr] gap-[15px] mx-0 mt-[10px] py-[1.2rem]">
                                <div class="">
                                    <div
                                        class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-[50px] py-2.5 justify-between items-center inline-flex px-5 md:p-0">
                                        <div class="justify-center items-center gap-5 flex">
                                            <img class="w-[30px] h-[30px] rounded-[250px] border border-zinc-600"
                                                src="{{ $profile_image }}" />
                                            <div class="text-center text-zinc-700 text-sm font-normal">silver.ash
                                            </div>
                                        </div>
                                        <div class="justify-center items-center gap-5 flex">
                                            <div class="text-center text-zinc-700 text-opacity-60 text-xs font-normal">
                                                {{ $post_time }}
                                            </div>
            
                                            <button id="dropdownMenuIconHorizontalButton"
                                                data-dropdown-toggle="dropdownDotsHorizontal"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 16 3">
                                                    <path
                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                </svg>
                                            </button>
            
                                            <!-- Dropdown menu -->
                                            <div id="dropdownDotsHorizontal"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
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
                                            </div>
            
                                        </div>
                                    </div>
                                    <div class="post">
                                        <img class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-auto"
                                            src="assets/images/dummy/event2.jpg" onclick="showModal('assets/images/dummy/event2.jpg')" />
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
                                        <span
                                            class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $upvotes }}</span>
                                        <span class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">-</span>
                                        <span
                                            class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $comments }}</span>
                                    </div>
                                    <div
                                        class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-[97px] py-5 px-5 md:p-0 justify-center items-center inline-flex">
                                        <div class="w-auto text-zinc-700 text-sm font-normal">
                                            {{ $caption }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                {{-- WISATA --}}
                <div class="hidden p-4 rounded-lg" id="wisata" role="tabpanel" aria-labelledby="wisata-tab">
                    <div class="container mx-auto md:w-[450px] max-mobile:w-[450px] mobile:w-full">
                        <section class="md:w-[450px] max-mobile:w-[450px] mobile:w-full mx-auto">
                            <div class="grid grid-rows-[0.5fr_3fr] gap-[15px] mx-0 mt-[10px] py-[1.2rem]">
                                <div class="">
                                    <div
                                        class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-[50px] py-2.5 justify-between items-center inline-flex px-5 md:p-0">
                                        <div class="justify-center items-center gap-5 flex">
                                            <img class="w-[30px] h-[30px] rounded-[250px] border border-zinc-600"
                                                src="{{ $profile_image }}" />
                                            <div class="text-center text-zinc-700 text-sm font-normal">silver.ash
                                            </div>
                                        </div>
                                        <div class="justify-center items-center gap-5 flex">
                                            <div class="text-center text-zinc-700 text-opacity-60 text-xs font-normal">
                                                {{ $post_time }}
                                            </div>
            
                                            <button id="dropdownMenuIconHorizontalButton"
                                                data-dropdown-toggle="dropdownDotsHorizontal"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 16 3">
                                                    <path
                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                </svg>
                                            </button>
            
                                            <!-- Dropdown menu -->
                                            <div id="dropdownDotsHorizontal"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tambah ke simpan</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Laporkan</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sembunyikan postingan</a>
                                                    </li>
                                                </ul>
                                            </div>
            
                                        </div>
                                    </div>
                                    <div class="post">
                                        <img class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-auto"
                                            src="assets/images/dummy/wisata.jpg"
                                            onclick="showModal('assets/images/dummy/wisata.jpg')" />
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
                                        <span
                                            class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $upvotes }}</span>
                                        <span class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">-</span>
                                        <span
                                            class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $comments }}</span>
                                    </div>
                                    <div
                                        class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-[97px] py-5 px-5 md:p-0 justify-center items-center inline-flex">
                                        <div class="w-auto text-zinc-700 text-sm font-normal">
                                            {{ $caption }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                {{-- KULINER --}}
                <div class="hidden p-4 rounded-lg" id="kuliner" role="tabpanel" aria-labelledby="kuliner-tab">
                    <div class="container mx-auto md:w-[450px] max-mobile:w-[450px] mobile:w-full">
                        <section class="md:w-[450px] max-mobile:w-[450px] mobile:w-full mx-auto">
                            <div class="grid grid-rows-[0.5fr_3fr] gap-[15px] mx-0 mt-[10px] py-[1.2rem]">
                                <div class="">
                                    <div
                                        class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-[50px] py-2.5 justify-between items-center inline-flex px-5 md:p-0">
                                        <div class="justify-center items-center gap-5 flex">
                                            <img class="w-[30px] h-[30px] rounded-[250px] border border-zinc-600"
                                                src="{{ $profile_image }}" />
                                            <div class="text-center text-zinc-700 text-sm font-normal">silver.ash
                                            </div>
                                        </div>
                                        <div class="justify-center items-center gap-5 flex">
                                            <div class="text-center text-zinc-700 text-opacity-60 text-xs font-normal">
                                                {{ $post_time }}
                                            </div>
            
                                            <button id="dropdownMenuIconHorizontalButton"
                                                data-dropdown-toggle="dropdownDotsHorizontal"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 16 3">
                                                    <path
                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                </svg>
                                            </button>
            
                                            <!-- Dropdown menu -->
                                            <div id="dropdownDotsHorizontal"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tambah ke simpan</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Laporkan</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sembunyikan postingan</a>
                                                    </li>
                                                </ul>
                                            </div>
            
                                        </div>
                                    </div>
                                    <div class="post">
                                        <img class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-auto"
                                            src="assets/images/dummy/kuliner.jpg"
                                            onclick="showModal('assets/images/dummy/kuliner.jpg')" />
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
                                        <span
                                            class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $upvotes }}</span>
                                        <span class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">-</span>
                                        <span
                                            class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $comments }}</span>
                                    </div>
                                    <div
                                        class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-[97px] py-5 px-5 md:p-0 justify-center items-center inline-flex">
                                        <div class="w-auto text-zinc-700 text-sm font-normal">
                                            {{ $caption }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        {{-- End Content --}}

        <script src="assets/js/app.js"></script>
        <script src="../js/post.js"></script>
    </body>
    {{-- End of Body --}}

    </html>
