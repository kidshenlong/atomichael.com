@extends('partials/master')

@section('container')
<h1>Posts</h1>
    <ul style="list-style: none; text-align: center; font-size: 24px;">
    @foreach ($posts as $post)
        <li>
            <p>{{link_to("/posts/{$post->getSlug()}", $post->title) }}</p>
            {{ HTML::image($post->mainImg)}}
        </li>
    @endforeach
    </ul>
@stop