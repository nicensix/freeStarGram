@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($posts as $post)

  <div class="row">
    <div class="col-8 offset-2">
    <img src="/storage/{{$post->image}}" class="w-100">
</div>
</div>
<div class="row">
<div class="col-6 offset-3">
    <div>
        <div class="d-flex align-items-center">
        <div class="pr-3">
            <a href="/profile/{{ $post->user->id}}">
            <img src="{{$post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px;">
            </a>
          </div>
          <div>
            <div class="fw-bold">
              <a href="/profile/{{$post->user->id}}">
                <span class= "text-dark">{{$post->user->username}}</span>

        <p><span class="fw-bold"><a href="/profile/{{$post->user->id}}">
          <span class= "text-dark">{{$post->user->username}}</span>
        </a></span> {{$post->caption}}</p>
    </div>
</div>
  </div>

  @endforeach

  <div class="row">
    <div class="col-12 d-flex justify-content-center">
    {{$posts->links()}}
    </div>
  </div>
</div>
@endsection
