@extends('layouts.main')
@section('content')
<div class="main">
    <div class="container register-cont">
        <div class="row">
            <div class="col-12 mt-3">
                <h1>Register Form</h1>
            </div>
        <div>
        <div class="row">
            <div class="col-12">
                <form action="register" method="post">
                    @csrf
                    <input class="mt-5" name="name" type="text" placeholder="Enter Username" name="name" required><br>
                    <input class="mt-2" name="email" type="email" placeholder="Enter Your Email" name="email" required><br>
                    <input class="mt-2" name="password" type="password" placeholder="Enter Password" name="password" required><br>
                    <button class="mt-2" type="submit">register</button>
                </form> 
            </div>
        </div>
    </div>
</div>
@endsection
