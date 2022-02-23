@extends('layouts.core')

@section('container')
    <h3>{{ $name }}</h3> {{-- Blade Templating Engine--}}
    <p>{{ $email }}</p>
    <img class="img-rounded" src="img/{{ $image }}" alt="{{ $name }}">
@endsection    