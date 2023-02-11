@extends('user/layouts/main')
@section('title','Data Sanggar')

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-12 mt-3 table-responsive">
                <button class="btn btn-success btn-sm dropdown-toggle float-right" data-toggle="dropdown" aria-haspopup="true">Download
                </button>
                <div class="dropdown-menu text-center">
                    <div class="row">
                        <div class="col-12">
                            <a href="/download/csv/data-sanggar" class="btn btn-success btn-sm mb-3">
                                CSV
                            </a>
                            <a href="/download/xlsx/data-sanggar" class="btn btn-success btn-sm mb-3">
                                Excel
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table datatables table-hover table-bordered table-striped">
                    <thead class="text-center">
                        <tr>
                            <th>ID Sanggar</th>
                            <th>Nama Sanggar</th>
                            <th>Pemilik</th>
                            <th>No Telp</th>
                            <th>Tahun Berdiri</th>
                            <!-- <th>ALamat</th> -->
                            <!-- <th>Titik Kordinat</th> -->
                            <!-- <th class="col-10">Deskripsi</th> -->
                            <!-- <th>File</th> -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $i => $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->nama_sanggar}}</td>
                            <td>{{$d->pemilik}}</td>
                            <td>{{$d->no_telp}}</td>
                            <td>{{$d->tahun_berdiri}}</td>
                            <!-- <td>{{$d->alamat}}</td> -->
                            <!-- <td>{{$d->titik_kordinat}}</td> -->
                            <!-- <td class="col-10">{{$d->deskripsi}}</td> -->
                            <!-- <td class="col-1 text-center">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalViewDataFoto{{$d->id}}">
                                    <i class="fa fa-image"></i><span></span>
                                </button>
                            </td> -->
                            <td class="col-1 text-center">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalViewDetail{{$d->id}}">
                                    Detail
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
                                            <p class="text-sm">{{$d->logo}}</p>
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <img src="{{asset('lte/dist/logo/'.$d->logo)}}" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- The Modal View Detail-->
                        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="myModalViewDetail{{$d->id}}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{$d->nama_sanggar}}<br>
                                            <p class="text-sm">Detail {{$d->nama_sanggar}}</p>
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card mt-2 card-light text-dark">
                                                    <div class="card-header text-center">
                                                        <img src="{{asset('lte/dist/logo/'.$d->logo)}}" width="250px">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-5">Pemilik Sanggar</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{$d->pemilik}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">Tahun Berdiri</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{$d->tahun_berdiri}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">Lokasi</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{$d->alamat}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">Latitude</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{explode(",",$d->titik_kordinat)[0]}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">Longitude</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{explode(",",$d->titik_kordinat)[1]}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">Titik Kordinat</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{$d->titik_kordinat}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">No Telepon</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{$d->no_telp}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">Lokasi</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{$d->alamat}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">Deskripsi</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6"></div>
                                                            <div class="col-12"><?php echo $d->deskripsi ?></div>
                                                        </div>
                                                    </div>
                                                </div>
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