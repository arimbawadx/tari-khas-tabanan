@extends('user/layouts/main')
@section('title','Informasi Sanggar')

@section('content')
<main>
    <div class="container my-3">
        <div class="row justify-content-center" style="background-color: rgba(253, 232, 169, 0.7);">
            @foreach($data as $i => $d)
            <div class="col-lg-4">
                <div class="card mt-2 card-light text-dark"">
                    <img src=" {{asset('lte/dist/img/'.$d->gambar)}}" height="250px" class="card-img-top">
                    <div class="card-header text-center">
                        <h5 class="card-title">{{$d->nama_kategori}}</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text text-truncate">{{$d->deskripsi}}</p>
                        <a href="/kategori-tarian/{{$d->id}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection