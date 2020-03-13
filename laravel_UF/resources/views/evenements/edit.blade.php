@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('evenements.update', $evenement->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre', $evenement->titre) }}">
                        </div>
                        <div class="form-group">
                            <label for="lieu">Lieu</label>
                            <input type="text" class="form-control" id="lieu" name="lieu" value="{{ old('lieu', $evenement->lieu) }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $evenement->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="url_image">Lien de l'image</label>
                            <input type="text" class="form-control" id="url_image" name="url_image" value="{{ old('url_image', $evenement->url_image) }}">
                        </div>
                        <div class="form-group">
                            <label for="date">Date et heure de l'événement</label>
                            <input class="form-control" type="datetime-local" value="{{ old('date', $evenement->date) }}" id="date" name="date">
                        </div>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection