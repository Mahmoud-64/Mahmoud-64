
@extends('layouts.app')

@section('content')
      <div class="container m-5">
      <div class="text-center">
        <a href="{{route('posts.create')}}" class="btn btn-outline-success font-weight-bold mb-5">Create Post</a>
      </div>
          <table class="table ml-5">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Slug</th>
                  <!--<th scope="col">Description</th> -->
                  <th scope="col">Posted By</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                <th scope="row">{{ $post->id }}</th>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->slug }}</td>
                 <!-- <td>{{ $post->description }}</td>-->
                  <td>{{ $post->user ? $post->user->name : 'not exist'}}</td>
                  <td>{{ $post->created_at->toDateString() }}</td>

                <td>
                <a href="{{route('posts.show',['post' => $post->id])}}" class="btn btn-info btn-sm">View</a>
                <a href="{{route('posts.edit',['post' => $post->id])}}" class="btn btn-success btn-sm">edit</a>
                <form class="d-inline" method="post" action="{{route('posts.show',['post' => $post->id])}}">
                @csrf
                @method('DELETE')
                      <button type="submit" onclick="return confirm('are you sure you want to delete this post')" class="btn btn-primary btn-sm btn-danger">delete</button>
                </form>
                </td>
                </tr>
              @endforeach
              </tbody>
            </table>
      </div>
@endsection
