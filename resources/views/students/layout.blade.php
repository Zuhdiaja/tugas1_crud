<!DOCTYPE html>
<html>
<head>
    <title>Student Laravel 9 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   
<div class="grid grid-cols-12 py-2 px-4 items-center shadow-md w-full">
        <img src="{{asset('storage/gambar/logo.png')}}" alt="" class="col-span-2 w-2/3">
        <ul class="flex col-span-10 gap-10">
            <li><a href="/" class=" font-semibold text-slate-900 hover:text-slate-500">Home</a></li>
            <li><a href="/students" class=" font-semibold text-slate-900 hover:text-slate-500">Students</a></li>
           


            <!-- <li class="ml-auto"><a href="/students" class=" font-semibold text-red-700 hover:text-slate-500">Logout</a></li> -->
            
            
            
           
                            <li class="nav-item"><a class="nav-link" href=/logout>logout</a></li>
                       
        </ul>

<div class="container">
    @yield('content')
</div>
   
</body>
</html>