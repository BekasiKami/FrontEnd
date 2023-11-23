<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Bekasi Kami</title>
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    {{-- <a href="/" class="left-10 self-stretch px-5 py-2.5 bg-emerald-500 rounded-md shadow inline-flex text-white text-sm font-normal leading-[18px] hover:bg-red-500">
    <button>Kembali</button>
    </a> --}}
    <form id="register_form" class="relative bg-white max-w-md mx-auto z-10">
        <div class="flex min-h-full bg-gray-white rounded-[20px] flex-col justify-center items-center gap-5">
            <div class="px-2.5 justify-center items-center gap-10 inline-flex flex-col">
                <div class="text-stone-900 text-5xl font-bold">Bekasi Kami</div>
                <div class="text-stone-900 text-md font-normal capitalize leading-normal tracking-tight">Lengkapi data
                    berikut untuk bergabung bersama Kami</div>
            </div>
            <div class="px-5 flex-row justify-start items-center gap-5 flex">
                <div class="w-[125px] h-[5px] bg-emerald-500 rounded-[10px]"></div>
                <div class="w-[125px] h-[5px] bg-zinc-300 rounded-[10px]"></div>
            </div>

            <div class="flex-col gap-2 flex">
                <div class="text-stone-900 text-sm font-normal font-['Poppins'] mt-2">Masukan Namamu</div>

                <input type="text" name="fullname" id="fullname" autocomplete="fullname"
                    class="w-[375px] h-[38px] px-5 py-2.5 bg-neutral-200 rounded-md shadow justify-start items-center gap-2.5 inline-flex"
                    placeholder="Nama">

                <div class="mt-5 text-stone-900 text-sm font-normal font-['Poppins']">Masukan Username yang ingin kamu
                    gunakan</div>

                <input type="text" name="username" id="username" autocomplete="username"
                    class="w-[375px] h-[38px] px-5 py-2.5 bg-neutral-200 rounded-md shadow justify-start items-center gap-2.5 inline-flex"
                    placeholder="Username">

                
                    
                    <button class="mt-2 self-stretch px-5 py-2.5 bg-emerald-500 rounded-md shadow justify-center items-center gap-2.5 inline-flex text-white text-sm font-normal leading-[18px] hover:bg-red-500" type="submit">Selanjutnya</button>


            </div>

            <div class="px-2.5 justify-center items-center gap-2.5 mt-5 inline-flex">
                <div>
                    <span class="text-stone-900 text-md font-normal capitalize leading-normal tracking-tight">Sudah
                        Punya Akun? </span>
                    <a href="/">
                        <span
                            class="text-emerald-500 text-md font-bold capitalize leading-normal tracking-tight hover:text-emerald-600">Masuk</span>
                    </a>
                </div>
            </div>
        </div>
    </form>
    <img class="w-auto h-auto right-0 top-0 absolute z-0" src="assets/images/bg-regis2-icon1.png" />
    <img class="w-auto h-auto bottom-0 left-0 absolute z-0" src="assets/images/bg-regis2-icon2.png" />
</body>

<script>
    $(document).ready(function(){
        $("#register_form").submit(function(event){
            event.preventDefault();

            var fromData = $(this).serialize();

            $.ajax({
                url:"http://127.0.0.1:8001/api/user",
                type:"POST",
                data:fromData,
                success:function(data){
                    console.log(data);
                }
            });
        });
    });
</script>

</html>
