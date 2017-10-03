@extends('layouts.master')

@section('content')

    <h2>Create post</h2>

    <hr>

    <form method="POST" action="/posts">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
            @include(
                    'partials.error-messages',
                    ['fieldTitle' => 'title']
                )
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body"></textarea>
            @include(
                    'partials.error-messages',
                    ['fieldTitle' => 'body']
                )
        </div>
        <!-- <div class="form-group">
            <label for="published">Publish?</label>
            <input type="checkbox" class="form-control" id="published" name="published1" value="1"/>
        </div> -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection
