@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" style="height:150px ; width:150px" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                    <div>
                        <h1>{{ $user->username }}</h1>
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}" ></follow-button>
                    </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
                
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">ُEdit Proifle</a>
            @endcan
                
            <div class="d-flex">
                <div class="pr-3"> <strong>{{ $postCount }}</strong>Posts</div>
                <div class="pr-3"> <strong>{{ $followersCount }}</strong>Followers</div>
                <div class="pr-3"> <strong>{{ $followingCount }}</strong>Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>    
        @endforeach
        
    </div>
</div>
@endsection
