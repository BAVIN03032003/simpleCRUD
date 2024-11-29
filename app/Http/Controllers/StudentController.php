<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return view('student_form');
    }

    public function store(Request $request){

        /*  methoad 1*/

        // $name=$request->input('name');
        // $age=$request->input('age');
        // $phone=$request->input('phone');

        // $student= new Student;
        // $student-> name = $name;
        // $student-> age = $age;
        // $student-> phone = $phone;

        // $student->save();

        /* methoad 2 */
        
        $stud=$request->only(['name','age','phone']);

        $students=Student::create($stud);

        return "student record insert successfully student ID".$students->id;

    }

    
    public function list(){
        $students=Student::all();
        return view('student_list',['students'=>$students]);
    }

    public function edit($id){
        $students=Student::find($id);
        // dd($students);
        return view('student_edit',['students'=>$students]);
    }

    public function update(Request $request,$id){
        $students= Student::find($id);
        $students->name=$request->input('name');
        $students->age=$request->input('age');
        $students->phone=$request->input('phone');

        $students->save();

        return "updateded successfully <a href=".url('/list').">click here</a>";
    }

    public function delete($id){
        $students=Student::find($id);
        $students->delete();
        return "record deleted <a href=".url('/list').">click here</a>";
    }
}
