<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller{
    public function index(){
        $books = Book::all();
        return view('Book', compact('books'));
    }
    public function sendData(){
       ///code
        return view('Book');
    }

}