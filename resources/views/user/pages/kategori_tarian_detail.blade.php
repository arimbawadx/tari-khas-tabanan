@extends('user/layouts/main')
@section('title','Informasi Sanggar')

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-lg-12">
                <div class="card mt-2 card-light text-dark" style="background-color: rgba(253, 232, 169, 0.7);">
                    <div class="card-header text-center">
                        <img src="{{asset('lte/dist/img/'.$data->gambar)}}" width="250px">
                        <h2 class="card-title">{{$data->nama_kategori}}</h2>
                    </div>
                    <div class="card-body">
                        {{$data->deskripsi}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection