@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($movies as $movie)
            <h2>{{ $movie->title }}</h2>
        @endforeach
    </div>
@endsection
