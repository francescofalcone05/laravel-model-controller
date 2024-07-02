@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $home['titolo'] }}</h1>
        <img src="{{ $home['immagine'] }}" alt="">
    </div>
@endsection
