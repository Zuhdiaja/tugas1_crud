@extends('students.layout')
@section('content')
  
<div class="lg:w-1/3 md:w-2/4 w-2/3 mx-auto bg-white shadow-lg p-5 mt-16">
  <h2 class="text-center text-xl font-semibold text-slate-700">Tambah Data</h2>
  <form action="{{ url('students') }}" method="POST" enctype="multipart/form-data" class="w-full mt-8">
    {!! csrf_field() !!}
    <h2 class=" font-semibold text-slate-700">Nama</h2>
    <input type="text" name="name" id="name" class="border-none text-sm w-full py-1 px-0" placeholder="Nama" value="{{old('name')}}">
    <hr class="mb-5">
    <h2 class="font-semibold text-slate-700">Nis</h2>
    <input type="number" name="nis" id="nis" class="border-none text-sm w-full py-1 px-0" placeholder="Nis">
    <hr class=" mb-5">
    <h2 class="font-semibold text-slate-700">kelas</h2>
    <select name="class_id" id="class_id">
  @foreach ($class as $item)
    <option value="{{$item->id}}">{{$item->name}}</option>
@endforeach
</select>

    <h2 class="font-semibold text-slate-700">Jenis Kelamin</h2>
    {{-- <input type="text" name="gender" id="gender" class="border-none text-sm w-full py-1 px-0" placeholder="P/L"> --}}
    {{-- <select name="gender" >
      <option value="">Pilih Jenis Kelamin</option>
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
    </select> --}}
    <input type="radio" name="gender" value="L" >Laki-Laki
    <input type="radio" name="gender" value="P" >Perempuan
    <hr class=" mb-5">
    
    <h2 class="font-semibold text-slate-700">Foto</h2>
    <input type="file" name="photo" id="photo" class="p-0 w-full" >
    <button type="submit" value="save" class="mt-6 bg-green-700 py-1 px-8 text-white rounded-lg w-full hover:bg-green-800 ">Kirim</button>
  </form>
</div>


{{-- <div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       {{ $errors }}
      <form action="{{ url('students') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label for="name">Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>nis</label></br>
        <input type="text" name="nis" id="nis" class="form-control"></br>
        <label>Jenis Kelamin</label></br>
        <input type="text" name="gender" id="gender" class="form-control"></br>
        <label for ="photo">photo</label></br>
        <input type="file" name="photo" id="photo" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
    
  </div>
</div> --}}
  
@stop