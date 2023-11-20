@extends('students.layout')
@section('content')

    <div class=" w-1/3 mx-auto  shadow-lg mb-48 mt-20 pt-7">
      <h2 class="text-center text-xl font-semibold text-slate-700">Edit Data Students</h2>
        <form action="{{ url('students/' . $students->id) }}" method="POST" enctype="multipart/form-data" class="w-full px-6 pt-10 pb-5">
            {!! csrf_field() !!}
            @method('PUT')
            <input type="hidden" name="id" id="id" value="{{ $students->id }}">
            <h2 class="font-bold text-slate-700">Nama</h2>
            <input type="text" name="name" id="name" value="{{ $students->name }}" class="p-0 w-full border-none" required>
            <hr>
            <h2 class=" font-bold text-slate-700 mt-2">Nis</h2>
            <input type="number" name="nis" id="nis" value="{{ $students->nis }}" class="p-0 border-none w-full" required>
            <hr>
            <h2 class="font-bold text-slate-700 mt-2">Gender</h2>
            <select name="gender" id="gender" class="p-0 border-none w-full " value="{{ $students->gender }}" required>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
            <h2 class=" font-bold text-slate-700 mt-2">Pilih Foto</h2>
            <div>
                <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">

                @error('image')
                    <p>{{ $message }}</p>
                @enderror

                <div>
                    <div class="pt-3">
                        @if ($students->image != '' && file_exists(public_path() . '/uploads/students/' . $students->image))
                            <img src="{{ url('uploads/stundets/' . $student->image) }}" alt="" width="100"
                                height="100">
                        @endif
                    </div>
                </div>

                <button type="submit" class="mx-auto flex mt-4 bg-green-600 hover:bg-green-700 px-8 py-1 font-semibold text-white rounded-lg">Submit</button>
        </form>
    </div>


    {{-- <div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('students/' .$students->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>nis</label></br>
        <input type="text" name="nis" id="nis" value="{{$students->nis}}" class="form-control"></br>
        <label>gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$students->gender}}" class="form-control"></br>

        <div class="mb-3 ">
                        <label for="image" class="form-label"></label>
                        <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">

                        @error('image')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror 
                        
                        <div class="pt-3">
                            @if ($students->image != '' && file_exists(public_path() . '/uploads/students/' . $students->image))
                            <img src="{{ url('uploads/stundets/'.$student->image) }}" alt="" width="100" height="100">
                        @endif
                        </div>
                    </div>
          
          <input type="submit" value="Update" class="btn btn-success"></br>






        <!-- <label>image</label></br>
        <input type="file" name="photo" id="photo" value="{{$students->image}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br> -->

    </form>
    
  </div>
</div>
   --}}
@stop





<!-- <div class="mb-3">
                        <label for="image" class="form-label"></label>
                        <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">

                        @error('image')
    <p class="invalid-feedback">{{ $message }}</p>
@enderror
                        
                        <div class="pt-3">
                            @if ($students->image != '' && file_exists(public_path() . '/uploads/students/' . $students->image))
<img src="{{ url('uploads/stundets/' . $student->image) }}" alt="" width="100" height="100">
@endif
                        </div>
          </div> -->
