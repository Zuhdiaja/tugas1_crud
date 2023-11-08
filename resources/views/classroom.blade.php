@extends('layout.mainlayout')

@section('title', 'class')

@section('content')
        <h1>ini halaman class</h1>
        <h3>class list</h3>

        <table class="class">
            <thead>
                <tr>
                    <th>no.</th>
                    <th>name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($classList as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection