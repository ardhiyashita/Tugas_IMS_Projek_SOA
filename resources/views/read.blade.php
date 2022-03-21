@extends('layouts.crudStyle')

@section('title', 'Update Film')

@section('content')
<!-- <div class="dark"> -->
<div class="background">
<div class="container">
    <section class="py-5">
        <div class="box-movie">
            <div class="product-name mb-2" style="color: #A71C1C; font-weight: bold; text-align:center; font-size: 28px;">Update Movie</div>
            <div class="white-line mb-3"></div>
            @foreach($film as $item)
                <div class="box-movie-info">
                    <div class="container">
                        <img class="img-movie mb-3" src="/{{ $item->foto }}" alt="">
                    </div>
                    <div class="box-empat" style="text-align: left; padding: 10px; box-shadow:none;">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1" class="roboto-merah">Name of Movie</label>
                                <div type="text" value="" name="nama" class="form-control ps-0 form-control-line" placeholder="   ex: Avatar:The Legend of Aang">{{ $item->nama_film }}</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1" class="roboto-merah">Release Date</label>  
                                <div type="date" value="" name="tanggal" class="form-control ps-0 form-control-line" placeholder="   ex: 22 January 2021">{{ $item->tanggal }}</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1" class="roboto-merah">Rating</label>
                                <div type="number" value="" name="rating" class="form-control ps-0 form-control-line" placeholder="   ex: 9">{{ $item->rating }}</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1" class="roboto-merah">Description</label>
                                <div name="deskripsi" class="form-control ps-0 form-control-line" 
                                style="height:fit-content;">{{ $item->deskripsi }}</div>

                            </div>
                        <div class="white-line mt-3 mb-3"></div>

                        @endforeach                        
                        <a class="btn btn-danger" href="{{ route('crud-page') }}">Back</a>
                        
                    </div>
            </div>
        </div>        
    </section>
        
    </div>
</div>

@endsection
