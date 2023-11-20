<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="footer grid grid-cols-12 items-start bg-[#334155]">
        <div class=" flex  flex-wrap items-center justify-center gap-3 col-span-12 
         sm:col-span-6 sm:justify-start px-10 py-6">
            <div class="flex items-center gap-2 w-full justify-center sm:justify-start">
                <img src="{{ asset('storage/gambar/Logomark.png') }}" alt=""> <br>
                <h3 class="text-xl font-semibold text-white">Aksacademy</h3>
            </div>
            <p class="text-center w-2/3 text-white text-sm sm:text-left">
                Nearme adalah sebuah aplikasi karangan anak bangsa yang ingin menjadi pemuda sukses. <br>
                Silahkan kerjakan tugas yang diberikan agar tidak menyesal di akhri waktu nanti.
            </p>
        </div>
        <div class="col-span-4 flex flex-col  justify-center mt-4 md:col-span-2 sm:col-span-2">
            <h3 class="text-white text-large uppercase font-semibold text-center">company</h3>
            <a href="#" class="text-center text-sm text-[#94A3B8] hover:underline">About Us</a>
            <a href="#" class="text-center text-sm text-[#94A3B8] hover:underline">Blog</a>
            <a href="#" class="text-center text-sm text-[#94A3B8] hover:underline">Contact</a>
        </div>
        <div class="col-span-4 flex flex-col  justify-center mt-4 md:col-span-2 sm:col-span-2">
            <h3 class="text-white text-large uppercase font-semibold text-center">product</h3>
            <a href="#" class="text-center text-sm text-[#94A3B8] hover:underline">Nearme</a>
            <a href="#" class="text-center text-sm text-[#94A3B8] hover:underline">Nearby</a>
            <a href="#" class="text-center text-sm text-[#94A3B8] hover:underline">Near</a>

        </div>
        <div class="col-span-4 flex flex-col  justify-center my-4 md:col-span-2 sm:col-span-2">
            <h3 class="text-white text-large uppercase font-semibold text-center">Events</h3>
           
            <a href="#" class="text-center text-sm text-[#94A3B8] hover:underline">Venue</a>
            <a href="#" class="text-center text-sm text-[#94A3B8] hover:underline">Blog</a>
        </div>
        <hr class="col-span-12 mt-5">
        <div class="col-span-12 pt-4 md:flex flex-wrap justify-center items-center px-10">
            
            <ul class="mt-2 flex flex-wrap justify-center items-center text-sm my-4 gap-4 text-[#CBD5E1]">
                <li class=""><a href="#">© 2022, Nerame</a></li>
                <li><a href="#">Term of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
            <ul class="flex gap-3 justify-center items-center sm:ml-auto">
                <li class="text-sm text-[#CBD5E1]">Follow Us On </li>
                <li><img src="{{ asset('storage/gambar/x.png') }}" alt=""></li>
                <li><img src="{{ asset('storage/gambar/Ig.png') }}" alt=""></li>
                <li><img src="{{ asset('storage/gambar/fb.png') }}" alt=""></li>
            </ul>
        </div>
    </div>
</body>
</html>