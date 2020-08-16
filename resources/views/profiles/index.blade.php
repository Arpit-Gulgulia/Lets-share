@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 p-5">
            <img class="rounded-circle" src="https://instagram.fjai1-2.fna.fbcdn.net/v/t51.2885-19/s150x150/88947585_531372544175761_1507515975954595840_n.jpg?_nc_ht=instagram.fjai1-2.fna.fbcdn.net&_nc_ohc=ul2UC38J2LkAX_AuS78&oh=acaecaf4bb4732d2b2cb6740ac52c7d9&oe=5F5F652B">
        </div>
        <div class="col-md-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="https://www.linkedin.com/in/arp-jain/">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
            <div class="col-4 py-3">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100" src="/storage/{{ $post->image }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
