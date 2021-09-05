@extends('books.layout')

@section('header')
Create books
@endsection

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" autocomplete="off">
    @csrf
    <div class="row">
        <div class="col col-8" name="nome">
            <label for="book_name" class="">Nome:</label>
            <input type="text" class="form-control" name="name" id="book_name">
        </div>
        <div class="col col-8 mt-2" name="author_nome">
            <label for="author_name" class="">Autor:</label>
            <input type="text" class="form-control" name="author_name" id="author_name">
        </div>
    </div>
    <button class="btn btn-primary mt-2">Adicionar</button>
</form>
@endsection