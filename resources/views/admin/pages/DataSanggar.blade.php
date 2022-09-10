@extends('admin/layouts/main')

@section('title','Data Sanggar')

@section('content-header', 'Data Sanggar')

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: rgba(245, 245, 245, 0.8);">
                    <div class="card-header">
                        Kelola Data Sanggar
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModalTambahDataSanggar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                    Tambah</button>
                            </div>
                            <!-- The Modal Tambah data sanggar-->
                            <div class="modal modalTambah" id="myModalTambahDataSanggar">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Tambah Data Sanggar <br>
                                                <p class="text-sm">Kelola Tambah Data Sanggar</p>
                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form method="post" action="/admin/data-sanggar">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="nama_sanggar">Nama Sanggar</label>
                                                    <input required autocomplete="off" type="text" class="form-control @error('nama_sanggar') is-invalid @enderror" id="nama_sanggar" name="nama_sanggar" placeholder="Masukan Nama Sanggar">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pemilik_sanggar">Pemilik</label>
                                                    <input required autocomplete="off" type="text" class="form-control @error('pemilik_sanggar') is-invalid @enderror" id="pemilik_sanggar" name="pemilik_sanggar" placeholder="Masukan Pemilik Sanggar">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_sanggar">Alamat </label>
                                                    <input required autocomplete="off" type="text" class="form-control @error('alamat_sanggar') is-invalid @enderror alamat_sanggar" id="alamat_sanggar" name="alamat_sanggar" placeholder="Masukan Alamat Sanggar">
                                                </div>
                                                <div class="form-group">
                                                    <label for="titik_kordinat">Titik Kordinat</label>
                                                    <input required autocomplete="off" type="text" class="form-control @error('titik_kordinat') is-invalid @enderror titik_kordinat" id="titik_kordinat" name="titik_kordinat" placeholder="Masukan Latitude dan Longititude">
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsi_sanggar">Deskripsi</label>
                                                    <input required autocomplete="off" type="text" class="form-control @error('deskripsi_sanggar') is-invalid @enderror" id="deskripsi_sanggar" name="deskripsi_sanggar" placeholder="Masukan Deskripsi Sanggar">
                                                </div>

                                                <button type="button" class="btn btn-secondary float-right ml-1" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Kembali</button>
                                                <button type="submit" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table datatables table-hover table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="w-auto">ID Sanggar</th>
                                            <th>Nama Sanggar</th>
                                            <th>Pemilik</th>
                                            <th>ALamat</th>
                                            <th>Titik Kordinat</th>
                                            <th class="th-lg">Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $i => $d)
                                        <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->nama_sanggar}}</td>
                                            <td>{{$d->pemilik}}</td>
                                            <td>{{$d->alamat}}</td>
                                            <td>{{$d->titik_kordinat}}</td>
                                            <td>{{$d->deskripsi}}</td>
                                            <td class="text-center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalUbahDataSanggar{{$d->id}}">
                                                    <i class="fa fa-pen"></i><span></span>
                                                </button>
                                                <button sanggar-id="{{$d->id}}" nama-sanggar="{{$d->nama_sanggar}}" class="btn btn-danger delete_sanggar">
                                                    <i class="fa fa-trash"></i><span></span>
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- The Modal Ubah data sanggar-->
                                        <div class="modal" id="myModalUbahDataSanggar{{$d->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Form Ubah Data Sanggar <br>
                                                            <p class="text-sm">Kelola Ubah Data Sanggar</p>
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <form method="post" action="/admin/data-sanggar/{{$d->id}}">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label for="nama_sanggar">Nama Sanggar</label>
                                                                <input required autocomplete="off" type="text" class="form-control @error('nama_sanggar') is-invalid @enderror" id="nama_sanggar" name="nama_sanggar" value="{{$d->nama_sanggar}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pemilik_sanggar">Pemilik</label>
                                                                <input required autocomplete="off" type="text" class="form-control @error('pemilik_sanggar') is-invalid @enderror" id="pemilik_sanggar" name="pemilik_sanggar" value="{{$d->pemilik}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="alamat_sanggar">Alamat </label>
                                                                <input required autocomplete="off" type="text" class="form-control @error('alamat_sanggar') is-invalid @enderror" id="alamat_sanggar" name="alamat_sanggar" value="{{$d->alamat}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="titik_kordinat">Titik Kordinat</label>
                                                                <input required autocomplete="off" type="text" class="form-control @error('titik_kordinat') is-invalid @enderror titik_kordinat" id="titik_kordinat" name="titik_kordinat" value="{{$d->titik_kordinat}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="deskripsi_sanggar">Deskripsi</label>
                                                                <input required autocomplete="off" type="text" class="form-control @error('deskripsi_sanggar') is-invalid @enderror" id="deskripsi_sanggar" name="deskripsi_sanggar" value="{{$d->deskripsi}}">
                                                            </div>

                                                            <button type="button" class="btn btn-secondary float-right ml-1" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Kembali</button>
                                                            <button type="submit" class="btn btn-primary float-right"><i class="fa fa-pen"></i> Ubah</button>
                                                        </form>
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
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        // delete sanggar
        $('.delete_sanggar').click(function() {
            var sanggar_id = $(this).attr('sanggar-id');
            var nama_sanggar = $(this).attr('nama-sanggar');

            Swal.fire({
                title: "Yakin hapus " + nama_sanggar + " ?",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'Hapus',
                denyButtonText: `Batal`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location = "/admin/data-sanggar/" + sanggar_id;
                    Swal.fire('Data terhapus!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Jangan Ragu!', '', 'warning')
                }
            })
        });
        // end delete sanggar
    });
</script>
<!-- /.content-wrapper -->
@endsection