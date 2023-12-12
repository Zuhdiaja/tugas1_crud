@extends('students.layout')
@section('content')
    <div class=" card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
       <thead>
        <tr>
            <th>name</th>
            <th>nis</th>
            <th>gender</th>
            <th>nama wali</th>
            <th>pekerjaan</th>
        </tr>
       </thead>
       </table>
    </div>

    <tbody>
        @foreach ($students as $students)
        <tr>
            <td>{{$students->name}}</td>
            <td>{{$students->nis}}</td>
            <td>{{$students->gender}}</td>
            <td>{{$students->parents['name']}}</td>
            <td>{{$students->parents['work']}}</td>
        </tr>
        @endforeach
    </tbody>


    
@endsection
