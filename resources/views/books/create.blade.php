@extends('books.layout')

@section('header')
    Create books
    @endsection

@section('content')
<form method="post">
    <div class="form-group" name="nome">
        <label for="book_name" class="">Nome:</label>
        <input type="text" class="form-control" id="book_name">
    </div>
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection