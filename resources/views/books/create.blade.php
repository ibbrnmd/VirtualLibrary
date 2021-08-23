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
    <div class="form-group" name="nome">
        <label for="book_name" class="">Nome:</label>
        <input type="text" class="form-control" name="name" id="book_name">
    </div>
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection