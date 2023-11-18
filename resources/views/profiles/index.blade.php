@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}"  class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class ="d-flex justify-content-between align-item-baseline">
                <div class = "d-flex align-items-center pb-3">
                <div class ="h4">{{ $user->username }}

                    <follow-button User-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
                </div>

                @can ('update', $user->profile)
                <a href="/p/create">Add new post</a>
            @endcan  
                
            </div>
            @can ('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan
                
            <div class="d-flex">
                <div class ="pr-6"><strong>{{$postCount}}</strong> posts</div>
                <div class ="pr-6"><strong>{{$followersCount}}</strong> followers</div></div>
                <div class ="pr-6"><strong>{{$followingCount}}</strong> following</div>
            </div>
            <div class="pt-4"><b>{{optional($user->profile)->title}}</b></div>

            <div>{{optional($user->profile)->description}}</div>

                <div><a href="#">{{optional($user->profile)->url}}</a></div>
    </div>
    </div>
    <div class="row pt-5">
    @foreach($user->posts as $post)

    <div class="col-4 d-flex pb-4">
        <a href="/p/{{$post->id}}/">
        <img src="{{ asset('storage/' . $post->image) }}" class="w-100">
        </a>

    </div>

    @endforeach
    </div>
</div>
@endsection
