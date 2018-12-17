@extends('layouts.app')
@section('title') ERROR @endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                    <div class="text-center text-danger">
                        <i class="fa fa-5x fa-ban"></i>
                    </div>
                    <h1 class="text-center text-danger">
                        404
                        <br/>
                        <small>No encontrado</small>
                    </h1>
                    <p class="text-center text-muted">{{$mensaje}}</p>
            </div>
        </div>
    </div>
@endsection