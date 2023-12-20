<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- <link rel="stylesheet" href="assets/css/global.css" /> --}}
    {{-- <link rel="stylesheet" href="assets/css/editprofile.css" /> --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    @include('partials.navbar')
    @include('partials.sidebar')

    {{-- VERIF AKUN --}}
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

    <main>
        <div class="container max-w-5xl pt-24">

            {{-- sidebar kiri --}}
            @include('partials.editbar')


            <div class="edit-profile-wrapper max-w-[500px] mx-auto mt-10 px-4 md:px-8">
                <div class="back-to-userprofile mb-6">
                    <span class="text-[rgba(69,69,69,1)] text-xl font-bold ml-[5px]">Ubah Kata Sandi</span>
                </div>

                {{-- Alert Success --}}
                @if (session('success'))
                    <div id="alert-3"
                        class="flex items-center p-4 mb-4 text-green-800 rounded-md bg-green-50"
                        role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
                            Kata sandi berhasil diubah.
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-md focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                            data-dismiss-target="#alert-3" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
                {{-- End Alert Success --}}

                {{-- Alert Error/Fail --}}
                @if (session('error'))
                    <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-md bg-red-50"
                        role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
                            Kata sandi gagal diubah, kata sandi lama tidak sesuai.
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-md focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8"
                            data-dismiss-target="#alert-2" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
                {{-- End Alert Error/Fail --}}

                <form class="mt-10" action="{{ route('updatePassword') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-6">
                        <label for="Password Saat Ini"
                            class="block mb-2 text-black text-base font-normal font-poppins leading-normal">Kata Sandi Saat
                            Ini</label>
                        <input type="password" id="currentPass" name="currentPass"
                            class="w-full px-5 py-2.5 bg-white rounded-md border border-zinc-700 text-zinc-800 text-sm font-normal font-poppins"
                            placeholder="Masukan Password Saat Ini">
                    </div>
                    <div class="mb-6">
                        <label for="Password Baru"
                            class="block mb-2 text-black text-base font-normal font-poppins leading-normal">Kata Sandi Baru</label>
                        <input type="password" id="newPass" name="newPass"
                            class="w-full px-5 py-2.5 bg-white rounded-md border border-zinc-700 text-zinc-800 text-sm font-normal font-poppins"
                            placeholder="Masukan Password Baru">
                    </div>
                    {{-- <div class="mb-6">
                        <label for="Ulangi Password Baru"
                            class="text-black text-base font-normal font-poppins leading-normal">Email</label>
                        <input type="password" id="confirmNewPass" name="confirmNewPass"
                            class="w-full px-5 py-2.5 bg-white rounded-lg border border-zinc-700 text-zinc-800 text-xs font-normal font-poppins"
                            placeholder="Ulangi Password Baru">
                    </div> --}}
                    <div class="ml-auto">
                        <button type="submit"
                            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                    </div>
                </form>
            </div>


        </div>
    </main>

    {{-- <script src="../js/app.js"></script> --}}

</body>

</html>
