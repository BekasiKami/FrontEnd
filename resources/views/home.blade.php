<!DOCTYPE html>
<html lang="en">

{{-- Head Section --}}

<head>
    @include('partials.head')
</head>
{{-- End of Head --}}

{{-- Body Section --}}

<body>
    {{-- Navbar --}}
    @include('partials.navbar')
    {{-- Home Category --}}
    @include('partials.category')
    {{-- Trending --}}
    @include('partials.trending')
    {{-- Home Content --}}
    <main>
        <div class="container mx-auto md:max-lg:w-[400px]">
            <section class="w-[450px] mx-auto">
                <div class="grid grid-rows-[0.5fr_3fr] gap-[15px] mx-0 mt-[10px] py-[1.2rem]">
                    <div class="">
                        <div class="w-[450px] h-[50px] p-2.5 justify-between items-center inline-flex">
                            <div class="justify-center items-center gap-5 flex">
                                <img class="w-[30px] h-[30px] rounded-[250px] border border-zinc-600"
                                    src="{{ $profile_image }}" />
                                <div class="text-center text-zinc-700 text-sm font-normal">silver.ash
                                </div>
                            </div>
                            <div class="justify-center items-center gap-5 flex">
                                <div class="text-center text-zinc-700 text-opacity-60 text-xs font-normal">
                                    {{ $post_time }}
                                </div>
                                <button class="bg-transparent cursor-pointer border-0">
                                    <img src="assets/images/three-dots.png" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="posted-image">
                            <img class="w-[450px] h-[268px] rounded-[10px]" src="{{ $image }}" />
                        </div>

                        <div class="w-[133.75px] h-[60px] p-5 justify-start items-start gap-5 inline-flex">
                            <button class="likes w-4 h-4">
                                <img src="assets/images/arrow-turn-up-solid.svg" alt="" />
                            </button>
                            <button class="comments w-5 h-5">
                                <img src="assets/images/message-regular.svg" alt="" />
                            </button>
                            <button class="share w-5 h-5">
                                <img src="assets/images/share-icon.svg" alt="" />
                            </button>
                        </div>

                        <div
                            class="posted-activities w-[450px] h-4 px-5 justify-start items-center gap-2.5 inline-flex">
                            <span
                                class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $upvotes }}</span>
                            <span class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">-</span>
                            <span
                                class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $comments }}</span>
                        </div>
                        <div class="w-[450px] h-[97px] p-5 justify-center items-center gap-2.5 inline-flex">
                            <div class="w-[397px] text-zinc-700 text-sm font-normal">
                                {{ $caption }}
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="w-[450px] h-[50px] p-2.5 justify-between items-center inline-flex">
                            <div class="justify-center items-center gap-5 flex">
                                <img class="w-[30px] h-[30px] rounded-[250px] border border-zinc-600"
                                    src="{{ $profile_image }}" />
                                <div class="text-center text-zinc-700 text-sm font-normal">silver.ash
                                </div>
                            </div>
                            <div class="justify-center items-center gap-5 flex">
                                <div class="text-center text-zinc-700 text-opacity-60 text-xs font-normal">
                                    {{ $post_time }}
                                </div>
                                <button class="bg-transparent cursor-pointer border-0">
                                    <img src="assets/images/three-dots.png" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="posted-image">
                            <img class="w-[450px] h-[268px] rounded-[10px]" src="{{ $image }}" />
                        </div>

                        <div class="w-[133.75px] h-[60px] p-5 justify-start items-start gap-5 inline-flex">
                            <button class="likes w-4 h-4">
                                <img src="assets/images/arrow-turn-up-solid.svg" alt="" />
                            </button>
                            <button class="comments w-5 h-5">
                                <img src="assets/images/message-regular.svg" alt="" />
                            </button>
                            <button class="share w-5 h-5">
                                <img src="assets/images/share-icon.svg" alt="" />
                            </button>
                        </div>

                        <div
                            class="posted-activities w-[450px] h-4 px-5 justify-start items-center gap-2.5 inline-flex">
                            <span
                                class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $upvotes }}</span>
                            <span class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">-</span>
                            <span
                                class="text-center text-zinc-700 text-opacity-70 text-xs font-normal">{{ $comments }}</span>
                        </div>
                        <div class="w-[450px] h-[97px] p-5 justify-center items-center gap-2.5 inline-flex">
                            <div class="w-[397px] text-zinc-700 text-sm font-normal">
                                {{ $caption }}
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </main>
    {{-- End Content --}}

    <script src="assets/js/app.js"></script>
</body>
{{-- End of Body --}}

</html>
