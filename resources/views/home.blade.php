@extends('Students.layout')

@section('title', 'home')

@section('content')
<div></div>
    <div class="grid grid-cols-4 h-screen items-center gap-8 p-5  shadow-lg">
        <div class="col-span-2 justify-end flex">
        <img src="{{ asset('storage/gambar/logoaksa.png') }}" alt="" class="w-2/3 h-fit rounded-lg">
</div>
<div class="col-span-2 space-y-10">
        <h2 class=" text-5xl font-mono font-bold text-slate-800">Welcome </h2>
        <h2 class="text-5xl font-mono font-bold text-slate-800">to The Club, Admin</h2>
</div>
    </div>
@endsection
