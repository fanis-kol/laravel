
@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        @if(isset($books))
            @foreach($books as $book)
                <div class="col-12">
                    <p class="name">{{$book->name}}</p>
                    <p class="publisher">{{$book->publisher}}</p>
                    <p class="author">{{$book->author}}</p>
                    <p class="year">{{$book->year}}</p>
                </div>
            @endforeach
        @endif
    </div>
   

</div>
@endsection


