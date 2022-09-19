@extends('user/layouts/main')
@section('title','Informasi Sanggar')

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-lg-12">
                <div class="card mt-2 card-light text-dark">
                    <div class="card-header text-center">
                        <h2 class="card-title">Detail Data {{$tarian->nama_tari}}</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <td>Nama Tarian</td>
                                <td>:</td>
                                <td>{{$tarian->nama_tari}}</td>
                            </tr>
                            <tr>
                                <td>Pencipta</td>
                                <td>:</td>
                                <td>{{$tarian->pencipta_tari}}</td>
                            </tr>
                            <tr>
                                <td>Tahun Cipta</td>
                                <td>:</td>
                                <td>{{$tarian->tahun_cipta}}</td>
                            </tr>
                            <tr>
                                <td>Kategori Tari</td>
                                <td>:</td>
                                <td>{{$tarian->jenis_tarian}}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Penari</td>
                                <td>:</td>
                                <td>{{$tarian->jumlah_penari}} Orang</td>
                            </tr>
                            @if($tarian->pakaian!=null)
                            <tr>
                                <td>Pakaian</td>
                                <td>:</td>
                                <td><?php echo $tarian->pakaian ?></td>
                            </tr>
                            @endif
                            @if($tarian->properti!=null)
                            <tr>
                                <td>Properti</td>
                                <td>:</td>
                                <td>{{$tarian->properti}}</td>
                            </tr>
                            @endif
                            <tr>
                                <td>Deskripsi</td>
                                <td>:</td>
                                <td>{{$tarian->deskripsi}}</td>
                            </tr>
                            @if($tarian->sejarah!=null)
                            <tr>
                                <td>Sejarah</td>
                                <td>:</td>
                                <td>{{$tarian->sejarah}}</td>
                            </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection