<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Hamcrest\Core\IsEqual;
use Illuminate\Http\Request;
use function PHPUnit\Framework\equalTo;

class SaveStudentController extends Controller
{
    public function index(Request $request){

        $id = $request->input("id");
        
        $studentFullName= $request->input("studentFullName");
        $studentIDNumber= $request->input("studentIDNumber");
 
        Student::where('id',$id)->update(["studentFullName"=> $studentFullName,"studentIDNumber"=> $studentIDNumber]);
        $students = Student::all();

        return view('Student', compact('students'));
    }
}

