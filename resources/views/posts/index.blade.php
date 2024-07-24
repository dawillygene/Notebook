@extends('layout')

@section('content')

<h1>Posts</h1>

<a href="{{route(posts.create)}}">Create New Post</a>
@if($message = Session::get('success'))
<div>{{$message}}</div>
@endif
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
          <tr>
            <td>{{post->title}}</td>
            <td>{{post->content}}</td>
            <td></td>
        </tr>  <form action="{{route('posts.destroy',$post->id)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
        </form>
        @endforeach
    </tbody>
</table>



@endsection