@extends('posts.layout')

@section('content')

    @if(isset($post))
        <h1>{{$post->title}}</h1> <br> 
        <p>{{ $post->content }}</p> <br> 
        <a href="{{ route('posts.index') }}">{{ __('Back to Posts') }}</a>
    @else
        <p>{{ __('Post not found.') }}</p>
        <a href="{{ route('posts.index') }}">{{ __('Back to Posts') }}</a>
    @endif

@endsection
