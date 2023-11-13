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
    <div class="grid grid-cols-12 py-2 px-4 items-center shadow-md w-full">
        <img src="{{asset('storage/gambar/logo.png')}}" alt="" class="col-span-2 w-2/3">
        <ul class="flex col-span-10 gap-10">
            <li><a href="" class=" font-semibold text-slate-900 hover:text-slate-500">Home</a></li>
            <li><a href="" class=" font-semibold text-slate-900 hover:text-slate-500">Students</a></li>
            <li class="ml-auto"><a href="/logout" class=" font-semibold text-red-700 hover:text-slate-500">Logout</a></li>
        </ul>
        

    </div>
</body>
</html>