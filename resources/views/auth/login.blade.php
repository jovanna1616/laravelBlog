@extends('layouts.master')

@section('content')

    <h2>Login</h2>

    <hr>

    <form method="POST" action="/login">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Email</label>
            <input type="email" class="form-control" id="email" name="email">
             @include(
	                'partials.error-messages',
	                ['fieldTitle' => 'email']
            	)
        </div>

        <div class="form-group">
            <label for="body">Password</label>
            <input type="password" class="form-control" id="password" name="password">
             @include(
	                'partials.error-messages',
	                ['fieldTitle' => 'password']
            	)
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

    </form>

@endsection
