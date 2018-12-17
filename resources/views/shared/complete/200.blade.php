@extends('layouts.app')
@section('title') Operación exitosa @endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="text-center text-success">
                    <i class="fa fa-5x fa-check"></i>
                </div>
                <h1 class="text-center text-success">
                    200
                    <br/>
                    <small>Éxito</small>
                </h1>
                <p class="text-center text-muted">{{$mensaje}}</p>
                <p class="center-block">
                    <a class="btn btn-default" href="/">Regresar</a>
                </p>
            </div>
        </div>
    </div>
@endsection