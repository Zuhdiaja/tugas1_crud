@extends('students.layout')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   

<div class="mt-24 mx-5">
    <a class= "" href="/add-class">
        <button class="text white flex right-0 rounded 2x1 bg-green-600 py-2 px-7 text-sm font-semibold">
            add data
        </button>
        </a>
</div>

<table class="table table-success table-striped">
            <thead> 
                <tr>
                    <th>no.</th>
                    <th>kelas</th>
                    <th>nama murid</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($classList as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                        <td>
                            @foreach ($data->student as $student)
                                - {{ $student['name'] }} <br>
                            @endforeach
                        </td>
                        <td>
                            <a href="/class-delete/{{$data->id}}" class=" bg-green-500" >delete</a>
                            
                        </td>
                    </tr>
                @endforeach


                
            </tbody>
        </table>


      
@endsection