@extends('partials/adminMaster')

@section('container')
    <h1>{{ $post->title }}</h1>
    {{ HTML::image($post->mainImg)}}
    <p>{{ $post->body }}</p>
@stop