@extends('backend.admin')

@section('title', 'Create')

@section('container')

    <h3>Erstelle eine neue Waundaroute</h3>

    <form method="post" action="{{ route('waundarouten.store') }}" autocomplete="off">

        @csrf

        @include('backend.waundarouten._form')


        <button type="submit" class="btn btn-primary">Save</button>

    </form>

@endsection
