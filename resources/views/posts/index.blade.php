@extends('layouts.app')
@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                <p><span class="font-weight-bold">
                    <a href="/profile/{{ $post->user->id }}" class="text-dark">
                        {{ $post->user->username }}
                    </a>   
                </span> {{ $post->caption }}</p>
            </div> 
               
        </div>
    </div>    
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->render() }}
        </div>
    </div>
</div>
    
@endsection