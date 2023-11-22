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
    <div class="coba grid grid-cols-12 lg:py-2 py-0 px-4 items-center bg-white top-0 w-full">
        <img src="{{ asset('storage/gambar/logo.png') }}" alt=""
            class="lg:col-span-2 col-span-6 md:col-span-5 lg:w-2/3 w-1/2">
        <ul class="lg:flex col-span-10 gap-10 hidden">
            <li><a href="/" class=" font-semibold text-slate-900 hover:text-slate-500">Home</a></li>
            <li><a href="/students" class=" font-semibold text-slate-900 hover:text-slate-500">Students</a></li>
            <li class="ml-auto">
                @if (Auth::check())
                    <a href="/logout" class=" font-semibold text-red-700 hover:text-slate-500">Logout</a>
                @else
                    <a href="/login" class=" font-semibold text-blue-700 hover:text-slate-500">Log In</a>
                @endif
            </li>

        </ul>
        <button id="dropdownButton" class="p-4 lg:hidden text-black ml-auto relative col-span-6 md:col-span-7" class="dropbtn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-6 h-6 dark:text-black">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>


            <ul id="dropdownList" class="hidden bg-white shadow-xl mt-2 w-40 rounded-2xl absolute right-0">
                <div class="m-1 space-y-2">
                    <li>
                        <a class="text-slate-500 hover:text-[#007A98] hover:font-bold" href="/">Home</a>
                    </li>
                    <li>
                        <a class="text-slate-500 hover:text-[#007A98] hover:font-bold" href="/students">Students</a>
                    </li>
                    <hr>
                    <li class="flex gap-2 w-full justify-center">
                        @if (Auth::check())
                            <a href="/logout" class=" font-semibold text-red-700 hover:text-slate-500">Logout</a>
                        @else
                            <a href="/login" class=" font-semibold text-blue-700 hover:text-slate-500">Log In</a>
                        @endif
                    </li>
                    <li>

                    </li>
                </div>
            </ul>
        </button>
        <script>
            const dropdownButton = document.getElementById('dropdownButton');
            const dropdownList = document.getElementById('dropdownList');

            dropdownButton.addEventListener('click', () => {
                if (dropdownList.classList.contains('hidden')) {
                    dropdownList.classList.remove('hidden');
                } else {
                    dropdownList.classList.add('hidden');
                }
            });

            document.addEventListener('click', (event) => {
                if (!dropdownButton.contains(event.target) && !dropdownList.contains(event.target)) {
                    dropdownList.classList.add('hidden');
                }
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script>
            gsap.from(".coba", {
                duration: 1,
                y: '-100%',
                opacity: 0
                
            });
        </script>

    </div>
</body>

</html>
