@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h1 text-center">{{ $evenement->title }}</div>
                <div class="card-body">
                    <div class="d-flex justify-content-around">
                        <div>
                            <div>
                                <img src="{{ $evenement->url_image }}" class="img-fluid" style="width :100%; margin-bottom :20px;">
                            </div>
                            <div>
                                <a href="{{ route('audiosearch', $evenement) }}"><button type="button" class="btn btn-primary">lire la musique</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection