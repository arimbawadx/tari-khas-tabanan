@extends('admin/layouts/main')

@section('title','Data Tarian')

@section('content-header', 'Data Tarian')

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: rgba(245, 245, 245, 0.8);">
                    <div class="card-header">
                        Kelola Data Tarian
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModalTambahDataTarian">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                    Tambah</button>
                            </div>
                            <!-- The Modal Tambah data Tarian-->
                            <div class="modal modalTambah" id="myModalTambahDataTarian">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Tambah Data Tarian <br>
                                                <p class="text-sm">Kelola Tambah Data Tarian</p>
                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form method="post" action="#">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="nama_tarian">Nama Tarian</label>
                                                    <input autocomplete="off" type="text" class="form-control @error('nama_tarian') is-invalid @enderror" id="nama_tarian" name="nama_tarian" placeholder="Masukan Nama Tarian">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pencipta_tarian">Pencipta</label>
                                                    <input autocomplete="off" type="text" class="form-control @error('pencipta_tarian') is-invalid @enderror" id="pencipta_tarian" name="pencipta_tarian" placeholder="Masukan Pencipta Tarian">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tahun_cipta">Tahun Cipta</label>
                                                    <input autocomplete="off" type="text" class="form-control @error('tahun_cipta') is-invalid @enderror yearpicker" id="tahun_cipta" name="tahun_cipta" placeholder="Masukan Tahun Cipta Tarian">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_tarian">Jenis Tari</label>
                                                    <input autocomplete="off" type="text" class="form-control @error('jenis_tarian') is-invalid @enderror" id="jenis_tarian" name="jenis_tarian" placeholder="Masukan Jenis Tari">
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsi_tarian">Deskripsi</label>
                                                    <input autocomplete="off" type="text" class="form-control @error('deskripsi_tarian') is-invalid @enderror" id="deskripsi_tarian" name="deskripsi_tarian" placeholder="Masukan Deskripsi Tarian">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jumlah_penari">Jumlah Penari (*Orang)</label>
                                                    <input autocomplete="off" type="number" class="form-control @error('jumlah_penari') is-invalid @enderror" id="jumlah_penari" name="jumlah_penari" placeholder="Masukan Jumlah Penari">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kategori_tari">Kategori</label>
                                                    <select name="kategori_tari" class="form-control @error('kategori_tari') is-invalid @enderror" id="kategori_tari">
                                                        <option value="">Pilih</option>
                                                        <option>Tari Tradisional</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="video_tarian">Video</label>
                                                    <select name="video_tarian" class="form-control @error('video_tarian') is-invalid @enderror" id="video_tarian">
                                                        <option value="">Pilih</option>
                                                        <option>.....</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto_tarian">Foto</label>
                                                    <select name="foto_tarian" class="form-control @error('foto_tarian') is-invalid @enderror" id="foto_tarian">
                                                        <option value="">Pilih</option>
                                                        <option>........</option>
                                                    </select>
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
                                            <th>No</th>
                                            <th>Nama Tarian</th>
                                            <th>Pencipta</th>
                                            <th>Tahun Cipta</th>
                                            <th>Jenis Tari</th>
                                            <th>Jumlah Penari</th>
                                            <th>Deskripsi</th>
                                            <th width="150px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tari Bungan Sandat</td>
                                            <td>I Nyoman Purna</td>
                                            <td>1999</td>
                                            <td>Tari Kreasi</td>
                                            <td>7 Orang</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, iusto eos minus totam ab recusandae laudantium quisquam incidunt! Totam officiis animi aperiam ex quidem quia deserunt dignissimos tenetur perferendis dolore cupiditate vel cum pariatur officia eos, earum possimus sit molestias.</td>
                                            <td class="text-center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalUbahDataTarian1">
                                                    <i class="fa fa-pen"></i><span></span>
                                                </button>
                                                <button tarian-id="1" nama-tarian="test" class="btn btn-danger delete_tarian">
                                                    <i class="fa fa-trash"></i><span></span>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>Tari Bungan Sandat</td>
                                            <td>I Nyoman Purna</td>
                                            <td>1999</td>
                                            <td>Tari Kreasi</td>
                                            <td>7 Orang</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, iusto eos minus totam ab recusandae laudantium quisquam incidunt! Totam officiis animi aperiam ex quidem quia deserunt dignissimos tenetur perferendis dolore cupiditate vel cum pariatur officia eos, earum possimus sit molestias.</td>
                                            <td class="text-center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalUbahDataTarian1">
                                                    <i class="fa fa-pen"></i><span></span>
                                                </button>
                                                <button tarian-id="1" nama-tarian="test" class="btn btn-danger delete_tarian">
                                                    <i class="fa fa-trash"></i><span></span>
                                                </button>
                                            </td>
                                        </tr>


                                        <!-- The Modal Ubah data Tarian-->
                                        <div class="modal" id="myModalUbahDataTarian1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Form Ubah Data Tarian <br>
                                                            <p class="text-sm">Kelola Ubah Data Tarian</p>
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <form method="post" action="#">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label for="nama_tarian">Nama Tarian</label>
                                                                <input autocomplete="off" type="text" class="form-control @error('nama_tarian') is-invalid @enderror" id="nama_tarian" name="nama_tarian" value="nama">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pencipta_tarian">Pencipta</label>
                                                                <input autocomplete="off" type="text" class="form-control @error('pencipta_tarian') is-invalid @enderror" id="pencipta_tarian" name="pencipta_tarian" value="pencipta">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tahun_cipta">Tahun Cipta</label>
                                                                <input autocomplete="off" type="text" class="form-control @error('tahun_cipta') is-invalid @enderror yearpicker" id="tahun_cipta" name="tahun_cipta" value="1999">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="jenis_tarian">Jenis Tari</label>
                                                                <input autocomplete="off" type="text" class="form-control @error('jenis_tarian') is-invalid @enderror" id="jenis_tarian" name="jenis_tarian" value="jenis">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="deskripsi_tarian">Deskripsi</label>
                                                                <input autocomplete="off" type="text" class="form-control @error('deskripsi_tarian') is-invalid @enderror" id="deskripsi_tarian" name="deskripsi_tarian" value="desk">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="jumlah_penari">Jumlah Penari (*Orang)</label>
                                                                <input autocomplete="off" type="number" class="form-control @error('jumlah_penari') is-invalid @enderror" id="jumlah_penari" name="jumlah_penari" value="7">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="kategori_tari">Kategori</label>
                                                                <select name="kategori_tari" class="form-control @error('kategori_tari') is-invalid @enderror" id="kategori_tari">
                                                                    <option value="">Pilih</option>
                                                                    <option>Tari Tradisional</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="video_tarian">Video</label>
                                                                <select name="video_tarian" class="form-control @error('video_tarian') is-invalid @enderror" id="video_tarian">
                                                                    <option value="">Pilih</option>
                                                                    <option>.....</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_tarian">Foto</label>
                                                                <select name="foto_tarian" class="form-control @error('foto_tarian') is-invalid @enderror" id="foto_tarian">
                                                                    <option value="">Pilih</option>
                                                                    <option>........</option>
                                                                </select>
                                                            </div>

                                                            <button type="button" class="btn btn-secondary float-right ml-1" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Kembali</button>
                                                            <button type="submit" class="btn btn-primary float-right"><i class="fa fa-pen"></i> Ubah</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        $(".yearpicker").yearpicker();
    });
</script>
<!-- /.content-wrapper -->
@endsection