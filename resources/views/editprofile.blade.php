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

    <main>
        <div class="container max-w-5xl pt-24">

            {{-- sidebar kiri --}}
            @include('partials.editbar')

            <div class="edit-profile-wrapper max-w-[500px] mx-auto">
                <div class="edit-profile my-6 md:px-8 px-4 py-4">

                    {{-- Alert Success --}}
                    @if (session('success'))
                        <div id="alert-3"
                            class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50"
                            role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                Edit data profil berhasil.
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                                data-dismiss-target="#alert-3" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif
                    {{-- End Alert Success --}}

                    {{-- Alert Error/Fail --}}
                    @if (session('error'))
                        <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50"
                            role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                Edit data profil gagal.
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8"
                                data-dismiss-target="#alert-2" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif
                    {{-- End Alert Error/Fail --}}

                    <div class="edit-header grid grid-cols-[1fr] mb-5">
                        <img class="w-[100px] h-[100px] mx-auto mb-3" src="assets/images/jessica.svg" alt="" />
                        <div class="edit-profile-description text-center">
                            <h4 class="text-xl font-normal text-[rgba(69,69,69,1)]">{{ $result['user']['username'] }}
                            </h4>
                            {{-- <button class="text-blue-600 font-bold bg-transparent text-base border-0">Edit foto
                                profil</button> --}}
                        </div>
                    </div>

                    <form action="{{ route('updateProfile') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <label for="username"
                                class="block mb-2 text-black text-base font-normal font-poppins leading-normal">Username</label>
                            <input type="text" id="username" name="username"
                                class="w-full px-5 py-2.5 bg-white rounded-md border border-zinc-700 text-zinc-800 text-sm font-normal font-poppins"
                                value="{{ $result['user']['username'] }}">
                        </div>
                        <div class="mb-6">
                            <label for="name"
                                class="block mb-2 text-black text-base font-normal font-poppins leading-normal">Nama</label>
                            <input type="text" id="name" name="fullname"
                                class="w-full px-5 py-2.5 bg-white rounded-md border border-zinc-700 text-zinc-800 text-sm font-normal font-poppins"
                                value="{{ $result['user']['fullname'] }}">
                        </div>
                        <div class="mb-6">
                            <label for="email"
                                class="block mb-2 text-black text-base font-normal font-poppins leading-normal">Email</label>
                            {{-- <input type="email" id="email" name="email"
                                class="w-full px-5 py-2.5 bg-white rounded-md border border-zinc-700 text-zinc-800 text-xs font-normal font-poppins"
                                readonly disabled value="{{ $result['user']['email'] }}"> --}}
                                <input type="email" id="email" name="email" aria-label="disabled input 2" class="px-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" value="{{ $result['user']['email'] }}" disabled readonly>
                        </div>
                        <div class="ml-auto">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    {{-- <script>
        $(document).ready(function() {
            $('editProfileForm').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: '/user/update-data-profile',
                    data: $('form').serialize(),
                    success: function(response) {
                        alert(response.message); // Show success message
                        // Handle other actions if needed
                    },
                    error: function(error) {
                        alert('Failed to update profile'); // Show error message
                        // Handle other error actions if needed
                    }
                });
            });
        });
    </script> --}}

    {{-- <script src="../js/app.js"></script> --}}
</body>

</html>
