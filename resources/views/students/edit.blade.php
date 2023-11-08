@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('students/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>nis</label></br>
        <input type="text" name="nis" id="nis" value="{{$students->nis}}" class="form-control"></br>
        <label>gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$students->gender}}" class="form-control"></br>
        <label>image</label></br>
        <input type="file" name="image" id="image" value="{{$students->image}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop