<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.navbar')

    <main>
        <div class="container">
            <div class="notification-wrapper max-w-[500px] mx-auto my-auto">

                <div class="w-[450px] h-16 p-5 justify-start items-center gap-2.5 inline-flex">
                    <div class="text-center text-black text-base font-bold font-['Nunito'] leading-normal">Notifikasi
                    </div>
                </div>

                <div class="w-[450px] h-[19px] px-5 justify-start items-center gap-2.5 inline-flex">
                    <div class="text-black text-sm font-bold font-['Nunito']">Hari ini</div>
                </div>

                <div class="w-[450px] h-[71px] px-5 pt-5 pb-2.5 justify-start items-center gap-5 inline-flex">
                    <div class="justify-start items-start gap-2.5 flex">
                        <img class="w-10 h-10 rounded-[150px]" src="{{ $profile_image }}" />
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-center items-start gap-[5px] inline-flex">
                        <div><span
                                style="text-zinc-700 text-xs font-bold font-['Nunito'] leading-[18px]">{{ $nama }}</span><span
                                style="text-zinc-700 text-xs font-normal font-['Nunito'] leading-[18px]"> has created
                                new post.</span></div>
                        <div class="text-zinc-400 text-xs font-normal font-['Nunito'] leading-[18px]">09.12</div>
                    </div>
                </div>

                <div class="w-[450px] h-[71px] px-5 pt-5 pb-2.5 justify-start items-center gap-5 inline-flex">
                    <div class="justify-start items-start gap-2.5 flex">
                        <img class="w-10 h-10 rounded-[150px]" src="{{ $profile_image2 }}" />
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-center items-start gap-[5px] inline-flex">
                        <div><span
                                style="text-zinc-700 text-xs font-bold font-['Nunito'] leading-[18px]">{{ $nama2 }}</span><span
                                style="text-zinc-700 text-xs font-normal font-['Nunito'] leading-[18px]"> has following
                                you.</span></div>
                        <div class="text-zinc-400 text-xs font-normal font-['Nunito'] leading-[18px]">07.00</div>
                    </div>
                </div>

                <div class="w-[450px] h-[19px] mt-5 px-5 justify-start items-center gap-2.5 inline-flex">
                    <div class="text-black text-sm font-bold font-['Nunito']">Kemarin</div>
                </div>

                <div class="w-[450px] h-[71px] px-5 pt-5 pb-2.5 justify-start items-center gap-5 inline-flex">
                    <div class="justify-start items-start gap-2.5 flex">
                        <img class="w-10 h-10 rounded-[150px]" src="{{ $profile_image }}" />
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-center items-start gap-[5px] inline-flex">
                        <div><span
                                style="text-zinc-700 text-xs font-bold font-['Nunito'] leading-[18px]">{{ $nama }}</span><span
                                style="text-zinc-700 text-xs font-normal font-['Nunito'] leading-[18px]"> has created
                                new post.</span></div>
                        <div class="text-zinc-400 text-xs font-normal font-['Nunito'] leading-[18px]">09.12</div>
                    </div>
                </div>

                <div class="w-[450px] h-[71px] px-5 pt-5 pb-2.5 justify-start items-center gap-5 inline-flex">
                    <div class="justify-start items-start gap-2.5 flex">
                        <img class="w-10 h-10 rounded-[150px]" src="{{ $profile_image2 }}" />
                    </div>
                    <div class="grow shrink basis-0 flex-col justify-center items-start gap-[5px] inline-flex">
                        <div><span
                                style="text-zinc-700 text-xs font-bold font-['Nunito'] leading-[18px]">{{ $nama2 }}</span><span
                                style="text-zinc-700 text-xs font-normal font-['Nunito'] leading-[18px]"> has following
                                you.</span></div>
                        <div class="text-zinc-400 text-xs font-normal font-['Nunito'] leading-[18px]">07.00</div>
                    </div>
                </div>

            </div>
        </div>
    </main>

</body>

</html>
