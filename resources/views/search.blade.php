<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $title }}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- <link rel="stylesheet" href="assets/css/global.css" /> --}}
    {{-- <link rel="stylesheet" href="assets/css/search.css" /> --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>
    @include('partials.navbar');

    <main>
      <div class="container">
        <div class="search-wrapper max-w-[500px] mx-auto my-[5.2rem]">
          <div class="search w-[500px] h-[57px] px-5 py-4 bg-neutral-200 rounded-[10px] justify-start items-center gap-5 inline-flex">
            <img src="assets/images/search-icon-active.svg" alt="" />
            <form action="#">
              <input class="bg-transparent w-[400px] ml-[20] py-2 border-0 outline-0 text-zinc-700 text-opacity-60 text-sm font-normal font-['Nunito']" type="text" placeholder="Search" />
            </form>
          </div>

          <div class="w-[500px] h-[61px] p-5 justify-start items-center gap-2.5 inline-flex">
            <div class="text-center text-zinc-700 text-sm font-bold font-['Nunito'] leading-[21px] tracking-wide">Riwayat Pencarian</div>
          </div>

          <div class="w-[500px] h-[41px] py-2.5 justify-between items-center inline-flex">
            <div class="px-5 justify-start items-center gap-2.5 flex">
                <div class="text-center text-zinc-700 text-sm font-normal font-['Nunito'] leading-[21px]">Banjir susulan</div>
            </div>
            <div class="px-5 justify-end items-center gap-2.5 flex">
              <img src="assets/images/close-icon.svg" alt="" />
            </div>
          </div>

          <div class="w-[500px] h-[41px] py-2.5 justify-between items-center inline-flex">
            <div class="px-5 justify-start items-center gap-2.5 flex">
                <div class="text-center text-zinc-700 text-sm font-normal font-['Nunito'] leading-[21px]">Kebakaran di kranji</div>
            </div>
            <div class="px-5 justify-end items-center gap-2.5 flex">
              <img src="assets/images/close-icon.svg" alt="" />
            </div>
          </div>

          <div class="w-[500px] h-[41px] py-2.5 justify-between items-center inline-flex">
            <div class="px-5 justify-start items-center gap-2.5 flex">
                <div class="text-center text-zinc-700 text-sm font-normal font-['Nunito'] leading-[21px]">Badai hujan bekasi barat</div>
            </div>
            <div class="px-5 justify-end items-center gap-2.5 flex">
              <img src="assets/images/close-icon.svg" alt="" />
            </div>
          </div>

        </div>
      </div>
    </main>

    <script src="../js/app.js"></script>
  </body>
</html>
