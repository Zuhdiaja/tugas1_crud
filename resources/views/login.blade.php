<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel 9 |  @yield('title')</title>
     <!-- css -->
     {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
     <script src="https://cdn.tailwindcss.com"></script>
</head>
 
<style>
   
</style>

<body>
 

   {{-- <div class="w-1/4 mx-auto bg-slate-100 shadow-xl mt-52 flex flex-wrap 
    rounded-lg justify-center py-6">
      <h1 class=" text-2xl text-slate-700 font-semibold mb-4">Welcome Bro..</h1>
      <hr class="w-full">
      <form action="post" class="w-full mt-4 px-3">
         @csrf
         <div class="px-2 w-full gap-1">
            <h1>Email</h1>
            <input type="text" name="email" id="email" class="">
         </div>
      </form>
   </div> --}}

      <div class=" w-4/5 sm:w-2/3 md:w-1/2 lg:w-1/4 mx-auto shadow-xl flex flex-wrap justify-center border-slate-700 lg:mt-28 mt-10 py-16 px-10">
         <h3 class=" font-semibold text-xl text-slate-700 mb-5">Login</h3>
         
         <form method="POST" action="" class="w-full flex flex-wrap justify-center space-y-7">
            @csrf
            <div class="mb-3  gap-3 w-full justify-center space-y-1">
                  <h2 class="font-semibold text-slate-800">Email</h2>
                  <input type="email" name="email" id="email" class=" w-full text-sm" required placeholder="account@gmail.com">
                  <hr>
            </div>
            <div class="mb-3 w-full">
                  <h2 class=" font-semibold text-slate-800 space-y-1">Password</h2>
                  <input type="password" name="password" id="password" class="w-full text-sm " placeholder="Password" required>
                  <hr>
            </div>
            
                 <button class="bg-[#0F172A] text-white w-full py-1 rounded-full" type="submit">Login</button>
            
         </form>
      </div>



   @yield('content')
   <!-- javascript -->

</body>
</html>