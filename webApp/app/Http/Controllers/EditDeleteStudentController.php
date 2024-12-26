<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;


class EditDeleteStudentController extends Controller
{
    public function optStudent(Request $request){
   // $student = Student::findOrFail($request->id);
     $test = $request->post();
  
   // print($student);
    //$student->delete();
   // Log::info($test);
    Log::info($request);
   
    $students = Student::all();
    return view('delete', compact('test'));
    }
}
