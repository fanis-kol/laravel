
@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($users as $user)
        <div class="col-12 px-0 main-container">
            <button class="accordion">Section 1</button>
        </div>
        @endforeach
    </div>
   


@endsection


