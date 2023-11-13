

@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>

                        <!-- <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href=/logout>logout</a>
                            </li>
                        </ul>          -->
                    </div>
                    
                      
                    <div class="card-body">
                        <div>
                        <a href="{{ url('/students-add') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
                        </div>


                        <div class="table-responsive">
                    
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>nis</th>
                                        <th>gender</th>
                                        <th>image</th>
                                        <th>Actions</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->nis }}</td>  
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->image }}</td>
  
                                        
                           
                      
                                        <td>
                                        
                                            <a href="{{ url('/students/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/students-edit/' . $item->id) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            
                                            <form method="POST" action="{{ url('/students' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection