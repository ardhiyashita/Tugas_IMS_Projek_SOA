@extends('layouts.master')

@section('title', 'Landing Page')

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
            <div class="search" style="left: 1350px;"></div>
            <div class="notification" style="left: 1400px;"></div>
        </nav>

    
        <div class="white-line" style="margin-top: 5rem;">

        <div class="container" style="background: #A71C1C; border-radius:16px">
            <div class="row mt-2 justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-center my-3" style="color: white;">Search Movie</h1>
                    <!--Bisa diubah-->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Movie Anda" id="search-input">
                        <!--Bisa diubah-->
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="button" id="search-button">Submit!</button>
                        </div>
                    </div>
                </div>
            <!-- </div> -->            

            
            <div class="row" id="movie-list" style="width: 80%; border-radius:32px">
                <!--Resiko diubah idnya hrs ubah juga di script.js baris 15-->

            </div>
            </div>

        </div>
    </div>
 @endsection