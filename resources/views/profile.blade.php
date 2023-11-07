<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.head')
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
                                <a href="/editprofile"
                                    class="px-4 py-2 bg-neutral-200 rounded-[10px] shadow justify-start items-center gap-2.5 flex">
                                    <div class="text-black text-xs font-normal font-['Poppins'] leading-[18px]">Edit profile</div>
                            </a>
                            </div>
                            <div class="text-black text-xs font-normal font-['Poppins'] leading-[18px]">Kevin Sanjaya
                            </div>
                        </div>
                        <div class="w-[314px] justify-between items-center inline-flex">
                            <div class="text-black text-sm font-normal font-['Poppins'] leading-[21px]">6 Postingan
                            </div>
                            <div class="text-black text-sm font-normal font-['Poppins'] leading-[21px]">3 Tersimpan
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-[440px] h-[77px] p-5 justify-between items-center inline-flex">
                    <button
                        class="px-4 py-2 rounded-[10px] shadow border border-emerald-500 justify-start items-center gap-2.5 flex">
                        <div class="text-emerald-500 text-xs font-normal font-['Poppins'] leading-[21px]">Postingan
                        </div>
                    </button>
                    <button
                        class="px-4 py-2 bg-emerald-500 rounded-[10px] shadow justify-start items-center gap-2.5 flex">
                        <div class="text-white text-xs font-normal font-['Poppins'] leading-[21px]">Tersimpan</div>
                    </button>
                </div>

                <div class="w-[440px] h-[0px] border-2 border-stone-900"></div>


                <div class="grid grid-cols-2 md:grid-cols-3 py-5 gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
                    </div>
                </div>

                {{-- <div class="w-[440px] h-[183px] py-5 justify-start items-start gap-[5px] inline-flex">
            <img class="w-[143px] h-[143px] cursor-pointer" src="assets/images/post-1.png" />
            <img class="w-[143px] h-[143px] cursor-pointer" src="assets/images/post-2.png" />
            <img class="w-[143px] h-[143px] cursor-pointer" src="assets/images/post-3.png" />
        </div> --}}

            </div>

            <div class="mb-5 max-w-[500px]">
            <figure class="md:flex bottom-5 bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800">
                <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="" width="384"
                    height="512">
                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                    <blockquote>
                        <p class="text-lg font-medium">
                            “Tailwind CSS is the only framework that I've seen scale
                            on large teams. It’s easy to customize, adapts to any design,
                            and the build size is tiny.”
                        </p>
                    </blockquote>
                    <figcaption class="font-medium">
                        <div class="text-sky-500 dark:text-sky-400">
                            Sarah Dayan
                        </div>
                        <div class="text-slate-700 dark:text-slate-500">
                            Staff Engineer, Algolia
                        </div>
                    </figcaption>
                </div>
            </figure>
            </div>

        </div>
    </main>

    <script src="../js/app.js"></script>
</body>

</html>
