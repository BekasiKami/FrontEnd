{{-- <div class="max-w-[300px] h-auto flex-col flex items-center justify-center fixed">
    <a href="/profile">
        <button type="button"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2 inline-flex text-center dark:focus:ring-[#3b5998]/55">
            <img class="mr-2" src="assets/icons/back-arrow-icon.svg" alt="" />
            Kembali
        </button>
    </a>

    <ul class="space-y-2 font-medium mt-10">
        <li>
           <a href="/editprofile" class="w-[200px] h-[34px] px-4 py-2 bg-neutral-200 rounded-[7px] justify-start items-center gap-2.5 inline-flex dark:focus:ring-[#3b5998]/55">
              <span class="text-zinc-600 text-sm font-normal font-['Poppins'] leading-[18px]">Edit profile</span>
           </a>
        </li>
        <li>
           <a href="/changepassword" class="w-[200px] h-[34px] px-4 py-2 justify-start items-center gap-2.5 inline-flex dark:focus:ring-[#3b5998]/55">
              <span class="text-zinc-700 text-sm font-normal font-['Poppins'] leading-[18px]">Ubah kata sandi</span>
           </a>
        </li>
     </ul>
</div> --}}

<div class="w-full h-auto flex items-center justify-center mx-auto">
   <div class="px-8 grid grid-cols-3 gap-4 text-center">
      <div class="col-start-1 col-span-1 ...">
         <a href="/profile">
            <button type="button"
               class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2 inline-flex text-center dark:focus:ring-[#3b5998]/55">
               <img class="mr-2" src="assets/icons/back-arrow-icon.svg" alt="" />
               Kembali
            </button>
         </a>
      </div>
      {{-- <div class="col-start-1 col-end-3 ...">02</div>
      <div class="col-end-7 col-span-2 ...">03</div> --}}
      <div class="col-start-1 col-end-4 ...">
         <a href="/editprofile" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Ubah Profile</a>
         <a href="/changepassword" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5">Ubah Kata Sandi</a>
      </div>
   </div>
</div> 