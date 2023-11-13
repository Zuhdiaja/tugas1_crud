@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="{{ url('students') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name</label></br>
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
</div>
  
@stop