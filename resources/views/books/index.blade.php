@extends('books.layout')

@section('header')
    Gerenciador de livros
@endsection

@section('content')
    <a href="/books/create" class="btn btn-dark mb-2 ">Novo livro</a>

    <ul class="list-group">
        @foreach($books as $book)
            <li class="list-group-item"><?= $book ?> </li>
        @endforeach
    </ul>
    <strong>Database Connected: </strong>
    <?php
        try {
            \DB::connection()->getPDO();
            echo \DB::connection()->getDatabaseName();
            } catch (\Exception $e) {
            echo 'None';
        }
    ?>
@endsection
