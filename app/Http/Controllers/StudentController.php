<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\File;
use Illuminate\support\Facades\Validate;
use Illuminate\Http\Request;
use App\Models\Student; //add Student Model - Data is coming from the database via Model.

class StudentController extends Controller
{
    
    public function index(Request $request)
    {
        //request dari keyword yang dicari dari keyword
        $keyword = $request->keyword;

        $student = student::latest();
     
        $student = student::where ('name', 'LIKE', '%' .$keyword. '%' )
                          ->orWhere('gender',$keyword)
                          ->orWhere('NIS','LIKE', '%' .$keyword. '%')
                          -> paginate(2);
        return view('students.student')->with('students', $student);
    }

    //untuk mengcreate data baru
    public function create()
    {
        //menampilkan
        return view('students.create');
    }

    //program untuk meng create nya
    public function store(Request $request)
    {

        // $validate = validate()::make($request->all(),[
        //     'name'=> 'required',
        //     'email' => 'required|email|end_with:.com',
        //     'image' => 'sometimes|mimes:png,jpeg,jpg'
        // ],
        // [
        //    'name.required' => 'nama harus di isi',
        //    'email.required' => 'email harus di isi', 
        //    'email.email' => 'masukkan evai', 
        // ]);

        $validate = $request->validate([
            'name' => 'required',
            'gender' => 'required|in:L,P',
            'nis' => 'required|max:10',
            'photo' => 'mimes: png,jpeg,jpg'
        ],
        [
            'name.required'=>'Nama wajib diisi',
            'gender.required'=>'Gender wajib diisi',
            'nis.required'=>'NIS wajib diisi',
            'photo.mimes'=>'Foto wajib diisi',
            'gender.in:L,P'=>'Gender wajib L/P',
            'nis.max'=>'NIS max 10 karakter',
            
        ]);

        //unutk menambah kan foto
        $newName = '';

        if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
            $request->file('photo')->storeAs('gambar', $newName);
        }
        $request['image'] = $newName;
        $student = Student::create($request->all());
        return redirect('students')->with('flash_message', 'Student Addedd!');
    }

    //untuk menampilkan data
    public function show($id)
    {
        $student = Student::find($id); //melalui id
        return view('students.show')->with('students', $student);
    }

    //halaman form
    public function edit($id)
    {
        $student = Student::find($id);
        //menampilkan
        return view('students.edit')->with('students', $student);
    }

    //program untuk meng update nya
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $newName = '';
        $validate = $request->validate([
            'name' => 'required',
            'gender' => 'in:L,P',
            'nis' => 'required|max:10',
            'image' => 'image: png,jpeg,jpg'
        ],
    
    );

        $tambahan= [];

        if ($request->hasFile('image') && $request->file('image')->isValid()) { //untuk memeriksa file dengan nama image
            $oldImage = $student->image;//enctype

            $extension = $request->file('image')->getClientOriginalExtension(); //untuk mendapatkan ekstensi file asli sebelum diunggah lll.png to string
            $newName = $request->name . '-' . now()->timestamp . '.' . $extension; //ekspresi untuk menggabungkan semua informasi di atas menjadi nama file baru.
            $request->file('image')->storeAs('gambar', $newName); //untuk mengakses dan menyimpan file dengan nama gambar
            $tambahan['image']= $newName;

           

            file::delete(public_path() . '/storage/gambar/' . $oldImage);//masuk folder gambar
        }
        $student->update($request->except('image') + $tambahan); //mengambil input kecuali image //tambahan jika mau yang foto
        return redirect('students')->with('flash_message', 'student Updated!');
    }

    // kalau sukses upload maka
    // 1. hapus file yg lama
    // 2. update datanya

    // kalau gagal upload, langsung return error


    public function destroy($id)
    {
        $student = Student::find($id);//id
        $oldImage = $student->image; //menyimpan ni;ai
        $delete = file::delete(public_path() . '/storage/gambar/' . $oldImage); //berfungsi untuk menghapus file yang diidentifikasi oleh variabel $oldImage
        if ($delete) {
            Student::destroy($id);//by id
        }

        return redirect('students')->with('flash_message', 'Student deleted!');// pesan berhasil delet
    }
}




//$ parameter