
@extends('layouts.app')

@section('content')

<div class="w-90 container-fullwidth mx-5 mt-4">
  <div class="card">
    <div class="card-header">
     <span class="font-weight-bold">Post Info</span>
    </div>
    <div class="card-body">
      <p class=" card-text"><span class="font-weight-bold">title:-</span> {{$post->title}}</p>
      <p class=" card-text font-weight-bold mb-0">Description:-</p>
      <p class=" card-text">{{$post->description}}</p>
    </div>
  </div>

<br>

  <div class="card">
    <div class="card-header">
     <span class="font-weight-bold">Post Creator Info</span>
    </div>
    <div class="card-body">
      <p class=" card-text"><span class="font-weight-bold">Name:-</span> {{$user->name}}</p>
      <p class=" card-text"><span class="font-weight-bold">Email:-</span> {{$user->email}}</p>
      <p class=" card-text"><span class="font-weight-bold">Created At:-</span> {{$post->created_at->isoFormat('dddd Do of MMMM YYYY hh:mm:ss A')}}</p>
    </div>
  </div>

</div>
<!--
    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->description}}</p>
        </div>
      </div>
      -->
@endsection
