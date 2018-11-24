@extends('layouts.app')

@section('title', 'Edit')

@section('container')

    <h2>Bearbeite eine Waundaroute</h2>

    <form method="post" action="{{ route('waundarouten.update', $waundarouten->id) }}" autocomplete="off">

        @csrf
        @method('put')

        @include('waundarouten._form')

        <button type="submit" class="btn btn-primary">Save</button>

    </form>

@endsection
