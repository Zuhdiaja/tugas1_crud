@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('students/' .$students->id) }}" method="post" >
        {!! csrf_field() !!}
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>nis</label></br>
        <input type="text" name="nis" id="nis" value="{{$students->nis}}" class="form-control"></br>
        <label>gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$students->gender}}" class="form-control"></br>

        <!-- <div class="mb-3 ">
                        <label for="image" class="form-label"></label>
                        <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">

                        @error('image')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror 
                        
                        <div class="pt-3">
                            @if($students->image != '' && file_exists(public_path().'/uploads/students/'.$students->image))
                            <img src="{{ url('uploads/stundets/'.$student->image) }}" alt="" width="100" height="100">
                        @endif
                        </div>
                    </div> -->  
          
          <input type="submit" value="Update" class="btn btn-success"></br>






        <!-- <label>image</label></br>
        <input type="file" name="photo" id="photo" value="{{$students->image}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br> -->

    </form>
    
  </div>
</div>
  
@stop





<!-- <div class="mb-3">
                        <label for="image" class="form-label"></label>
                        <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror">

                        @error('image')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror 
                        
                        <div class="pt-3">
                            @if($students->image != '' && file_exists(public_path().'/uploads/students/'.$students->image))
                            <img src="{{ url('uploads/stundets/'.$student->image) }}" alt="" width="100" height="100">
                        @endif
                        </div>
                    </div> -->