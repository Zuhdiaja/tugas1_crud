<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Student; //add Student Model - Data is coming from the database via Model.
 
class StudentController extends Controller
{
    
    public function index()
    {
        $student =student::all();
        return view ('students.student')->with('students', $student);

        
    }
 
    
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $newName = '';

        if($request->file('photo')){
        $extension = $request->file('photo')->getClientOriginalExtension();
        $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
         $request->file('photo')->storeAs('gambar',$newName);
        }
        $request['image'] = $newName;
        $student = Student::create($request->all());
        return redirect('students')->with('flash_message', 'Student Addedd!');  
    }
 
    
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }
 
   
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $newName = '';
        if($request->file('image')->isValid()){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar',$newName);

            // kalau sukses upload maka
            // 1. hapus file yg lama
            // 2. update datanya

            // kalau gagal upload, langsung return error
        }

        $student->update($request->except('image') + ['image' => $newName]);

        return redirect('students')->with('flash_message', 'student Updated!');  
    }
 

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message', 'Student deleted!');  
    }
}






// if($request->File('photo'))
// {
//     $destination = 'uploads/students/'.$student->image;
//     if (File::exists($destination)) 
//     {
//         File::delete($destination);
//     }
//     $file = $request->file('image');
//     $extention = $file->getClientOriginalExtension();
//     $file = time().'.'.$extention;
//     $request->move('uploads/students/', $file);
//     $student->image = $file;
// }
