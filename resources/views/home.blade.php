@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 p-5">
            <img class="rounded-circle" src="https://instagram.fjai1-2.fna.fbcdn.net/v/t51.2885-19/s150x150/88947585_531372544175761_1507515975954595840_n.jpg?_nc_ht=instagram.fjai1-2.fna.fbcdn.net&_nc_ohc=ul2UC38J2LkAX_AuS78&oh=acaecaf4bb4732d2b2cb6740ac52c7d9&oe=5F5F652B">
        </div>
        <div class="col-md-9 pt-5">
            <h1>{{ $user->username }}</h1>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong>posts</div>
                <div class="pr-5"><strong>23k</strong>followers</div>
                <div class="pr-5"><strong>212</strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="https://www.linkedin.com/in/arp-jain/">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img class="w-100" src="https://instagram.fjai1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/17266105_458475394543840_1143638035875758080_n.jpg?_nc_ht=instagram.fjai1-2.fna.fbcdn.net&amp;_nc_cat=104&amp;_nc_ohc=wvG7hhM3e84AX9PqKTe&amp;oh=8abf6c6efeeea6297f5ebc4c1c6a9aee&amp;oe=5F5FC986">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fjai1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/17266105_458475394543840_1143638035875758080_n.jpg?_nc_ht=instagram.fjai1-2.fna.fbcdn.net&amp;_nc_cat=104&amp;_nc_ohc=wvG7hhM3e84AX9PqKTe&amp;oh=8abf6c6efeeea6297f5ebc4c1c6a9aee&amp;oe=5F5FC986">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fjai1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/17266105_458475394543840_1143638035875758080_n.jpg?_nc_ht=instagram.fjai1-2.fna.fbcdn.net&amp;_nc_cat=104&amp;_nc_ohc=wvG7hhM3e84AX9PqKTe&amp;oh=8abf6c6efeeea6297f5ebc4c1c6a9aee&amp;oe=5F5FC986">
        </div>
    </div>
</div>
@endsection
