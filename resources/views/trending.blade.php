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
    {{-- Home Category --}}
    @include('partials.category')
    {{-- Trending --}}
    @include('partials.trending')


    {{-- Home Content --}}
    @if (session()->has('token'))
        {{-- <p>Your token: {{ session('token') }}</p> --}}
        <script>
            // Save the token to session storage
            sessionStorage.setItem('token', '{{ session('token') }}');
        </script>
    @else
        <p>No token available.</p>
    @endif

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

    {{-- Wajib ada di dalam form post,edit --}}
    {{-- <input type="hidden" id="xxx-token" value=""> --}}

    <main>
        {{-- <div class="container mx-auto max-mobile:mx-auto mt-20"> --}}
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
                                    {{-- <div class="py-2">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
                                            link</a>
                                    </div> --}}
                                </div>

                            </div>
                        </div>
                        <div class="post">
                            <img class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-auto"
                                src="{{ $image }}"
                                onclick="showModal('{{$image}}')"/>
                            {{-- <img class="md:w-[450px] max-mobile:w-[450px] mobile:w-full h-[268px]"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" /> --}}
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
                            {{-- <p>{{ $token }}</p> --}}
                            {{-- <p>{{ $result['fullname']; }}</p> --}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    {{-- End Content --}}

    <script src="assets/js/app.js"></script>
    <script src="../js/post.js"></script>
</body>
{{-- End of Body --}}

</html>
