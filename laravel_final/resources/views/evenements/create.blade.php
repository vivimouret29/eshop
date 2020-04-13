@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload une musique</div>

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
                    <form method="POST" action="{{ route('evenements.store') }}" enctype="multipart/form-data">
                        @csrf
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
                            <input class="form-control" id="tags" name="tags"></input>
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <input class="form-control" id="file" name="file"></input>
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" name="mp3">
                        </div>
                        <!-- <div class="form-group">
                            <label for="date">Date</label>
                            <input class="form-control" type="datetime-local" id="date" name="date">
                        </div> -->
                        <button type="submit">upload file</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection