@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h1 text-center">{{ $evenement->titre }}</div>
                <div class="card-body">
                    <div class="d-flex justify-content-around">
                        <div>
                            <div>
                                <img src="{{ $evenement->url_image }}" class="img-fluid" style="width :100%; margin-bottom :20px;">
                            </div>
                            <div style="margin-bottom:40px;" class="row justify-content-around">
                                <div>
                                    <p>Organisateur : {{ $name_orga->name }}</p>
                                </div>
                                <div>
                                    <p>nombre de participants : {{ $evenement->nbr_participants }}</p>
                                </div>
                            </div>
                            <div style="margin-bottom:40px;" class="row justify-content-around">
                                <div class="">
                                    <p> Date : {{ date('d-m-Y', strtotime($evenement->date)) }} </p>
                                </div>
                                <div class="">
                                    <p> Heure : {{ date('H:i', strtotime($evenement->date)) }}</p>
                                </div>
                            </div>
                            <div>
                                <p> Lieu : {{ $evenement->lieu }}</p>
                            </div>
                            <div>
                                <p>{{ $evenement->description }}</p>
                            </div>
                            <div>
                                <a href=""><button type="button" class="btn-block btn-primary">Participer</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection