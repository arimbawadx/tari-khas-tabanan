@extends('user/layouts/main')
@section('title','Informasi Sanggar')

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-lg-12">
                <div class="card mt-2 card-light text-dark">
                    <div class="card-header text-center">
                        <h2 class="card-title">Hasil Pencarian : "{{$pencarian}}"</h2>
                    </div>
                    <div class="card-body">
                        @if(count($hasil)==0)
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger text-center" role="alert">
                                    Tidak ada yang Anda cari
                                </div>
                            </div>
                        </div>
                        @endif
                        @foreach($hasil as $i => $tarian)
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
                                    <a href="/tarian/foto/{{$tarian->id}}" class="btn btn-danger btn-sm">Foto</a>
                                    <a href="/tarian/video/{{$tarian->id}}" class="btn btn-danger btn-sm">Video</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection