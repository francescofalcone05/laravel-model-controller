@extends('layouts.app')

@section('content')
    @foreach ($movies as $movie)
        <h1>{{ $movie->title }}</h1>
    @endforeach
    <p>This is my paragraph content.</p>
@endsection
