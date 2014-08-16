<!--<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Atomichael</title>
    {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'); }}
    {{ HTML::style('css/styles.css'); }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Roboto'); }}
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'); }}
</head>

<body>
<h1>
    </h1>yo!<h1>
</h1>

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
@stop-->