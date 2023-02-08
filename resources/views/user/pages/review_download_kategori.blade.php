@extends('user/layouts/main')
@section('title','Data Kategori Tarian')

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-12 mt-3 table-responsive">
                <a href="/download/data-kategori" class="btn btn-success btn-sm mb-3 float-right">
                    Download
                </a>
                <table class="table datatables table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID Ketegori</th>
                            <th>Nama Kategori</th>
                            <th>Deskripsi</th>
                            <th>Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $i => $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->nama_kategori}}</td>
                            <td>{{$d->deskripsi}}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalViewDataFoto{{$d->id}}">
                                    Lihat
                                </button>
                            </td>
                        </tr>

                        <!-- The Modal View data Foto-->
                        <div class="modal" id="myModalViewDataFoto{{$d->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Data Foto<br>
                                            <p class="text-sm">{{$d->gambar}}</p>
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <img src="{{asset('lte/dist/img/'.$d->gambar)}}" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<style>
    .card-img-top {
        width: 100%;
        height: 340px;
        position: relative;
        overflow: hidden;
    }

    .card-img-top>img {
        width: 100%;
        max-width: inherit;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%) scale(1.5);
        -moz-transform: translate(-50%, -50%) scale(1.5);
        -o-transform: translate(-50%, -50%) scale(1.5);
        transform: translate(-50%, -50%) scale(1.5);
    }
</style>
@endsection