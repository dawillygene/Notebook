@extends('posts.layout')

@section('content')



<form action="{{route("posts.store")}}" method="POST">
@csrf
<label for="title">Title</label> <br>
<input type="text" name="title" id="title"> <br>
<label for="message">message</label><br>
<textarea name="content" id="" cols="30" rows="10"></textarea> <br>
<input type="submit" name="submit" id="submit" value="store">
</form>





@endsection