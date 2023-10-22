@extends('layouts.main')

@section('content')


<div class="container">
    <div class="row">
        @if(isset($books))
            @foreach($books as $book)
            <div class="col-4">
                <div class="book-wrap">
                    <p class="book-title text-uppercase">Title: {{$book->title}}</p>
                    <p class="book-genre text-uppercase">Genre: {{$book->genre}}</p>
                    <p class="book-pages text-uppercase">Pages: {{$book->pages}}</p>
                    <p class="author-name text-uppercase">Author: {{$book->author}}</p>
                    <p class="publisher text-uppercase">Publisher: {{$book->publisher}}</p>
                </div>
            </div>
             @endforeach
        @endif
    </div>
</div>
               
@endsection
