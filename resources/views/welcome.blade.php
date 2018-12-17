@extends('layouts.app')
@extends('nav')
@section('content')
    <div class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">El blog de JonyD</h1>
                <p class="lead my-3">Estoy aprendiendo a copiar.</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            @if($posts)
                @foreach($posts as $count => $post)
                    @if($count % 2 == 0)
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary">{{ $post->title }}</strong>
                                    <h3 class="mb-0">
                                        <a class="text-dark" href="#"></a>
                                    </h3>
                                    <div class="mb-1 text-muted">{{ $post->created_at->toFormattedDateString() }} <small> by {{ $post->user }}</small></div>
                                    <p class="card-text mb-auto">{{ $post->body }}</p>
                                    <a href="#">Continue reading</a>
                                </div>
                                <!--<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">-->
                            </div>
                        </div>
                    @elseif($count % 2 != 0)
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary">{{ $post->title }} </strong>
                                    <h3 class="mb-0">
                                        <a class="text-dark" href="#"></a>
                                    </h3>
                                    <div class="mb-1 text-muted">{{ $post->created_at->toFormattedDateString() }} <small> by {{ $post->user }}</small></div>
                                    <p class="card-text mb-auto">{{ $post->body }}</p>
                                    <a href="#">Continue reading</a>
                                </div>
                                <!--<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">-->
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
@endsection

