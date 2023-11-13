@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">name : {{ $students->name }}</h5>
        <p class="card-text">nis : {{ $students->nis }}</p>
        <p class="card-text">gender : {{ $students->gender }}</p>
        <p class="card-text">image  : {{ $students->image }}</p>
        <div class="my-3 d-flex d">
        <img src="{{asset('storage/gambar/'.$students->image)}}" alt=" "width="200px">
        </div
  </div>
  </div>
    </hr>
</div>
</div>