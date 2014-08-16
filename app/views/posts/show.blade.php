@extends('partials/master')

@section('container')
<h1>{{ $post->title }}</h1>
@if (Auth::check())
    {{link_to("admin/posts/{$post->getSlug()}/edit", 'Edit') }}
@endif
{{ HTML::image($post->mainImg)}}
<p>{{ $post->body }}</p>
@stop