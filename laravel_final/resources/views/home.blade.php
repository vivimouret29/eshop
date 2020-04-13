@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Mon compte</div>

            <div class="card-body">
                <div id="first_line">
                    <div id="left-column justify-content-start col-md-6">
                        <div class="d-flex flex-row">
                            <div id="img-profil" class="p-3">
                                <img src="{{ Auth::user()->url_image }}" alt="photo_de_profil" style="width:150px; height:auto">
                            </div>
                            <div id="infos" class="column p-3 align-self-stretch">
                                <p>{{ Auth::user()->name }}</p>
                                <p>{{ Auth::user()->age }} ans</p>
                                <p>{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="zone_event">
                    <div id="first_line">
                        <h2 class="text-center">Musiques</h2>
                    </div>
                    <div id="zone_list_event" class="d-flex flex-row">
                        <div id="mes_evenements" class="col-md-6">
                            <h3 class="text-center">Mes musiques</h3>
                            <div>
                                <div style=" flex-wrap: wrap; justify-content: space-around; text-align: center;" class="d-flex justify-content-around">
                                    @foreach($evenements as $evenement)
                                    <div class="p-4">

                                        <div class="h1">
                                            {{ $evenement->titre }}
                                        </div>
                                        <div>
                                            <img src="{{ $evenement->url_image }}" class="img-fluid" style="width :60%; margin-bottom :20px;">
                                        </div>
                                        <div class="row justify-content-around">
                                            <div class="">
                                                {{ date('d-m-Y', strtotime($evenement->date)) }}
                                            </div>
                                            <div class="">
                                                {{ $evenement->tags }}
                                            </div>
                                        </div>
                                        <div>
                                            <a href="{{ route('evenements.show', $evenement) }}"><button type="button" class="btn btn-primary">Details</button></a>
                                        </div>
                                        <div>
                                            <a href="{{ route('evenements.edit', $evenement) }}"><button type="button" class="btn btn-primary">Modifier</button></a>
                                        </div>
                                        <div>
                                            <a href="{{ route('delete_event', $evenement) }}"><button type="button" class="btn btn-primary">Supprimer</button></a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="mes_participations" class="col-md-6">
                            <h3 class="text-center">Mes playlists</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection