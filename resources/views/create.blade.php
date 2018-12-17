@extends('layouts.app')
@extends('nav')
@section('content')
    <div class="container" style="margin-bottom: 7%">
        <h1>Publish a Post</h1>
        <hr>
        <form method="POST" action="save">
            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
                <small class="form-text text-muted">New Title</small>
            </div>

            <div class="form-group">
                <label>Body</label>
                <textarea class="form-control" name="body" ></textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>


        </form>
    </div>

    @include('modals')


@endsection