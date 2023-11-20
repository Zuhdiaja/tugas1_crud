<!DOCTYPE html>
<html>
<head>
    <title>Student Laravel 9 CRUD</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
   

    
    @include('partials.navbar')
<div class="mt-10 min-h-screen">
    
   @yield('content')
</div>

@include('partials.footer')
</body>
</html>