@extends('admin/layouts/main')

@section('title','Data Kategori Tari')

@section('content-header', 'Data Kategori Tari')

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: rgba(245, 245, 245, 0.8);">
                    <div class="card-header">
                        Kelola Data Kategori Tari
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModalTambahDataKategori">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                    Tambah</button>
                            </div>
                            <!-- The Modal Tambah data Kategori Tari-->
                            <div class="modal modalTambah" id="myModalTambahDataKategori">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Tambah Data Kategori Tari <br>
                                                <p class="text-sm">Kelola Tambah Data Kategori Tari</p>
                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form method="post" action="/admin/kategori-tari">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="nama_kategori">Nama Kategori</label>
                                                    <input required autocomplete="off" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" name="nama_kategori" placeholder="Masukan nama kategori">
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
                                    <thead>
                                        <tr>
                                            <th>ID Ketegori</th>
                                            <th>Nama Kategori</th>
                                            <th class="text-center" width="150px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $i => $d)
                                        <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->nama_kategori}}</td>
                                            <td class="text-center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalUbahDataKategori{{$d->id}}">
                                                    <i class="fa fa-pen"></i><span></span>
                                                </button>
                                                <button kategori-id="{{$d->id}}" nama-kategori="{{$d->nama_kategori}}" class="btn btn-danger delete_kategori">
                                                    <i class="fa fa-trash"></i><span></span>
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- The Modal Ubah data Kategori Tari-->
                                        <div class="modal" id="myModalUbahDataKategori{{$d->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Form Ubah Data Kategori Tari <br>
                                                            <p class="text-sm">Kelola Ubah Data Kategori Tari</p>
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <form method="post" action="/admin/kategori-tari/{{$d->id}}">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label for="nama_kategori">Nama Kategori</label>
                                                                <input required autocomplete="off" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" name="nama_kategori" value="{{$d->nama_kategori}}">
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
        // delete kategori
        $('.delete_kategori').click(function() {
            var kategori_id = $(this).attr('kategori-id');
            var nama_kategori = $(this).attr('nama-kategori');

            Swal.fire({
                title: "Yakin hapus " + nama_kategori + " ?",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'Hapus',
                denyButtonText: `Batal`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location = "/admin/kategori-tari/" + kategori_id;
                    Swal.fire('Data terhapus!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Jangan Ragu!', '', 'warning')
                }
            })
        });
        // end delete kategori
    });
</script>
<!-- /.content-wrapper -->
@endsection