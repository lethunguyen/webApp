<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;


class EditDeleteStudentController extends Controller
{
    public function optStudent(Request $request){
        //to do: request->id
       
    $id = $request->id;
    
    $student = Student::findOrFail( $id );
    $student->delete();
   
    $test = Student::all();
    return view('delete', compact('test'));
    }
}