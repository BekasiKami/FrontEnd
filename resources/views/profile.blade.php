<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.modal.modal-posting')
    @include('partials.navbar')

    {{-- TOKEN CHECK --}}
    @if (session()->has('token'))
        {{-- <p>Your token: {{ session('token') }}</p> --}}
        <script>
            // Save the token to session storage
            sessionStorage.setItem('token', '{{ session('token') }}');
        </script>
    @else
        <p>No token available.</p>
    @endif
    {{-- END TOKEN CHECK --}}

    {{-- TOKEN STORAGE SCRIPT --}}
    <script>
        // Retrieve the token from session storage
        const jwtToken = sessionStorage.getItem('token');

        // Check if the token is available
        if (jwtToken) {
            // Add the token to the headers (JavaScript)
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('#xxx-token').setAttribute('value', jwtToken);
            });
        } else {
            console.error('JWT token not found in session storage.');
        }
    </script>
    {{-- END TOKEN STORAGE SCRIPT --}}

    <main>
        <div class="container mt-20">
            <div class="profile-wrapper md:max-w-[440px] mx-auto my-[5.2rem]">
                {{-- <div class="flex">
                    <div class="inline-flex w-full h-auto py-5 px-4 justify-between items-center gap-[25px]">
                        <img class="w-[100px] h-[100px] rounded-full shadow" src="/assets/images/jessica.svg" />
                        <div class="flex-col w-full justify-start items-start inline-flex">
                            <div class="w-full h-auto pb-2.5 flex-col justify-start items-start flex">
                                <div class="justify-between items-center inline-flex w-[284px]">
                                    <div class="text-black text-sm font-bold font-['Poppins'] leading-[21px]">Kevin86</div>
                                    <a href="/editprofile"
                                        class="px-4 py-2 bg-neutral-200 rounded-[10px] shadow justify-end items-center flex">
                                        <div class="text-black text-xs font-normal font-['Poppins'] leading-[18px]">Edit
                                            profile</div>
                                    </a>
                                </div>
                            </div>
                            <div class="pb-2.5 w-full justify-start flex text-black text-xs font-normal font-['Poppins'] leading-[18px]">Kevin Sanjaya
                            </div>
                            <div class="w-full justify-between items-center inline-flex">
                                <div class="text-black text-sm font-normal font-['Poppins'] leading-[21px]">6 Postingan
                                </div>
                                <div class="text-black text-sm font-normal font-['Poppins'] leading-[21px] justify-end">3 Tersimpan
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="flex flex-col sm:flex-row">
                    <div class="inline-flex w-full h-auto py-5 px-4 sm:px-8 justify-between items-center gap-4 sm:gap-8">
                        <img class="w-20 h-20 sm:w-24 sm:h-24 rounded-full shadow" src="/assets/images/jessica.svg" />
                        <div class="flex-col w-full justify-start items-start inline-flex">
                            <div class="w-full h-auto pb-2.5 flex-col justify-start items-start flex">
                                <div class="justify-between items-center inline-flex w-full sm:w-[284px]">
                                    <div class="text-black text-sm font-bold font-'Poppins' leading-5">{{ $result['user']['username']; }}</div>
                                    <a href="/editprofile"
                                        class="px-4 py-2 bg-neutral-200 rounded-[10px] shadow justify-end items-center flex">
                                        <div class="text-black text-xs font-normal font-'Poppins' leading-4">Edit
                                            profile</div>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="pb-2.5 w-full justify-start flex text-black text-xs font-normal font-'Poppins' leading-4">
                                {{ $result['user']['fullname']; }}
                            </div>
                            <div class="w-full justify-between items-center inline-flex">
                                <div class="text-black text-sm font-normal font-'Poppins' leading-5">{{ count($posting['post']) }} Postingan</div>
                                {{-- <div class="text-black text-sm font-normal font-'Poppins' leading-5 sm:justify-end">3
                                    Tersimpan
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="w-full h-auto py-5 justify-between items-center inline-flex px-4">
                    <button
                        class="px-4 py-2 rounded-[10px] shadow border border-emerald-500 justify-start items-center flex">
                        <div class="text-emerald-500 text-xs font-normal font-['Poppins'] leading-[21px]">Postingan
                        </div>
                    </button>
                    <button class="px-4 py-2 bg-emerald-500 rounded-[10px] shadow justify-start items-center flex">
                        <div class="text-white text-xs font-normal font-['Poppins'] leading-[21px]">Tersimpan</div>
                    </button>
                </div> --}}

                <div class="w-full h-[0px] border-2 border-stone-900"></div>


                <div class="w-full grid grid-cols-2 md:grid-cols-3 py-5 gap-1">
                    <div>
                        <img class="h-auto max-w-full"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt=""
                            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg')">
                    </div>
                    <div>
                        <img class="h-auto max-w-full"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt=""
                            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg')">
                    </div>
                    <div>
                        <img class="h-auto max-w-full"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt=""
                            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg')">
                    </div>
                    <div>
                        <img class="h-auto max-w-full"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt=""
                            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg')">
                    </div>
                    <div>
                        <img class="h-auto max-w-full"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt=""
                            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg')">
                    </div>
                    <div>
                        <img class="h-auto max-w-full"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt=""
                            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg')">
                    </div>
                    <div>
                        <img class="h-auto max-w-full"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt=""
                            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg')">
                    </div>
                    <div>
                        <img class="h-auto max-w-full"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt=""
                            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg')">
                    </div>
                    <div>
                        <img class="h-auto max-w-full"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt=""
                            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg')">
                    </div>
                    <div>
                        <img class="h-auto max-w-full"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt=""
                            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg')">
                    </div>
                    <div>
                        <img class="h-auto max-w-full"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt=""
                            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg')">
                    </div>
                    <div>
                        <img class="h-auto max-w-full"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt=""
                            onclick="showModal('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg')">
                    </div>
                </div>
            </div>

            {{-- <div class="mb-5 max-w-[500px]">
            <figure class="md:flex bottom-5 bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800">
                <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="" onclick="showModal('')" width="384"
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
            </div> --}}
        </div>
    </main>
    <script src="../js/app.js"></script>
    <script src="../js/post.js"></script>
</body>

</html>
