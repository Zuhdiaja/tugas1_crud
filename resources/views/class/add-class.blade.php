@extends('students.layout')
@section('content')


<div class="lg:w-1/3 md:w-2/4 w-2/3 mx-auto bg-white shadow-lg p-5 mt-16">
  <h2 class="text-center text-xl font-semibold text-slate-700">Tambah Data Students</h2>
  <form action="classroom" method="POST" enctype="multipart/form-data" class="w-full mt-8">
   @csrf
    <h2 class=" font-semibold text-slate-700">Nama kelas</h2>
    <input type="text" name="name" id="name" class="border-none text-sm w-full py-1 px-0" placeholder="Nama kelas">
    <hr class="mb-5">
 
<div>
  <div class="items-center flex flex-wrap ml-48">
      <button type="submit" class="bg-green-500">
        save
      </button>
  </div>
</div>


@endsection