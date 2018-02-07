@extends('blogs.layouts.layout')

@section('content')
    <div class="col-sm-8">
        <h1>Sign In</h1>

        <form method="POST" action="/login">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
                
        </form>

        @include('layouts.errors')

    </div>

@endsection