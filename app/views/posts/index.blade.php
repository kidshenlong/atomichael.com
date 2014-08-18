@extends('partials/master')

@section('container')
    <div class="row">
        <div class="col-sm-8 blog-main">
            @foreach ($posts as $post)
            <div>
                <h2>{{ $post->title }}</h2>
                {{ HTML::image($post->mainImg,'', array('class' => 'img-responsive'))}}
                <p>{{ $post->body }}</p>
            </div>
            @endforeach
        </div>
    </div>
@stop