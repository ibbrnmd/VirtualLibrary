<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::query()
            ->orderBy('name')
            ->get();

        $message = $request->session()->get(key: 'message');
        $request->session()->remove(key:'message');
        return view('books.index', compact('books' ,'message'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $book = Book::create($request->all());
        $request->session()->flash(
            'message',
            "Livro {$book->id} adicionado com sucesso"
        );

        return redirect(to: '/index');
    }

public function delete(Request $request) 
{
    Book::destroy($request->id);
    $request-> session()
    ->flash(
        'message',
        'Livro excluido com sucesso'
    );
return redirect(to:'/index');
}    
}
