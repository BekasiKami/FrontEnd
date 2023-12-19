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
        <div class="container max-w-5xl pt-36">

            {{-- sidebar kiri --}}
            @include('partials.editbar')


            {{-- <div class="edit-profile-wrapper max-w-[500px]  ml-[380px]">
                <div class="back-to-userprofile">
                    <span class="text-[rgba(69,69,69,1)] text-xl font-bold ml-[5px]">Edit profile</span>
                </div>
                <div class="edit-profile relative mx-0 my-6 px-8 py-4">
                    <div class="edit-header grid grid-cols-[0.5fr_1.2fr] mb-[15px]">
                        <img class="w-[100px] h-[100px]" src="assets/images/jessica.svg" alt="" />
                        <div class="edit-profile-description">
                            <div class="edit-profile-description-top flex items-center justify-between mb-5">
                                <h4 class="text-xl font-normal text-[rgba(69,69,69,1)]">Jessica_</h4>
                            </div>
                            <button class="text-blue-600 font-bold bg-transparent text-base border-0">Edit foto profil</button>
                        </div>
                    </div>


                    <form class="ml-7 mt-10">
                        <div class="mb-6 w-[400px] h-[38px] justify-center items-center gap-[30px] inline-flex">
                            <label for="username"
                                class="h-6 justify-end items-center flex text-black text-base font-normal font-poppins leading-normal">Username</label>
                            <input type="username" id="username"
                                class="w-[300px] h-[38px] px-5 py-2.5 bg-white rounded-lg border border-zinc-700 justify-start items-center gap-2.5 flex text-zinc-800 text-xs font-normal font-poppins"
                                placeholder="Username">
                        </div>
                        <div class="mb-6 w-[432px] h-[38px] justify-center items-center gap-[30px] inline-flex">
                            <label for="name"
                                class="h-6 justify-end items-center flex text-black text-base font-normal font-poppins leading-normal">Nama</label>
                            <input type="name" id="name"
                                class="w-[300px] h-[38px] px-5 py-2.5 bg-white rounded-lg border border-zinc-700 justify-start items-center gap-2.5 flex text-zinc-800 text-xs font-normal font-poppins"
                                placeholder="Nama">
                        </div>
                        <div class="mb-6 w-[432px] h-[38px] justify-center items-center gap-[30px] inline-flex">
                            <label for="email"
                                class="h-6 justify-end items-center flex text-black text-base font-normal font-poppins leading-normal">Email</label>
                            <input type="email" id="email"
                                class="w-[300px] h-[38px] px-5 py-2.5 bg-white rounded-lg border border-zinc-700 justify-start items-center gap-2.5 flex text-zinc-800 text-xs font-normal font-poppins"
                                placeholder="Email">
                        </div>
                        <div class="ml-[100px] w-auto">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55">Simpan</button>
                        </div>
                    </form>
                </div>
            </div> --}}

            <div class="edit-profile-wrapper max-w-[500px] mx-auto">
                <div class="edit-profile my-6 md:px-8 px-4 py-4">
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
                                class="text-black text-base font-normal font-poppins leading-normal">Username</label>
                            <input type="text" id="username" name="username"
                                class="w-full px-5 py-2.5 bg-white rounded-lg border border-zinc-700 text-zinc-800 text-xs font-normal font-poppins"
                                value="{{ $result['user']['username'] }}">
                        </div>
                        <div class="mb-6">
                            <label for="name"
                                class="text-black text-base font-normal font-poppins leading-normal">Nama</label>
                            <input type="text" id="name" name="fullname"
                                class="w-full px-5 py-2.5 bg-white rounded-lg border border-zinc-700 text-zinc-800 text-xs font-normal font-poppins"
                                value="{{ $result['user']['fullname'] }}">
                        </div>
                        <div class="mb-6">
                            <label for="email"
                                class="text-black text-base font-normal font-poppins leading-normal">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-5 py-2.5 bg-white rounded-lg border border-zinc-700 text-zinc-800 text-xs font-normal font-poppins"
                                readonly disabled value="{{ $result['user']['email'] }}">
                        </div>
                        {{-- Hidden Gems --}}
                        <input type="text" id="description" name="description" value="desc" class="hidden" readonly
                            disabled>
                        <input type="text" id="phone" name="phone" value="000000000000" class="hidden" readonly
                            disabled>
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
