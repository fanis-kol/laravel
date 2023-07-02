@extends('layouts.main')

@section('content')


<div class="container">
    <div class="row">
        @if(isset($books))
            @foreach($books as $book)
            <div class="col-12">
                <div class="book-wrap">
                    <p class="book-title">{{$book->title}}</p>
                    <!-- <div class="book-cover-wrap">
                        <img src="{{$book->cover}}" class="book-cover">
                    </div> -->
                    <p class="book-description">{{$book->description}}</p>
                    <p class="author-name">{{$book->author}}</p>
                    <p class="published">{{$book->published}}</p>
                </div>
            </div>
             @endforeach
        @endif
    </div>
</div>
               
@endsection
