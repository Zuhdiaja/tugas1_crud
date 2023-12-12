@extends('students.layout')
@section('content')

<div class="mt-5">
 <h2>serius delete? {{$class->name}}</h2>

 <form style="display: inline-block" action="/class-destroy/{{$class->id}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger ">delete</button>
</form>

    <a href="/classroom" class="btn btn-primary">cancel</a>
</div>
@endsection