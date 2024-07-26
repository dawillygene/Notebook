@extends('posts.layout')

@section('content')

<div class="main-content container-fluid">
  <div class="page-title">
      <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">


            
                @if($message = Session::get('success'))
                <div class="alert alert-success">{{$message}}</div>
                @endif
          
         
          
            
              <h3>Posts</h3>
              
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
              <nav aria-label="breadcrumb" class='breadcrumb-header'>
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">All Note</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
  <section class="section">
      <div class="card">
          <div class="card-header">
              Simple Datatable
          </div>
          <div class="card-body">
              <table class='table table-striped' id="table1">
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

                        <td>{{$post->title}}</td>
                        <td>{{Str::words($post->content,12)  }}</td>
                        <td> 
                          <a href="{{ route('posts.show',$post) }}"><button class="badge bg-success">View</button></a>
                          <a href="{{ route('posts.edit',$post) }}"><button class="badge bg-success">edit</button></a>
            
                            <form action="{{route('posts.destroy',$post->id)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="badge bg-danger">delete</button>
                            </form></td>
                      </tr>
                      @endforeach
                  </tbody>
                  <a href="{{route("posts.create")}}" class="btn icon btn-primary"><i data-feather="edit"></i>Create Note</a>
              </table>



          </div>
      </div>

  </section>
</div>

@endsection