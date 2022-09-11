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

                    <div class="container">
                        <form id="my-form">
                            <div class="row">
                                <div class="col-3">                       
                                    <label for="country"> Country :</label>
                                </div>
                                <div class="col-9">
                                    <select class="select-opt form-control country" name="country" data-placeholder="Select Country">
                                        <option></option>
                                        <option value="gr">Greece</option>
                                        <option value="de">Germany</option>
                                        <option value="en">England</option>
                                    </select>
                                </div>
                            </div>
                        <div class="row">
                                <div class="col-3">                       
                                    <label for="name"> Name :</label>
                                </div>
                                <div class="col-9">
                                    <select class="select-opt form-control name" name="name" data-placeholder="Select name">
                                        <option></option>
                                        <option value="john">John</option>
                                        <option value="dave">Dave</option>
                                        <option value="henry">Henry</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">                       
                                    <label for="movie"> Movie :</label>
                                    
                                </div>
                                <div class="col-9">
                                    <select class="select-opt form-control movie" name="movie" data-placeholder="Select movie">
                                        <option></option>
                                        <option value="lord">Lord Of The Rings</option>
                                        <option value="godfather">The Godfather</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <br>
                        <button class="btn submit-btn" form="my-form">Submit</button>

                        <div class="row">
                            <div class="upload-cont">
                                <label for="myfile">Select a file:</label>
                                <input type="file" id="myfile" name="myfile">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
