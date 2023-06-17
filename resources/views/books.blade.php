@extends('layouts.main')

@section('content')


<div class="container">
    <div class="row">
        @if(isset($book))
        <div class="col-12">
            <div class="book-wrap">
                <p class="{{$book->title}}">
                <div class="book-cover-wrap">
                    <img src="{{$book->cover}}" class="book-cover">
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
               
@endsection
