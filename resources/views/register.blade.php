<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Bekasi Kami</title>
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="flex items-center justify-center min-h-screen">
    {{-- <a href="/" class="left-10 self-stretch px-5 py-2.5 bg-emerald-500 rounded-md shadow inline-flex text-white text-sm font-normal leading-[18px] hover:bg-red-500">
    <button>Kembali</button>
    </a> --}}
    <div class="relative bg-white max-w-md mx-auto z-10 rounded-lg shadow-lg p-5 sm:w-[440px] w-[380px]">
        @if (session('success'))
            <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    Pendaftaran Berhasil.
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        <form action="{{ route('regisAPI') }}" method="POST" enctype="application/x-www-form-urlencoded">
            @csrf
            <div class="text-center mb-10">
                <div class="text-stone-900 text-3xl font-bold">Bekasi Kami</div>
                <div class="text-stone-900 text-sm font-normal capitalize mt-2">Lengkapi data berikut untuk bergabung
                    bersama Kami</div>
            </div>
            <div class="mb-5">
                <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900">Masukan Namamu</label>
                <input type="text" id="fullname" name="fullname"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Nama Lengkap" required>
            </div>
            <div class="mb-5">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Masukan Username</label>
                <input type="text" id="username" name="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="username12" required>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Masukan Email</label>
                <input type="text" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="example@email.com" required>
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                <input type="password" id="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Kata Sandi" required>
                <span class="toggle-password cursor-pointer text-blue-500 text-sm"
                    onclick="togglePasswordVisibility()">Show Password</span>
                {{-- <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Kata sandi minimal 8 karakter.</p> --}}
            </div>

            {{-- <div class="mb-5">
                <div class="text-stone-900 text-sm font-normal font-['Poppins']">Masukan Namamu</div>
                <input type="text" name="fullname" id="fullname" autocomplete="fullname"
                    class="w-full h-10 px-3 bg-neutral-200 rounded-md shadow mb-2" placeholder="Nama">
            </div>
    
            <div class="mb-5">
                <div class="text-stone-900 text-sm font-normal font-['Poppins']">Masukan Username yang ingin kamu gunakan
                </div>
                <input type="text" name="username" id="username" autocomplete="username"
                    class="w-full h-10 px-3 bg-neutral-200 rounded-md shadow mb-2" placeholder="Username">
            </div> --}}

            <div class="mb-5">
                <button
                    class="w-full h-10 bg-emerald-500 rounded-md shadow text-white text-sm font-normal leading-[18px] hover:bg-red-500 flex items-center justify-center"
                    type="submit" value="submit">Daftar</button>
            </div>
        </form>

        <div class="text-center mb-5">
            <span class="text-stone-900 text-sm font-normal capitalize">Sudah Punya Akun? </span>
            <a href="/" class="text-emerald-500 text-sm font-bold capitalize hover:text-emerald-600">Masuk</a>
        </div>
    </div>


    <img class="w-full h-auto md:w-auto md:h-auto right-0 top-0 absolute z-0" src="assets/images/bg-regis2-icon1.png" />
    <img class="w-full h-auto md:w-auto md:h-auto bottom-0 left-0 absolute z-0"
        src="assets/images/bg-regis2-icon2.png" />

    <script>
        $(function() {
            $("#register_form").on("submit", function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url: "http://127.0.0.1:8001/api/user",
                    type: "POST",
                    data: formData,
                    success: function(data) {
                        console.log(data);
                    }
                });
            });
        });
    </script>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const togglePasswordBtn = document.getElementById('toggle-password');

            const isPasswordVisible = passwordInput.getAttribute('type') === 'text';

            passwordInput.setAttribute('type', isPasswordVisible ? 'password' : 'text');
            togglePasswordBtn.textContent = isPasswordVisible ? 'Show Password' : 'Hide Password';
        }
    </script>
</body>

</html>
