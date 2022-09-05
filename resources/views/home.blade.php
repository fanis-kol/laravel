@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="">
                        <form class="my-form">
                            <select class="select-opt form-control" name="country" data-placeholder="Select Country">
                                <option></option>
                                <option value="gr">Greece</option>
                                <option value="de">Germany</option>
                                <option value="en">England</option>
                            </select>
                            <select class="select-opt form-control" name="name" data-placeholder="Select name">
                                <option></option>
                                <option value="john">John</option>
                                <option value="dave">Dave</option>
                                <option value="henry">Henry</option>
                            </select>
                            <select class="select-opt form-control" name="movie" data-placeholder="Select movie">
                                <option></option>
                                <option value="lord">Lord Of The Rings</option>
                                <option value="godfather">The Godfather</option>
                            </select>
                        </form>
                        <br>
                        <button class="btn submit-btn" form="my-form" type="submit" value="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
