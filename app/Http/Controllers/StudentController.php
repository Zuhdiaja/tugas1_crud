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
        $input = $request->all();
        $student->update($input);
        return redirect('students')->with('flash_message', 'student Updated!');  
    }
 

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message', 'Student deleted!');  
    }
}


