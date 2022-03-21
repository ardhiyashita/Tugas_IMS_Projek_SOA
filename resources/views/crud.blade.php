@extends('layouts.master')

@section('title', 'CRUD Page')

@section('content')
    <div class="desktop">
        <nav>
            <div class="logo">
                HealingTime
            </div>
            <ul>
                <li class="movie"><a href="{{ route('landing-page') }}">Search</a></li>
                <li class="series"><a href="{{ route('crud-page') }}">CRUD</a></li>
                <li class="cartoon"><a href=""></a></li>
                <li class="anime"><a href=""></a></li>
            </ul>
            <div class="search"></div>
            <div class="notification"></div>
        </nav>
        <div class="side-user"></div>
        <img class="profile-user" src="{{ asset('img/unsplash_Zz5LQe-VSMY') }}.png" alt="">
        <div class="username">Katty Perry</div>
        <div class="user-gmail">kattyper2032@gmail.com</div>
        <div class="user-line" style="left: 1107px;top: 133px;"></div>
        <div class="create-movie"></div>
        <a class="text-crud" style="left: 1188px;top: 166px;" href="{{ route('create-film') }}">Create Movie</a>
        <div class="read-movie"></div>
        <a class="text-crud" style="left: 1188px;top: 234px;" href="{{ route('login-page') }}">Member</a>
        <div class="update-movie"></div>
        <a class="text-crud" style="left: 1188px;top: 309px;" href="#">Buy Film</a>
        <!-- <div class="delete-movie"></div>
        <a class="text-crud" style="left: 1188px;top: 379px;" href="#">-</a> -->
        <div class="user-line" style="left: 1107px;top: 467px;"></div>
        <div class="box-news">
            <div class="text-news">Today's Booming Movie</div>
            <div class="img-news"><img src="{{ asset('img/unsplash_wMkaMXTJjlQ.png') }}" alt=""></div>
            <div class="text-news-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</div>
        </div>
        <div class="box-next">
            <div class="populer">Populer to Watch</div>
            <div style="display: flex;">
                <div class="btn-lg btn-danger mx-2"><img src="{{ asset('img/panah-kiri') }}.svg" alt=""></div>
                <div class="btn-lg btn-danger"><img src="{{ asset('img/panah-kanan') }}.svg" alt=""></div>
            </div>
        
        </div>
        <div class="box-film gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        </div>

        <!-- <div class="white-line"></div> -->
        <div class="box-film-bottom gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach($film as $item)
        <form action="{{ route('delete-film', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                
                    <div class="box-film-info">                    
                        <!-- Product image-->
                        <img class="card-img-top" style="border-radius: 16px;" src="/{{ $item->foto }}" alt="..." />
                            <div class="text-film my-2">{{ $item->nama_film }}</div>
                            <div class="" style="justify-content: space-between;">
                                <a href="{{ route('update-film', $item->id) }}" class="btn btn-success">Update </a>
                                <a href="{{ route('read-film', $item->id) }}" class="btn btn-primary">Read </a>
                                <button type="submit" href="{{ route('delete-film', $item->id) }}" class="btn btn-danger">Delete </button>
                            </div>
                    </div>
                        
        </form>
        @endforeach
        </div>
    </div>
    <div class="box-iklan"><img src="{{ asset('img/unsplash_3pR7d-tIRx8') }}.png" alt=""></div>
        <div class="title-ads">New Upcoming</div>   
            <div class="title-text">House of Hunt</div>
                <div class="button-watch"></div>
                <div class="watch-now">WATCH NOW</div>
    </div>
    @endsection