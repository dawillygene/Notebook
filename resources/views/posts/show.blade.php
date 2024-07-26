@extends('posts.layout')

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>View</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
   
    @if(isset($post))
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$post->title}}</h4>
                </div>
                <div class="card-body">
                    <p>{{ $post->content }} </p>
                </div>
                <a href="{{ route('posts.index') }}">{{ __('Back to Posts') }}</a>
            </div>
        </section>
        @else
        <p>{{ __('Post not found.') }}</p>
        <a href="{{ route('posts.index') }}">{{ __('Back to Posts') }}</a>
    @endif


    </div>







@endsection
