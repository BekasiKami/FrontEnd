{{-- <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Bekasi Kami</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="flex items-center justify-center min-h-screen">
    content
    <div class="relative bg-white max-w-md mx-auto z-10 rounded-lg drop-shadow">
        <div class="flex min-h-fit bg-gray-white flex-col justify-center items-center gap-5 mx-10 my-10 rounded-md">
            <div class="px-2.5 justify-center items-center gap-2.5 inline-flex">
                <div class="text-stone-900 text-5xl font-bold">Bekasi Kami</div>
            </div>
            <div class="px-5 flex-col justify-start items-center gap-2.5 flex">
                <div class="text-stone-900 text-md font-normal capitalize leading-normal tracking-tight">Selamat datang
                    di Bekasi kami</div>
                <div class="text-stone-900 text-md font-normal capitalize leading-normal tracking-tight">Dapatkan
                    informasi & berita terkini seputar bekasi</div>
            </div>
            <form action="http://127.0.0.1:8001/api/auth-login" method="POST"
                enctype="application/x-www-form-urlencoded" class="flex-col gap-2.5 flex">
                <div class="mb-3 col-span-full">
                    <input type="text" name="email" id="email" autocomplete="email"
                        class="w-[375px] h-[38px] px-5 py-2.5 bg-neutral-200 rounded-md shadow justify-start items-center gap-2.5 inline-flex"
                        placeholder="Email">
                </div>
                <div class="mb-3 col-span-full">
                    <input type="password" name="password" id="password" autocomplete="password"
                        class="w-[375px] h-[38px] px-5 py-2.5 bg-neutral-200 rounded-md shadow justify-start items-center gap-2.5 inline-flex"
                        placeholder="Password">
                </div>
                <button
                    class="self-stretch px-5 py-2.5 bg-emerald-500 rounded-md shadow justify-center items-center gap-2.5 inline-flex text-white text-sm font-normal leading-[18px] hover:bg-red-500"
                    type="submit" value="submit">Masuk</button>
            </form>

            <div class="py-2.5 justify-center items-center gap-5 inline-flex">
                <div class="w-[148px] h-[0px] border-b border-zinc-800"></div>
                <div class="text-zinc-800 text-sm font-normal lowercase leading-[18px] tracking-tight">atau</div>
                <div class="w-[148px] h-[0px] border-b border-zinc-800"></div>
            </div>
            <button
                class="w-[375px] h-[38px] px-5 py-2.5 bg-white rounded-md shadow border border-zinc-300 justify-between items-center inline-flex hover:shadow-inner">
                <img class="w-[30px] h-[30px]" src="assets/images/google-icon.png" />
                <div class="text-stone-900 text-sm font-normal capitalize leading-[18px] tracking-tight">Masuk dengan
                    google </div>
                <div class="w-[30px] h-[30px]"></div>
            </button>
            <div class="w-[375px] justify-end items-center gap-2.5 inline-flex">
                <a href="#"
                    class="text-emerald-500 text-sm font-normal capitalize leading-[18px] tracking-tight hover:text-emerald-600">Lupa
                    Password?</a>
            </div>
            <div class="justify-center items-center gap-2.5 inline-flex w-[375px] ">
                <div class="text-justify"><span class="text-stone-900 text-sm font-normal leading-[15px]">Dengan masuk
                        ke aplikasi BAKA, kamu menyetujui segala </span><span
                        class="text-emerald-500 text-sm font-bold underline leading-[15px]">Syarat dan
                        Ketentuan</span><span class="text-stone-900 text-sm font-normal leading-[15px]"> dan
                    </span><span class="text-emerald-500 text-sm font-bold underline leading-[15px]">Kebijakan Privasi
                        BAKA</span><span style="text-stone-900 text-xs font-normal leading-[15px]">.</span></div>
            </div>
            <div class="px-2.5 justify-center items-center gap-2.5 inline-flex">
                <div>
                    <span class="text-stone-900 text-md font-normal capitalize leading-normal tracking-tight">Belum
                        Punya Akun? </span>
                    <a href="/register">
                        <span
                            class="text-emerald-500 text-md font-bold capitalize leading-normal tracking-tight hover:text-emerald-600">Daftar
                            Sekarang</span>
                    </a>
                </div>
            </div>
        </div>
    </div>\
    end content
    <img class="w-auto h-auto left-0 top-0 absolute z-0" src="assets/images/bg-login1.png" />
    <img class="w-auto h-auto bottom-0 right-0 absolute z-0" src="assets/images/bg-login2.png" />
</body>

</html>


////////////////// --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Bekasi Kami</title>
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="flex items-center justify-center min-h-screen">
    <div class="relative bg-white max-w-md mx-auto z-10 rounded-lg shadow-lg p-5 sm:w-[440px] w-[380px]">
        <div class="text-center mb-10">
            <div class="text-stone-900 text-3xl font-bold">Bekasi Kami</div>
            <div class="text-stone-900 text-sm font-normal capitalize mt-2">Selamat datang di Bekasi kami</div>
            <div class="text-stone-900 text-sm font-normal capitalize mt-1">Dapatkan informasi & berita terkini seputar
                bekasi</div>
        </div>

        <form action="http://127.0.0.1:8001/api/auth-login" method="POST" enctype="application/x-www-form-urlencoded">
            <div class="mb-3">
                <input type="text" name="email" id="email" autocomplete="email"
                    class="w-full h-10 px-3 bg-neutral-200 rounded-md shadow mb-2" placeholder="Email">
            </div>

            <div class="mb-3">
                <input type="password" name="password" id="password" autocomplete="password"
                    class="w-full h-10 px-3 bg-neutral-200 rounded-md shadow mb-2" placeholder="Password">
            </div>

            <button
                class="w-full h-10 bg-emerald-500 rounded-md shadow text-white text-sm font-normal leading-[18px] hover:bg-red-500 flex items-center justify-center"
                type="submit" value="submit">Masuk</button>
        </form>

        <div class="flex justify-center">
            <div class="py-2.5 justify-center items-center gap-5 inline-flex">
                <div class="w-[120px] h-[0px] border-b border-zinc-800"></div>
                <div class="text-zinc-800 text-sm font-normal lowercase leading-[18px] tracking-tight">atau</div>
                <div class="w-[120px] h-[0px] border-b border-zinc-800"></div>
            </div>
        </div>


        {{-- <div class="py-2.5 justify-center items-center gap-5">
            <div class="w-[148px] h-[0px] border-b border-zinc-800"></div>
            <div class="text-zinc-800 text-sm font-normal lowercase leading-[18px] tracking-tight">atau</div>
            <div class="w-[148px] h-[0px] border-b border-zinc-800"></div>
        </div> --}}

        <button
            class="w-full h-10 px-5 py-2.5 bg-white rounded-md shadow border border-zinc-300 flex items-center justify-between hover:shadow-inner">
            <img class="w-5 h-5" src="assets/images/google-icon.png" />
            <div class="text-stone-900 text-sm font-normal capitalize leading-[18px] tracking-tight">Masuk dengan
                google </div>
            <div class="w-5 h-5"></div>
        </button>

        <div class="w-full justify-end items-center pt-5 inline-flex">
            <a href="#"
                class="text-emerald-500 text-sm font-normal capitalize leading-[18px] tracking-tight hover:text-emerald-600">Lupa
                Password?</a>
        </div>

        <div class="justify-center items-center py-5 inline-flex">
            <div class="text-justify"><span class="text-stone-900 text-sm font-normal leading-[15px]">Dengan masuk ke
                    aplikasi BAKA, kamu menyetujui segala </span><span
                    class="text-emerald-500 text-sm font-bold underline leading-[15px]">Syarat dan
                    Ketentuan</span><span class="text-stone-900 text-sm font-normal leading-[15px]"> dan </span><span
                    class="text-emerald-500 text-sm font-bold underline leading-[15px]">Kebijakan Privasi
                    BAKA</span><span style="text-stone-900 text-xs font-normal leading-[15px]">.</span></div>
        </div>

        <div class="justify-center items-center gap-2.5 flex mx-auto">
            <div class="mx-auto">
                <span class="text-stone-900 text-md font-normal capitalize leading-normal tracking-tight">Belum Punya
                    Akun? </span>
                <a href="/register"
                    class="text-emerald-500 text-md font-bold capitalize leading-normal tracking-tight hover:text-emerald-600">Daftar
                    Sekarang</a>
            </div>
        </div>
    </div>

    <img class="w-full h-auto md:w-auto md:h-auto sm:h-auto sm:w-auto left-0 top-0 absolute z-0"
        src="assets/images/bg-login1.png" />
    <img class="w-full h-auto md:w-auto md:h-auto sm:h-auto sm:w-auto bottom-0 right-0 absolute z-0"
        src="assets/images/bg-login2.png" />
</body>

</html>
