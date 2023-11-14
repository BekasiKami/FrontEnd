<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Profile</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- <link rel="stylesheet" href="assets/css/global.css" /> --}}
    {{-- <link rel="stylesheet" href="assets/css/editprofile.css" /> --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    @include('partials.navbar')
    @include('partials.sidebar')

    <main>
        <div class="container max-w-5xl pt-36">

            {{-- sidebar kiri --}}
            @include('partials.edit')

            
            <div class="edit-profile-wrapper max-w-[500px]  ml-[380px]">
                <div class="back-to-userprofile">
                    <span class="text-[rgba(69,69,69,1)] text-xl font-bold ml-[5px]">Edit profile</span>
                </div>
                <div class="edit-profile relative mx-0 my-6 px-8 py-4">
                    <div class="edit-header grid grid-cols-[0.5fr_1.2fr] mb-[15px]">
                        <img class="w-[100px] h-[100px]" src="assets/images/jessica.svg" alt="" />
                        <div class="edit-profile-description">
                            <div class="edit-profile-description-top flex items-center justify-between mb-5">
                                <h4 class="text-xl font-normal text-[rgba(69,69,69,1)]">Jessica_</h4>
                            </div>
                            <button class="text-blue-600 font-bold bg-transparent text-base border-0">Edit foto profil</button>
                        </div>
                    </div>


                    <form class="ml-7 mt-10">
                        <div class="mb-6 w-[400px] h-[38px] justify-center items-center gap-[30px] inline-flex">
                            <label for="username"
                                class="h-6 justify-end items-center flex text-black text-base font-normal font-poppins leading-normal">Username</label>
                            <input type="username" id="username"
                                class="w-[300px] h-[38px] px-5 py-2.5 bg-white rounded-lg border border-zinc-700 justify-start items-center gap-2.5 flex text-zinc-800 text-xs font-normal font-poppins"
                                placeholder="Username">
                        </div>
                        <div class="mb-6 w-[432px] h-[38px] justify-center items-center gap-[30px] inline-flex">
                            <label for="name"
                                class="h-6 justify-end items-center flex text-black text-base font-normal font-poppins leading-normal">Nama</label>
                            <input type="name" id="name"
                                class="w-[300px] h-[38px] px-5 py-2.5 bg-white rounded-lg border border-zinc-700 justify-start items-center gap-2.5 flex text-zinc-800 text-xs font-normal font-poppins"
                                placeholder="Nama">
                        </div>
                        <div class="mb-6 w-[432px] h-[38px] justify-center items-center gap-[30px] inline-flex">
                            <label for="email"
                                class="h-6 justify-end items-center flex text-black text-base font-normal font-poppins leading-normal">Email</label>
                            <input type="email" id="email"
                                class="w-[300px] h-[38px] px-5 py-2.5 bg-white rounded-lg border border-zinc-700 justify-start items-center gap-2.5 flex text-zinc-800 text-xs font-normal font-poppins"
                                placeholder="Email">
                        </div>
                        <div class="ml-[100px] w-auto">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55">Simpan</button>
                        </div>
                    </form>



                </div>
            </div>
            
        </div>
    </main>

    {{-- <script src="../js/app.js"></script> --}}
</body>

</html>
