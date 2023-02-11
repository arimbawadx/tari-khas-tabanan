@extends('user/layouts/main')
@section('title','Data Tarian')

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
                            <a href="/download/csv/data-tarian" class="btn btn-success btn-sm mb-3">
                                CSV
                            </a>
                            <a href="/download/xlsx/data-tarian" class="btn btn-success btn-sm mb-3">
                                Excel
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table datatables table-hover table-bordered table-striped">
                    <thead class="text-center">
                        <tr>
                            <th class="col-1">ID Tari</th>
                            <th class="col-2">ID Kategori</th>
                            <th class="col-2">Nama Tarian</th>
                            <th class="col-2">Pencipta</th>
                            <th class="col-2">Penata Tabuh</th>
                            <th class="col-2">Tahun Cipta</th>
                            <!-- <th class="col-2">Jenis Tari</th> -->
                            <!-- <th class="col-2">Jumlah Penari</th> -->
                            <!-- <th class="col-10">Pakaian</th> -->
                            <!-- <th class="col-6">Properti</th> -->
                            <!-- <th class="col-10">Deskripsi</th> -->
                            <!-- <th class="col-1">Sejarah</th> -->
                            <th class="col-1">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($data as $i => $d)
                        <tr>
                            <td class="col-1">{{$d->id}}</td>
                            <td class="col-2">{{$d->kategori_id}}</td>
                            <td class="col-2">{{$d->nama_tari}}</td>
                            <td class="col-2">{{$d->pencipta_tari}}</td>
                            <td class="col-2">{{$d->penata_tabuh}}</td>
                            <td class="col-2">{{$d->tahun_cipta}}</td>
                            <!-- <td class="col-2">{{$d->jenis_tarian}}</td> -->
                            <!-- <td class="col-2">{{$d->jumlah_penari}}</td> -->
                            <!-- <td class="col-6">{{$d->properti}}</td> -->
                            <!-- <td class="col-1">{{$d->sejarah}}</td> -->
                            <td class="col-1 text-center">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalViewDetail{{$d->id}}">
                                    Detail
                                </button>
                            </td>
                        </tr>

                        <!-- The Modal View Detail-->
                        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="myModalViewDetail{{$d->id}}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{$d->nama_tari}}<br>
                                            <p class="text-sm">Detail {{$d->nama_tari}}</p>
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card mt-2 card-light text-dark">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-5">Nama Tarian</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{$d->nama_tari}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">Pencipta</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{$d->pencipta_tari}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">Penata Tabuh</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{$d->penata_tabuh}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">Tahun Cipta</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{$d->tahun_cipta}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">Jenis Tarian</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{$d->jenis_tarian}}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-5">Jumlah Penari</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6">{{$d->jumlah_penari}}</div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-5">Pakaian</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6"></div>
                                                            <div class="col-12"><?php echo $d->pakaian ?></div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-5">Properti</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6"></div>
                                                            <div class="col-12"><?php echo $d->properti ?></div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-5">Deskripsi</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6"></div>
                                                            <div class="col-12"><?php echo $d->deskripsi ?></div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-5">Sejarah</div>
                                                            <div class="col-1">:</div>
                                                            <div class="col-6"></div>
                                                            <div class="col-12"><?php echo $d->sejarah ?></div>
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