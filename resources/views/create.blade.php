@extends('layouts.crudStyle')

@section('title', 'Create Film')

@section('content')
<!-- <div class="dark"> -->
<div class="background">
<div class="container">
    <section class="py-5">
        <div class="box-movie">
            <div class="product-name mb-2" style="color: #A71C1C; font-weight: bold; text-align:center; font-size: 28px;">Create Movie</div>
            <div class="white-line mb-3"></div>
            <form action="{{ route('save-create-film') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="box-movie-info">            

                    <div class="container">
                        <img class="img-movie mb-3" src="{{ asset('img/markus-spiske-BpgBohGAXS8-unsplash.jpg') }}" alt="">
                        <input type="file" id="img" name="img" class="form-control" style="width: 400px;">
                    </div>
                    <div class="box-empat" style="text-align: left; padding: 10px; box-shadow:none;">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1" class="roboto-merah">Name of Movie</label>
                                <input type="text" name="nama" class="form-control ps-0 form-control-line" placeholder="   ex: Avatar:The Legend of Aang">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1" class="roboto-merah">Release Date</label>  
                                <input type="date" name="tanggal" class="form-control ps-0 form-control-line" placeholder="   ex: 22 January 2021">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1" class="roboto-merah">Rating</label>
                                <input type="number" name="rating" class="form-control ps-0 form-control-line" placeholder="   ex: 9">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1" class="roboto-merah">Description</label>
                                <textarea name="deskripsi" class="form-control ps-0 form-control-line" placeholder="ex: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea."></textarea>
                        </div>
                        <div class="white-line mt-3 mb-3"></div>

        
                        <button type="submit" class="btn btn-outline-danger tombol-full" href="{{ route('save-create-film') }}">Submit</button>
                        <a class="btn btn-danger" href="{{ route('crud-page') }}">Back</a>
                    </form>
                        
                    </div>
            </div>
        </div>        
    </section>
        
    </div>
</div>

@endsection
