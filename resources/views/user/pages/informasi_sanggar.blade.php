@extends('user/layouts/main')
@section('title','Informasi Sanggar')

@section('content')
<main>
    <div class="container my-3">
        <div class="row justify-content-center" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-lg-4">
                <div class="card mt-2 card-light text-dark"">
                    <img src=" {{asset('lte/dist/img/SanggarTariPutraAyu.jpg')}}" class="card-img-top">
                    <div class="card-header text-center">
                        <h5 class="card-title">Sanggar Tari Putra Ayu</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mt-2 card-light text-dark"">
                    <img src=" {{asset('lte/dist/img/SanggarTariPutraAyu.jpg')}}" class="card-img-top">
                    <div class="card-header text-center">
                        <h5 class="card-title">Sanggar Tari Putra Ayu</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mt-2 card-light text-dark"">
                    <img src=" {{asset('lte/dist/img/SanggarTariPutraAyu.jpg')}}" class="card-img-top">
                    <div class="card-header text-center">
                        <h5 class="card-title">Sanggar Tari Putra Ayu</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection