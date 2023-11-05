<div class="relative mb-[80px]">
    <header class="fixed top-[-40px] left-0 right-0 mx-auto bg-white pb-[10px] border-b border-black">
          <div class="header-wrapper flex justify-between items-center mx-5">
                  <a href="/home" class="text-zinc-700 text-4xl font-bold font-sans leading-[54px] tracking-[2.52px] mr-[45px] mt-[25px]">BAKA</a>
              <div class="search mt-[25px] w-[450px] h-10 px-4 py-2 bg-gray-200 rounded-[10px] justify-start items-center gap-5 inline-flex">
                  <form action="#">
                    <img class="inline-block" src="assets/images/search-icon.svg" alt="" />
                    <input class="bg-transparent w-[350px] ml-[20] py-2 border-0 outline-0 text-zinc-700 text-opacity-60 text-sm font-normal font-['Nunito']" type="text" placeholder="Pencarian" />
                  </form>
                </div>
                
                
              <div class="menu-bar mt-[25px] w-[100px] h-[20px] pl-[79px] justify-end items-center gap-10 inline-flex" id="menu-bar">
                <img src="assets/images/bell-icon.svg" alt="" style="cursor: pointer">
                  <img src="assets/images/menu-bar.png" style="cursor: pointer" />
              </div>
          </div>
          {{-- <div class="option-menu">
              <a href="notification.html">Notification</a>
              <a href="#">Setting</a>
              <a href="#">About</a>
              <a href="#">Report a problem</a>
              <a href="#">Log out</a>
          </div> --}}
    </header>
</div>


<div class="w-[200px] h-auto pb-5 flex-col justify-center items-start gap-2.5 inline-flex fixed mt-[20px] left-[20px]">

    <a href="/home" class="self-stretch px-4 py-2 hover:bg-zinc-100 rounded-[7px] justify-start items-center gap-2.5 inline-flex">
      <div class="w-[14px] h-[15px] relative">
        <img src="assets/images/home-icon.svg" alt="Icon Home">
      </div>
      <div class="text-zinc-700 text-xs font-medium font-['Poppins'] leading-[18px] tracking-tight">Beranda</div>
    </a>
    
    <a href="/" class="self-stretch px-4 py-2 hover:bg-zinc-100 rounded-[7px] justify-start items-center gap-2.5 inline-flex">
      <div class="w-[14px] h-[15px] relative">
        <img src="assets/images/post-icon.svg" alt="Icon Posting">
      </div>
      <div class="text-zinc-700 text-xs font-medium font-['Poppins'] leading-[18px] tracking-wide">Posting</div>
    </a>

    <a href="/" class="self-stretch px-4 py-2 hover:bg-zinc-100 rounded-[7px] justify-start items-center gap-2.5 inline-flex">
      <div class="w-[14px] h-[15px] relative">
        <img src="assets/images/chart-icon.svg" alt="Icon Trending">
      </div>
      <div class="text-zinc-700 text-xs font-medium font-['Poppins'] leading-[18px] tracking-wide">Trending</div>
    </a>

    <a href="/profile" class="self-stretch px-4 py-2 hover:bg-zinc-100 rounded-[7px] justify-start items-center gap-2.5 inline-flex">
      <div class="w-[14px] h-[15px] relative">
        <img src="assets/images/profile-icon.svg" alt="">
      </div>
      <div class="text-zinc-700 text-xs font-medium font-['Poppins'] leading-[18px] tracking-wide">Profile</div>
    </a>

  </div>


  {{-- border-slate-900/10 --}}