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
        return redirect('catalogue');
    
    }

    public function edit($id) {
        $book = book::find($id);
        return view('editBook', [
            'book' => $book
        ]);
    }

    public function update(Request $request, $id){
        //Encontrar el libro por su id
        $book = book::find($id);
        
        $book->name   = $request->name;
        $book->author = $request->author;
        $book->ISBN   = $request->ISBN;
        $book->year   = $request->year;

        $book->save();

        return redirect('catalogue');
    }

    public function newBook(){
        return view('newBook');
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
