<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $books =
            [
                'Harry Potter',
                'O pequeno principe',
                'Jogador Número 1'

            ];

        return view('books.index', compact(var_name: 'books'));
    }
}
