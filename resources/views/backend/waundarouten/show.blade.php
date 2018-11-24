@extends('backend.admin')

@section('title', $waundarouten->title)

@section('container')

    <p><code>{{ $waundarouten->id }}</code></p>

    <h1>{{ $waundarouten->title }}</h1>

    <p>{{ $waundarouten->length }}</p>
    <p>{{ $waundarouten->distance }}</p>
    <p>{{ $waundarouten->claim }}</p>

    <p>{{ $waundarouten->preview }}</p>

    <p>{{ $waundarouten->content }}</p>




    <a class="btn btn-secondary" href="{{ route('articles.index') }}">
        <i class="fa fa-chevron-left"></i> Zurück
    </a>

    <a class="btn btn-secondary" href="{{ route('articles.edit', $waundarouten->id) }}">
        <i class="fa fa-pencil"></i> Bearbeiten
    </a>

    <form method="post" action="{{ route('articles.destroy', $waundarouten->id) }}">

        @csrf
        @method('delete')

        <button type="submit" class="btn btn-danger">Löschen</button>

    </form>

@endsection
