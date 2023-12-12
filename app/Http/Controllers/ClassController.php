<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classroom;

class ClassController extends Controller
{
    public function index(){
        $class = classroom::with('student')->get();
        return view ('class.classroom' , ['classList' => $class]);
    }

    public function create(){
        return view ('class.add-class');
    }

    public function store(Request $request){
        $class =classroom::create($request->all());
        return redirect('classroom');
    }

    public function delete($id){
        $class = classroom::findOrFail($id);
        return view ('class.class-delete',['class' => $class]);
    }

    public function destroy($id)
    {
        $deletedClass = classroom::findOrFail($id);//id
        $deletedClass-> delete();
        return redirect('classroom');
    }
}
