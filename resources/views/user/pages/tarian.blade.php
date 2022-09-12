@extends('user/layouts/main')
@section('title') {{$kategoriPilihan}} @endsection

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-lg-12">
                <div class="card mt-2 card-light text-dark">
                    <div class="card-header text-center">
                        <h2 class="card-title">{{$kategoriPilihan}}</h2>
                    </div>
                    <div class="card-body">
                        @foreach($tarians as $i => $tarian)
                        @if($tarian->jenis_tarian == $kategoriPilihan)
                        <div class="mb-5">
                            <div class="row p-3 border-top">
                                <div class="col-5">Nama Tarian</div>
                                <div class="col-2">:</div>
                                <div class="col-5">{{$tarian->nama_tari}}</div>
                            </div>
                            <div class="row p-3 border-top">
                                <div class="col-5">Tahun Cipta</div>
                                <div class="col-2">:</div>
                                <div class="col-5">{{$tarian->tahun_cipta}}</div>
                            </div>
                            <div class="row p-3 border-top">
                                <div class="col-5">Kategori</div>
                                <div class="col-2">:</div>
                                <div class="col-5">{{$tarian->jenis_tarian}}</div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="/tarian/{{$tarian->id}}" class="btn btn-danger btn-sm">Detail</a>
                                    <a href="#" class="btn btn-danger btn-sm">Foto</a>
                                    <a href="#" class="btn btn-danger btn-sm">Video</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection