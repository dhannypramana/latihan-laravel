@extends('layouts.core')

@section('container')

    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"]}}</p>

    <a href="/posts">Back to Posts</a>
@endsection