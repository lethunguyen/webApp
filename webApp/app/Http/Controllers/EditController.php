<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class EditController extends Controller{
public function index(Request $request)
    {
        $dataPost = $request->post();
        //echo($data);
        //$data = 'Hi';
        

       // return View('edit', compact($data));
       return View('edit', compact('dataPost'));
    }
}