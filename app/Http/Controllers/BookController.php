<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book as book;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $book = new book;
        $book->create($request->all());
        return redirect('book');
    
    }

    public function index(){
        $book = book::all(); 
        return view('catalogue', [
            'book' => $book
        ]);
    }

    public function delete($id)
    {
        book::destroy($id);
        return redirect('catalogue');

        
    }
}
