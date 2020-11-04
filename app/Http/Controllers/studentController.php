<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class studentController extends Controller
{
    //
   public function listStudents(){

   	$students = Student::all();
   	 return view('userview',['students'=>$students]);
   }
   
   public function addStudent(Request $req)
   {
   
    $student = new Student;
    $student->name= $req->name;
    $student->email= $req->email;
    $student->phone= $req->phone;
    $student->save();

   }
   public function update(Request $req)
   {
   	//print_r($req->input());
   	Student::where('name',$req->oldname)->update(['name'=>$req->newname]);
   }
    public function delete(Request $req)
   {
    //print_r($req->input());
    Student::where('id',$req->id)->delete();
   }
}

