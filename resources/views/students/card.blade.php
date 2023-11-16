@extends('students.layout')
@section('content')
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach($studentlist as $item)
        <div>
            <img src="{{ $item->image }}" alt="imgStudent" class="w-full lg:h-[194px] sm:h-[170px] md:h-[180px] 
            rounded-[12px] object-cover">
            <h6 class="text-xs my-2 text-[#007A98]">{{ $item->gender }}</h6>
            <h4 class="text-2xl  font-bold sm:text-xl md:text-lg lg:text-2xl">{{ $item->name }}</h4>
            <h6 class="text-sm text-slate-500">{{ $item->nis }}</h6>
            
            
        </div>
        @endforeach
    </div>
    
@endsection