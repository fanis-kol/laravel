@extends('layouts.main')

@section('content')


<div class="container">
    <div class="row">
        @if(isset($books))
            @foreach($books as $book)
            <div class="col-4">
                <div class="book-wrap">
                    <p class="book-title">Title: {{$book->title}}</p>
                    <p class="book-genre">Genre: {{$book->genre}}</p>
                    <p class="book-pages">Pages: {{$book->pages}}</p>
                    <p class="author-name">Author: {{$book->author}}</p>
                    <p class="publisher">Publisher: {{$book->publisher}}</p>
                </div>
            </div>
             @endforeach
        @endif
    </div>
</div>
               
@endsection
