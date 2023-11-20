<?php
 
namespace App\Http\Controllers;
 
use Illuminate\support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Student; //add Student Model - Data is coming from the database via Model.
 
class StudentController extends Controller
{
    
    public function index()
    {
        $student = Student::all();
        return view ('students.student')->with('students', $student);

        
    }
 
    
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gender' => ['in:L,P'],
        ]);
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

        if($request->image){
            $oldImage = $student->image;
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar',$newName);

            // kalau sukses upload maka
            // 1. hapus file yg lama
            // 2. update datanya

            // kalau gagal upload, langsung return error
            $student->update($request->except('image') + ['image' => $newName]);
           
            file::delete(public_path().'/storage/gambar/'.$oldImage);
            }
            return redirect('students')->with('flash_message', 'student Updated!');  
        }

       
        // if ($upload) {
        //     $delete = File::delete(public_path() . '/storage/photo/' . $oldImage);
        //     $student->update($request->except('image') + ['image' => $newName]);
        
    
 

    public function destroy($id)
    {
        $student = Student::find($id);
        $oldImage = $student->image;
        $delete = file::delete(public_path() . '/storage/gambar/' . $oldImage);
        if ($delete) {
            Student::destroy($id);
        }
        
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
