    @extends('layouts.app')

    @section('content')

    <div class="container d-flex flex-wrap justify-content-between p-2">
        @foreach($evenements as $evenement)
        <div style="width:250px; height:300px; margin-bottom: 50px;" class="text-center p-2">

            <div class="h1">
                {{ $evenement->title }}
            </div>
            <div>
                <img src="{{ $evenement->url_image }}" class="img-fluid" style="width :80%; margin-bottom :20px;">
            </div>
            <div style="margin-bottom:40px;" class="row justify-content-around">
                <div class="">
                    {{ date('d-m-Y', strtotime($evenement->date)) }}
                </div>
            </div>
            <div>
                <a href="{{ route('evenements.show', $evenement) }}"><button type="button" class="btn btn-primary">Details</button></a>
            </div>
        </div>
        @endforeach
    </div>

    @endsection