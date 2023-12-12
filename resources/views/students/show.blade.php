@extends('students.layout')
@section('content')
    <div class=" flex justify-center mt-16">
        <div class=" w-1/3 ">
            <img src="{{ asset('storage/gambar/' . $students->image) }}" alt="" class="w-full rounded-xl">
            <h2 class=" text-2xl font-semibold text-slate-700 mt-4">Nama : {{ $students->name }}</h2>
            @if ($students->gender == 'L')
                <h2 class="mt-1 font-semibold text-slate-800 text-lg">Jenis Kelamin : <span class="text-[#0174BE]">Laki-laki</span></h2>
            @elseif($students->gender == 'P')
                <h2 class="mt-1 font-semibold text-slate-800 text-lg">Jenis Kelamin : <span class="text-[#CE5A67]">Perempuan</span></h2>
            @else
                <h2>Format Salah</h2>
            @endif
            <h2 class="mt-1 font-semibold text-slate-800 text-lg">Nis : {{ $students->nis }}</h2>
            <h2 class="mt-1 font-semibold text-slate-800 text-lg">kelas : {{ $students->class['name'] }}</h2>
        </div>
    </div>



    {{-- <div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">name : {{ $students->name }}</h5>
        <p class="card-text">nis : {{ $students->nis }}</p>
        <p class="card-text">gender : {{ $students->gender }}</p>
        <p class="card-text">image  : {{ $students->image }}</p>
        <p class="card-text">kelas  : {{ $students->class['name'] }}</p>
        <div class="my-3 d-flex d">
        <img src="{{asset('storage/gambar/'.$students->image)}}" alt=" "width="200px">
        </div>
  </div>
  </div>
</div>
</div> --}}
@endsection
