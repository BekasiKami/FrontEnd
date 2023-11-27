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
    <form id="register_form"
        class="relative bg-white max-w-md mx-auto z-10 rounded-lg shadow-lg p-5 sm:w-[440px] w-[380px]">
        <div class="text-center mb-10">
            <div class="text-stone-900 text-3xl font-bold">Bekasi Kami</div>
            <div class="text-stone-900 text-sm font-normal capitalize mt-2">Lengkapi data berikut untuk bergabung
                bersama Kami</div>
        </div>

        <div class="mb-5">
            <div class="text-stone-900 text-sm font-normal font-['Poppins']">Masukan Namamu</div>
            <input type="text" name="fullname" id="fullname" autocomplete="fullname"
                class="w-full h-10 px-3 bg-neutral-200 rounded-md shadow mb-2" placeholder="Nama">
        </div>

        <div class="mb-5">
            <div class="text-stone-900 text-sm font-normal font-['Poppins']">Masukan Username yang ingin kamu gunakan
            </div>
            <input type="text" name="username" id="username" autocomplete="username"
                class="w-full h-10 px-3 bg-neutral-200 rounded-md shadow mb-2" placeholder="Username">
        </div>

        <div class="mb-5">
            <button
                class="w-full h-10 bg-emerald-500 rounded-md shadow text-white text-sm font-normal leading-[18px] hover:bg-red-500 flex items-center justify-center"
                type="submit">Selanjutnya</button>
        </div>

        <div class="text-center">
            <span class="text-stone-900 text-sm font-normal capitalize">Sudah Punya Akun? </span>
            <a href="/" class="text-emerald-500 text-sm font-bold capitalize hover:text-emerald-600">Masuk</a>
        </div>
    </form>

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
</body>

</html>
