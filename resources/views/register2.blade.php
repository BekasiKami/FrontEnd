<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register | Bekasi Kami</title>
  {{-- @vite('resources/css/app.css') --}}
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  {{-- <a href="/" class="left-10 self-stretch px-5 py-2.5 bg-emerald-500 rounded-md shadow inline-flex text-white text-sm font-normal leading-[18px] hover:bg-red-500">
    <button>Kembali</button>
    </a> --}}
  <form class="relative bg-white max-w-md mx-auto top-52 z-10">
      <div class="flex min-h-full bg-gray-white rounded-[20px] flex-col justify-center items-center gap-5">
          <div class="px-2.5 justify-center items-center gap-10 inline-flex flex-col">
              <div class="text-stone-900 text-5xl font-bold">Bekasi Kami</div>
              <div class="text-stone-900 text-md font-normal capitalize leading-normal tracking-tight">Lengkapi data berikut untuk bergabung bersama Kami</div>
          </div>
          <div class="px-5 flex-row justify-start items-center gap-5 flex">
            <div class="w-[125px] h-[5px] bg-emerald-500 rounded-[10px]"></div>
            <div class="w-[125px] h-[5px] bg-emerald-500 rounded-[10px]"></div>
          </div>

          <div class="flex-col gap-2 flex">
            <div class="text-stone-900 text-sm font-normal font-['Poppins'] mt-2">Masukan Email Kamu</div>

            <input type="email" name="email" id="email" autocomplete="email" class="w-[375px] h-[38px] px-5 py-2.5 bg-neutral-200 rounded-md shadow justify-start items-center gap-2.5 inline-flex" placeholder="Email">

              <div class="mt-5 text-stone-900 text-sm font-normal font-['Poppins']">Masukan Password</div>

              <input type="password" name="password" id="password" autocomplete="password" class="w-[375px] h-[38px] px-5 py-2.5 bg-neutral-200 rounded-md shadow justify-start items-center gap-2.5 inline-flex" placeholder="Password">

            <a href="/" class="mt-2 self-stretch px-5 py-2.5 bg-emerald-500 rounded-md shadow justify-center items-center gap-2.5 inline-flex text-white text-sm font-normal leading-[18px] hover:bg-red-500">
              <button>Selanjutnya</button>
              </a>

          </div>

          <div class="px-2.5 justify-center items-center gap-2.5 mt-5 inline-flex">
              <div>
                <span class="text-stone-900 text-md font-normal capitalize leading-normal tracking-tight">Sudah Punya Akun? </span>
                  <a href="/">
                    <span class="text-emerald-500 text-md font-bold capitalize leading-normal tracking-tight hover:text-emerald-600">Masuk</span>
                  </a>
                </div>
          </div>
      </div>
  </form>
    <img class="w-auto h-auto right-0 top-0 absolute z-0" src="assets/images/bg-regis2-icon1.png" />
    <img class="w-auto h-auto bottom-0 left-0 absolute z-0" src="assets/images/bg-regis2-icon2.png" />
</body>
</html>