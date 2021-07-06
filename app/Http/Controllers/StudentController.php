<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index(){
    $students = Student::orderBy('id','DESC')->get();  //data read korar jonno use
      return view('crud', compact('students')); //data read korar jonno use
  }

//   store data

public function store(Request $request){
    $request->validate([   //validate korar jonno use kora hoyse

        'name' =>'required',
        'roll' =>'required',
        'class' =>'required',
    ]
   );

    // data insert korar code

Student::insert([

    'name' =>$request->name,
    'roll' =>$request->roll,
    'class' =>$request->class,

]);

return redirect()->back()->with("success", "succesfully data added");

}



//student edit korar process

public function edit($id){
  $student = Student::findOrFail($id);
  return view('edit', compact('student'));

}


//update student

public function update(Request $request, $id){
  Student::findOrFail($id)->update([

    'name' =>$request->name,
    'roll' =>$request->roll,
    'class' =>$request->class,

]);
  return redirect()->to('/crud')->with("success", "succesfully data updated");
}



//student delete

public function delete($id){
 Student::findOrFail($id)->delete();
 return redirect()->back()->with("success", "succesfully data deleted");

}



}
