<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BooksFormRequest;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request)
    {

        $books = Book::query()
            ->orderBy('name')
            ->get();

        $message = $request->session()->get(key: 'message');
        $request->session()->remove(key: 'message');
        return view('books.index', compact('books', 'message'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(BooksFormRequest $request)
    {
        $request->validate([
            'name' => 'required'

        ]);

        $book = Book::create($request->all());
        $request->session()
            ->flash(
                'message',
                "Livro {$book->name} adicionado com sucesso"
            );

        return redirect()->route(route: 'list_books');
    }

    public function delete(Request $request)
    {
        Book::destroy($request->id);
        $request->session()
            ->flash(
                'message',
                'Livro excluido com sucesso'
            );
        return redirect()->route(route: 'list_books');
    }

    public function messages ()
{
    return [
        'required' => 'O campo :attribute é obrigatório',
        'name.min' => 'O campo nome precisa ter pelo menos dois caracteres'
    ];
}
}
