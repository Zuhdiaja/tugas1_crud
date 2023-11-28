@extends('students.layout')
@section('content')

<div class=" p-8">
    <a href="{{ url('/students-add') }}" class="ml-auto flex" data-aos="fade-right">
        <button class="bg-green-600 px-5 py-2 hover:bg-green-800 rounded-md  text-white text-sm font-semibold">Tambah Data</button>
    </a>
    <br>
    {{-- search atau filter  --}}
    <form action="/student" method="GET">
        <div class="mt-4 flex justify-center items-center py-2 gap-3 shadow-lg w-[95%] mx-auto rounded-full sm:w-[60%] md:w-[50%] lg:w-[40%]"
            data-aos="fade-down" data-aos-duration="1500" data-aos-delay="500">
            <img src="{{ asset('storage/gambar/search-normal.png') }}" alt="">
            <input type="text" placeholder="Data" class="w-[60%] outline-none border-none p-0" name="search"
                value="{{ request('search') }}">
            <button type="submit"
                class="bg-[#94A3B8] text-white rounded-full py-2 px-3 hover:bg-black hover:text-white">cari
                data</button>
        </div>
        </form>

    <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-7 mt-5">
        @foreach($students as $item)
        <div class="" data-aos="fade-down">
            <img src="{{ asset('storage/gambar/' .$item->image) }}" alt="" class="w-full h-48 object-cover rounded-xl">
            <h2 class="text-center mt-4 text-lg font-semibold text-slate-700">{{ $item->name }}</h2>
            <div class="flex gap-2 mt-2">
                <a href="{{ url('/students-edit/' . $item->id) }}" class="w-1/2">
                    <button class=" w-full border-2 border-slate-500 hover:bg-[#FFC436] rounded-full py-1">Edit</button>
                </a>
                <a href="" class="w-1/2">
                    <form action="{{ url('/students' . '/' . $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="w-full py-1 border-2 border-slate-600 rounded-full hover:bg-red-500" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                    </form>
                </a>
            </div>
            <a href="{{ url('/students/' . $item->id) }}">
                <button class="justify-center py-1 border-slate-500 rounded-full mt-2 flex border-2 
                    w-full hover:bg-[#0F172A] hover:border-[#0F172A] hover:text-white">
                    Lihat Detail
                </button>
            </a>


        </div>
        @endforeach
    </div>
    <div class="my-4 mb-1">
                    {{$students->links()}}
                </div>
</div>
                
@endsection