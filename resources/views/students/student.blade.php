@extends('students.layout')
@section('content')

    <div class=" px-8 min-h-screen">
        <a href="{{ url('/students-add') }}" class=" flex w-fit">
        <button class="bg-green-600 px-5 py-2 hover:bg-green-800 rounded-md  text-white text-sm font-semibold" 
        data-aos='fade-right' data-aos-duration="1500" data-aos-delay="500">Tambah Data</button>
        </a> 
        <div class="container flex justify-center items-center py-2 gap-3 shadow-lg
        w-[95%] mx-auto rounded-full sm:w-[60%] md:w-2/4 lg:w-[35%] border-none mt-3" data-aos="fade-down" data-aos-delay="1000">
            <form action="" method="get" class="w-full justify-center flex items-center">
                
                    <img src="{{ asset('storage/gambar/search-normal.png') }}" alt="" class=" w-fit h-fit">
                    <input type="text" class="p-0 w-[65%] border-none" name="keyword" placeholder="Cari disini">
                    <button class=" bg-[#94A3B8] text-white rounded-full px-3 py-1 hover:bg-gray-600">Cari Event</button>
                
            </form>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-7 justify-center mt-5">
            @foreach($students as $item)
            <div class="gambarStudents" data-aos="fade-down" >
                <img src="{{ asset('storage/gambar/' .$item->image) }}" alt="" class="w-full h-48 object-cover rounded-xl">
                <h2 class="text-center mt-4 text-lg font-semibold text-slate-700">{{ $item->name }}</h2>
                <div class="flex gap-2 mt-2">
                    <a href="{{ url('/students-edit/' . $item->id) }}" class="w-1/2">
                        <button class=" w-full border-2 border-slate-500 hover:bg-[#fecc59] hover:text-white hover:border-yellow-400 rounded-full py-1">Edit</button>
                    </a>
                    <a href="" class="w-1/2">
                        <form action="{{ url('/students' . '/' . $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="w-full py-1 border-2 border-slate-600 rounded-full hover:bg-red-500 hover:text-white hover:border-red-600" onclick="return confirm('Apakah anda yakin?')">Hapus</button>    
                        </form>                        
                    </a>
                </div>
                <a href="{{ url('/students/' . $item->id) }}" >
                    <button class="justify-center py-1 border-slate-500 rounded-full mt-2 flex border-2 
                    w-full hover:bg-[#0F172A] hover:border-[#0F172A] hover:text-white">
                        Lihat Detail
                    </button>
                </a>
                
                
            </div>
        </form>
        @endforeach
    </div>
    <div class=" mt-12 mb-4">
    {{ $students->links() }}
</div>
    <script>
        const contentStudents = document.querySelectorAll('.gambarStudents')

        contentStudents.forEach((img, i)=>{
            img.dataset.aosDelay = i * 150;
        });
    </script>
    @endsection
    {{-- <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>

                        <!-- <ul class="navbar-nav">
                            <li class="nav-item">
                                
                            </li>
                        </ul>          -->
                    </div>
                    
                      
                    <div class="card-body">
                        <div>
                        <a href="{{ url('/students-add') }}" class="btn btn-success btn-sm" title="Add New Student">Add New</a>
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
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(" Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
</div> --}}
