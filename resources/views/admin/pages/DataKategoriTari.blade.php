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
                                            <form id="uploadFormFoto" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"></div>
                                                </div>
                                                <div id="uploadStatus"></div>
                                                <div id="cancelUpload"></div>

                                                <div class="custom-file my-3">
                                                    <input accept="image/*" required="" name="file" type="file" class="custom-file-input" id="fileInput">
                                                    <label class="custom-file-label" for="customFile">Upload Gambar</label>
                                                </div>

                                                <div class="form-group">
                                                    <label for="nama_kategori">Nama Kategori</label>
                                                    <input required autocomplete="off" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" name="nama_kategori" placeholder="Masukan nama kategori">
                                                </div>

                                                <div class="form-group">
                                                    <label for="deskripsi_kategori">Deskripsi</label>
                                                    <textarea required class="form-control" class="form-control @error('deskripsi_kategori') is-invalid @enderror" id="deskripsi_kategori" name="deskripsi_kategori" placeholder="Masukan Deskripsi" rows="3"></textarea>
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
                                            <th>Deskripsi</th>
                                            <th>File</th>
                                            <th class="text-center" width="150px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $i => $d)
                                        <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->nama_kategori}}</td>
                                            <td>{{$d->deskripsi}}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalViewDataFoto{{$d->id}}">
                                                    <i class="fa fa-image"></i><span></span>
                                                </button>
                                            </td>
                                            <td class="text-center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalUbahDataKategori{{$d->id}}">
                                                    <i class="fa fa-pen"></i><span></span>
                                                </button>
                                                <button kategori-id="{{$d->id}}" nama-kategori="{{$d->nama_kategori}}" class="btn btn-danger delete_kategori">
                                                    <i class="fa fa-trash"></i><span></span>
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
                                                        <form class="uploadFormFotoUbah" method="post" enctype="multipart/form-data" foto-id="{{$d->id}}">
                                                            {{csrf_field()}}
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"></div>
                                                            </div>
                                                            <div class="uploadStatusUbah"></div>
                                                            <div class="cancelUploadUbah"></div>

                                                            <div class="custom-file my-3">
                                                                <input accept="image/*" name="file" type="file" class="custom-file-input" id="fileInput">
                                                                <label class="custom-file-label" for="customFile">Upload Ulang Gambar</label>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="nama_kategori">Nama Kategori</label>
                                                                <input required autocomplete="off" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" name="nama_kategori" value="{{$d->nama_kategori}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="deskripsi_kategori">Deskripsi</label>
                                                                <textarea required class="form-control" class="form-control @error('deskripsi_kategori') is-invalid @enderror" id="deskripsi_kategori" name="deskripsi_kategori" rows="3">{{$d->deskripsi}}</textarea>
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
        // Tambah
        var ajaxCall;
        $(".progress").hide();
        $("#uploadFormFoto").on('submit', function(e) {
            $(".progress").show();
            e.preventDefault();
            ajaxCall = $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = ((evt.loaded / evt.total) * 100);
                            percentComplete = percentComplete.toFixed(0);
                            $(".progress-bar").width(percentComplete + '%');
                            $(".progress-bar").html(percentComplete + '%');
                        }
                    }, false);
                    return xhr;
                },
                type: 'POST',
                url: '/admin/kategori-tari',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $(".progress-bar").width('0%');
                    $('#uploadStatus').html('<div id="uploadStatus"></div>');
                    $('#cancelUpload').html('<button type="button" class="btn btn-danger btn-sm mt-2 mb-5">cancel</button>');
                    $('.submitUploadFoto').hide();
                    $('.submitUploading').html('<button type="button" disabled class="btn btn-primary float-right"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Uploading..</button>');
                },
                error: function() {
                    $('#uploadStatus').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
                },
                success: function(resp) {
                    if (resp == 'ok') {
                        $('#uploadFormFoto')[0].reset();
                        $('#uploadStatus').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
                        $('#cancelUpload').hide();
                        window.location.reload();
                    } else if (resp == 'err') {
                        $('#uploadStatus').html('<p style="color:#EA4335;">Please select a valid file to upload.</p>');
                    }
                }
            });
        });

        $(document).on('click', '#cancelUpload', function(e) {
            ajaxCall.abort();
            window.location.reload();
            $('#uploadStatus').html('<p style="color:#EA4335;">Upload dibatalkan</p>');
            $('#cancelUpload').html('<div id="cancelUpload"></div>');
            $(".progress-bar").width('0%');
            $(".progress-bar").html('0%');
        });
        // end tambah

        // Ubah 
        var ajaxCallUbah;
        $(".progress").hide();
        $(".uploadFormFotoUbah").on('submit', function(e) {
            var foto_id = $(this).attr('foto-id');
            $(".progress").show();
            e.preventDefault();
            ajaxCallUbah = $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = ((evt.loaded / evt.total) * 100);
                            percentComplete = percentComplete.toFixed(0);
                            $(".progress-bar").width(percentComplete + '%');
                            $(".progress-bar").html(percentComplete + '%');
                        }
                    }, false);
                    return xhr;
                },
                type: 'POST',
                url: '/admin/kategori-tari/' + foto_id,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $(".progress-bar").width('0%');
                    $('.uploadStatusUbah').html('<div class="uploadStatusUbah"></div>');
                    $('.cancelUploadUbah').html('<button type="button" class="btn btn-danger btn-sm mt-2 mb-5">cancel</button>');
                    $('.submitUploadFoto').hide();
                    $('.submitUploading').html('<button type="button" disabled class="btn btn-primary float-right"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Updating..</button>');
                },
                error: function() {
                    $('.uploadStatusUbah').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
                },
                success: function(resp) {
                    if (resp == 'ok') {
                        $('.uploadFormFotoUbah')[0].reset();
                        $('.uploadStatusUbah').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
                        $('.cancelUploadUbah').hide();
                        window.location.reload();
                    } else if (resp == 'err') {
                        $('.uploadStatusUbah').html('<p style="color:#EA4335;">Please select a valid file to upload.</p>');
                    } else if (resp == 'ok_tb_only') {
                        $('.uploadStatusUbah').html('<p style="color:#28A74B;">Data Berhasil Diperbaharui</p>');
                        $('.cancelUploadUbah').hide();
                        window.location.reload();
                    }
                }
            });
        });

        $(document).on('click', '#cancelUploadUbah', function(e) {
            ajaxCallUbah.abort();
            window.location.reload();
            $('.uploadStatusUbah').html('<p style="color:#EA4335;">Upload dibatalkan</p>');
            $('#cancelUploadUbah').html('<div id="cancelUploadUbah"></div>');
            $(".progress-bar").width('0%');
            $(".progress-bar").html('0%');
        });
        // End ubah

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