<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $title }}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link rel="stylesheet" href="assets/css/global.css" /> --}}
    {{-- <link rel="stylesheet" href="assets/css/userprofile.css" /> --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>
    @include('partials.navbar')

    <main>
      <div class="container">
        <div class="profile-wrapper max-w-[440px] mx-auto my-[5.2rem]">
          <div class="w-[439px] h-[140px] py-5 justify-center items-center gap-[25px] inline-flex">
            <img class="w-[100px] h-[100px] rounded-full shadow" src="/assets/images/jessica.svg" />
              <div class="flex-col justify-start items-start inline-flex">
                  <div class="w-[314px] h-[75px] pb-2.5 flex-col justify-start items-start gap-2.5 flex">
                    <div class="self-stretch justify-between items-center inline-flex">
                      <div class="text-black text-sm font-bold font-['Poppins'] leading-[21px]">Kevin86</div>
                      <button class="px-4 py-2 bg-neutral-200 rounded-[10px] shadow justify-start items-center gap-2.5 flex">
                        <div class="text-black text-xs font-normal font-['Poppins'] leading-[18px]">Edit profile</div>
                      </button>
                    </div>
                    <div class="text-black text-xs font-normal font-['Poppins'] leading-[18px]">Kevin Sanjaya</div>
                  </div>
                <div class="w-[314px] justify-between items-center inline-flex">
                    <div class="text-black text-sm font-normal font-['Poppins'] leading-[21px]">6 Postingan</div>
                    <div class="text-black text-sm font-normal font-['Poppins'] leading-[21px]">3 Tersimpan</div>
                </div>
            </div>
        </div>

        <div class="w-[440px] h-[77px] p-5 justify-between items-center inline-flex">
          <button class="px-4 py-2 rounded-[10px] shadow border border-emerald-500 justify-start items-center gap-2.5 flex">
              <div class="text-emerald-500 text-xs font-normal font-['Poppins'] leading-[21px]">Postingan</div>
          </button>
          <button class="px-4 py-2 bg-emerald-500 rounded-[10px] shadow justify-start items-center gap-2.5 flex">
              <div class="text-white text-xs font-normal font-['Poppins'] leading-[21px]">Tersimpan</div>
          </button>
      </div>

      <div class="w-[440px] h-[0px] border-2 border-stone-900"></div>

          <div class="w-[440px] h-[183px] py-5 justify-start items-start gap-[5px] inline-flex">
            <img class="w-[143px] h-[143px] cursor-pointer" src="assets/images/post-1.png" />
            <img class="w-[143px] h-[143px] cursor-pointer" src="assets/images/post-2.png" />
            <img class="w-[143px] h-[143px] cursor-pointer" src="assets/images/post-3.png" />
        </div>

          
        </div>
      </div>
    </main>

    <script src="../js/app.js"></script>
  </body>
</html>
