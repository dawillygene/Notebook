@extends('posts.layout')

@section('content')
 




    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-12 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
       
      





            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-8 col-12">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        </div>
                        <div class="card-content">
                        <div class="card-body">
                            <form  action="{{ route('posts.update', $post->id) }}" method="POST"  class="form form-horizontal">
                                @csrf
                                @method('PUT')

                            <div class="form-body">
                                <div class="row">
                                <div class="col-md-4">
                                    <label>Title</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text"  class="form-control" name="title" value="{{ $post->title }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Content</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <textarea class="form-control" name="content">{{ $post->content }}</textarea>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">update</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                   
            </section>





    </div>

@endsection
