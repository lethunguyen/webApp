<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(){
        $test = Test::all();
        return view('test', compact('test'));
    }
}
