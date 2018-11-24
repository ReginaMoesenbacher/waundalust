@extends('backend.admin')

@section('title', 'Waundarouten')

@section('container')

    {{--<h1>{{ trans_choice($waundarouten, $waundarouten->count()) }}</h1>--}}

    <ul>

        {{--@foreach($waundarouten as $waundaroute)--}}

            {{--<li>--}}
                {{--<a href="{{ route('waundaroute', $waundaroute->id) }}">--}}
                    {{--{{ $waundaroute->title }}--}}
                {{--</a>--}}
            {{--</li>--}}

        {{--@endforeach--}}

    </ul>

   {{-- $waundaroute->links() --}}

    <a href="{{ route('waundarouten.create') }}" class="btn btn-secondary">Create</a>

@endsection
