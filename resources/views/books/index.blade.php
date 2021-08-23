@extends('books.layout')

@section('header')
Gerenciador de livros
@endsection

@section('content')


@if(!empty($message))
<div class="alert alert-success" role="alert">{{ $message }}</div>
@endif
<a href="{{route('form_create_book')}}" class="btn btn-dark mb-2 ">New Book</a>


<ul class="list-group">
    @foreach($books as $book)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{$book->name}}
        <form method="post" action="/books/{{$book->id}}"
            onsubmit="return confirm ('Tem certeza que deseja excluir {{addslashes ($book->name)}}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
            </button>
        </form>
    </li>

    @endforeach
</ul>

@endsection