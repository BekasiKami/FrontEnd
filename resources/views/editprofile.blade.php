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
    {{-- @include('partials.navbar') --}}
    {{-- @include('partials.sidebar') --}}

    <main>
        <div class="container">
            <a href="/profile">
                <button type="button"
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                    <img class="mr-2" src="../assets/images/back-arrow.svg" alt="" />
                    Kembali
                </button>
            </a>

            <div class="edit-profile-wrapper max-w-[500px] mx-auto my-12">
                <div class="back-to-userprofile">
                    <span class="text-[rgba(69,69,69,1)] text-xl font-bold ml-[5px]">Edit profile</span>
                </div>
                <div class="edit-profile relative mx-0 my-6 px-8 py-4">
                    <div class="edit-header grid grid-cols-[0.5fr_1.2fr] mb-[15px]">
                        <img class="w-[100px] h-[100px]" src="assets/images/jessica.svg" alt="" />
                        <div class="edit-profile-description">
                            <div class="edit-profile-description-top flex items-center justify-between mb-5">
                                <h4 class="text-xl font-normal text-[rgba(69,69,69,1)]">Jessica_</h4>
                                <button
                                    class="text-[rgba(101,122,213,1)] text-xl font-bold bg-transparent cursor-pointer border-0">Change
                                    Password</button>
                            </div>
                            <button class="text-[rgba(223,84,104,1)] font-bold bg-transparent text-base border-0">Change
                                photo profile</button>
                        </div>
                    </div>


                    <form>
                        <div class="mb-6">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" id="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="name@flowbite.com" required>
                        </div>
                        <div class="mb-6">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                password</label>
                            <input type="password" id="password"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                required>
                        </div>
                        <div class="mb-6">
                            <label for="repeat-password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat
                                password</label>
                            <input type="password" id="repeat-password"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                required>
                        </div>
                        <div class="flex items-start mb-6">
                            <div class="flex items-center h-5">
                                <input id="terms" type="checkbox" value=""
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                    required>
                            </div>
                            <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                agree with the <a href="#"
                                    class="text-blue-600 hover:underline dark:text-blue-500">terms and
                                    conditions</a></label>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
                            new account</button>
                    </form>



                </div>
            </div>
        </div>
    </main>

    <script src="../js/app.js"></script>
</body>

</html>
