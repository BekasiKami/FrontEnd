<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bekasi Kami | Register</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="grid grid-cols-3">
        <div class="w-[115.12px] h-[38px] px-5 py-2.5 bg-emerald-500 rounded-[10px] shadow justify-center items-center gap-2.5 inline-flex">
            <div class="w-[13.12px] h-[15px] relative"></div>
            <div class="text-white text-xs font-medium font-['Poppins'] capitalize leading-[18px] tracking-tight">Kembali</div>
        </div>
        <div class="bg-red-700 w-[440px] min-h-screen max-w-lg mx-auto flex-col justify-center items-center">
            <div class="flex min-h-full bg-gray-white rounded-[20px] flex-col justify-center items-center gap-5">
                <div class="px-2.5 justify-center items-center gap-2.5 inline-flex">
                    <div class="text-stone-900 text-5xl font-bold">Bekasi Kami</div>
                </div>
                <div class="px-5 flex-col justify-start items-center gap-2.5 flex">
                    <div class="text-stone-900 text-md font-normal capitalize leading-normal tracking-tight">Selamat datang di Bekasi kami</div>
                    <div class="text-stone-900 text-md font-normal capitalize leading-normal tracking-tight">Dapatkan informasi & berita terkini seputar bekasi</div>
                </div>
                
                
                <form class="w-[375px]">
                    <div class="mb-6">
                        <label for="nama" class="block mb-2 text-md font-medium text-gray-900">Masukan Namamu!</label>
                        <input type="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-3.5" placeholder="Nama lengkap" required>
                    </div> 
                    <div class="mb-6">
                        <label for="nama" class="block mb-2 text-md font-medium text-gray-900">Masukan Username yang ingin kamu gunakan!</label>
                        <input type="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-3.5" placeholder="Username" required>
                    </div> 
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center">Submit</button>
                </form>
                <div class="px-2.5 justify-center items-center gap-2.5 inline-flex">
                    <div>
                      <span class="text-stone-900 text-md font-normal capitalize leading-normal tracking-tight">Sudah Punya Akun? </span>
                        <a href="/register">
                          <span class="text-emerald-500 text-md font-bold capitalize leading-normal tracking-tight hover:text-emerald-600">Masuk</span>
                        </a>
                      </div>
                </div>
            </div>
        </div>
    </div>


    {{--  --}}

</body>
</html>