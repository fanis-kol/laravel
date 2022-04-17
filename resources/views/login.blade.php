@extends('layouts.main')
@section('content')
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 login-cont">
                <form action="login" method="post">
                    @csrf
                    <input class="mt-4" type="text" placeholder="Enter Username" name="name" required></br>
                    <input class="mt-2" type="password" placeholder="Enter Password" name="password" required></br>
                    <button class="mt-2" type="submit">Login</button>
                </form> 
            </div>
        </div>
    </div>
</div>
@endsection
