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
                    <form method="POST" action="{{ route('evenements.update', $evenement->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="text">texte</label>
                            <input type="text" class="form-control" id="test" name="text">
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <input class="form-control" id="tags" rows="3" name="tags"></input>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <input class="form-control" id="tags" rows="3" name="tags"></input>
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" name="mp3">
                        </div>
                        <button type="submit">upload file</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection