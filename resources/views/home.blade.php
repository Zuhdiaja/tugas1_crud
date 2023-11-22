@extends('Students.layout')

@section('title', 'home')

@section('content')
    <div></div>
    <div class="grid grid-cols-4 h-screen items-center gap-8 p-5 pb-40 shadow-lg">
        <div class="col-span-2 justify-end flex" data-aos="fade-right">
            <img src="{{ asset('storage/gambar/home.jpeg') }}" alt="" class="w-2/3 h-fit rounded-lg">
        </div>
        <div class="col-span-2 space-y-10">
            <h2 class="welcome text-5xl font-mono font-bold text-slate-800 w-3/4">Welcome, to the Club Admin</h2>

        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.from(".welcome", {
            delay: 1,
            duration: 2,
            text: ""
        });
    </script>
@endsection
