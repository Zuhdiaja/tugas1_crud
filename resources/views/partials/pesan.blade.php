@if ($errors->any())
    <div id="closebutton" class="flex justify-center mx-auto -mt-6" data-aos="zoom-in-down" data-aos-easing="linier">
        <div class="w-[80%] sm:w-[60%] md:w-[50%] lg:w-[30%] mx-auto shadow-xl bg-white absolute rounded-lg">
            
            <div class="py-4 flex justify-center items-center bg-[#EF6262] rounded-md gap-4">

                {{-- <h2 class="text-lg font-bold text-white">Alert</h2> --}}
                <img src="{{ asset('storage/gambar/danger.png') }}" alt="" class=" w-8 h-8">
            </div>
            <ul class="px-8 py-2 list-disc">

                @foreach ($errors->all() as $item)
                    <li class=" font-semibold text-slate-700">{{ $item }}</li>
                @endforeach
            </ul>
            <button class=" mx-auto flex my-4 px-4 py-1 rounded-full uppercase font-semibold text-sm text-white bg-[#EF6262]">
                {{-- <img src="{{ asset('storage/gambar/close.png') }}" alt="" class=" w-7 h-7"> --}}
                Close
            </button>
        </div>

    </div>

    @if (Session::get('success'))
    <div>{{ Session::get() }}</div>
        
    @endif

    <script>
        const closeButton = document.getElementById('closebutton');
        closeButton.addEventListener('click', () => {
            closeButton.classList.add('hidden');
        })

    </script>
@endif
