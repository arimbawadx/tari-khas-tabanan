@extends('admin/layouts/main')

@section('title','Data Video')

@section('content-header', 'Data Video')

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: rgba(245, 245, 245, 0.8);">
                    <div class="card-header">
                        Kelola Data Video
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModalTambahDataVideo">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                    Tambah</button>
                            </div>
                            <!-- The Modal Tambah data Video-->
                            <div class="modal modalTambah" id="myModalTambahDataVideo">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Tambah Data Video <br>
                                                <p class="text-sm">Kelola Tambah Data Video</p>
                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"></div>
                                            </div>
                                            <div id="uploadStatus"></div>
                                            <div id="cancelUpload"></div>

                                            <form id="uploadFormVideo" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="tarians_id">Tarian</label>
                                                    <select required name="tarians_id" class="form-control @error('tarians_id') is-invalid @enderror" id="tarians_id">
                                                        <option value="">Pilih</option>
                                                        @foreach($tarians as $i => $t)
                                                        <option value="{{$t->id}}">{{$t->nama_tari}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="judul_video">Judul Video</label>
                                                    <input required autocomplete="off" type="text" class="form-control @error('judul_video') is-invalid @enderror" id="judul_video" name="judul_video" placeholder="Masukan Judul Video">
                                                </div>
                                                <div class="form-group">
                                                    <label for="sumber_video">Sumber</label>
                                                    <input required autocomplete="off" type="text" class="form-control @error('sumber_video') is-invalid @enderror" id="sumber_video" name="sumber_video" placeholder="Masukan Sumber Video">
                                                </div>
                                                <div class="custom-file my-3">
                                                    <input accept="video/mp4,video/x-m4v,video/*" required="" name="file" type="file" class="custom-file-input" id="fileInput">
                                                    <label class="custom-file-label" for="customFile">Upload Video</label>
                                                </div>

                                                <button type="button" class="btn btn-secondary float-right ml-1" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Kembali</button>
                                                <button type="submit" class="btn btn-primary float-right submitUploadVideo"><i class="fa fa-plus"></i> Tambah</button>
                                                <div class="submitUploading"></div>
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
                                            <th>ID Video</th>
                                            <th>ID Tarian</th>
                                            <th>Judul Video</th>
                                            <th>Sumber</th>
                                            <th>File</th>
                                            <th width="150px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>6</td>
                                            <td>Tari Kidang Kencana</td>
                                            <td>Youtube Ngetis Picture</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalViewDataVideo1">
                                                    <i class="fa fa-video"></i><span></span>
                                                </button>
                                            </td>
                                            <td class="text-center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalUbahDataVideo1">
                                                    <i class="fa fa-pen"></i><span></span>
                                                </button>
                                                <button video-id="1" nama-video="test" class="btn btn-danger delete_video">
                                                    <i class="fa fa-trash"></i><span></span>
                                                </button>
                                            </td>
                                        </tr>
                                        @foreach($data as $i => $d)
                                        <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->tarians_id}}</td>
                                            <td>{{$d->judul_video}}</td>
                                            <td>{{$d->sumber}}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalViewDataVideo1">
                                                    <i class="fa fa-video"></i><span></span>
                                                </button>
                                            </td>
                                            <td class="text-center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalUbahDataVideo1">
                                                    <i class="fa fa-pen"></i><span></span>
                                                </button>
                                                <button video-id="1" nama-video="test" class="btn btn-danger delete_video">
                                                    <i class="fa fa-trash"></i><span></span>
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- The Modal View data Video-->
                                        <div class="modal" id="myModalViewDataVideo1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Data Video<br>
                                                            <p class="text-sm">Judul</p>
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <video width="100%" height="100%" controls>
                                                                    <source src="{{asset('lte/dist/img/test.mp4')}}" type="video/mp4">
                                                                </video>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- The Modal Ubah data Video-->
                                        <div class="modal" id="myModalUbahDataVideo1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Form Ubah Data Video <br>
                                                            <p class="text-sm">Kelola Ubah Data Video</p>
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <form id="uploadFormVideoUbah" method="post" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label for="judul_video">Judul Video</label>
                                                                <input required autocomplete="off" type="text" class="form-control @error('judul_video') is-invalid @enderror" id="judul_video" name="judul_video" value="Judul">
                                                            </div>
                                                            <div class="form-group">
                                                                <label required for="sumber_video">Sumber</label>
                                                                <input autocomplete="off" type="text" class="form-control @error('sumber_video') is-invalid @enderror" id="sumber_video" name="sumber_video" value="Sumber">
                                                            </div>
                                                            <div class="custom-file my-3">
                                                                <input accept="video/mp4,video/x-m4v,video/*" required="" name="file" type="file" class="custom-file-input" id="fileInputUbah">
                                                                <label class="custom-file-label" for="customFile">Upload Video</label>
                                                            </div>

                                                            <button type="button" class="btn btn-secondary float-right ml-1" data-dismiss="modal"><i class="fa fa-arrow-left"></i>Kembali</button>
                                                            <button type="submit" class="btn btn-primary float-right submitUploadVideoUbah"><i class="fa fa-plus"></i> Tambah</button>
                                                            <div class="submitUploadingUbah"></div>
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
        var ajaxCall;
        $(".progress").hide();
        $("#uploadFormVideo").on('submit', function(e) {
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
                url: '/admin/video',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $(".progress-bar").width('0%');
                    $('#uploadStatus').html('<div id="uploadStatus"></div>');
                    $('#cancelUpload').html('<button type="button" class="btn btn-danger btn-sm mt-2 mb-5">cancel</button>');
                    $('.submitUploadVideo').hide();
                    $('.submitUploading').html('<button type="button" disabled class="btn btn-primary float-right"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Uploading..</button>');
                },
                error: function() {
                    $('#uploadStatus').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
                },
                success: function(resp) {
                    if (resp == 'ok') {
                        $('#uploadFormVideo')[0].reset();
                        $('#uploadStatus').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
                        $('#cancelUpload').hide();
                        $('#submitUploading').hide();
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


        // File type validation
        // $("#fileInput").change(function() {
        //     var allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
        //     var file = this.files[0];
        //     var fileType = file.type;
        //     if (!allowedTypes.includes(fileType)) {
        //         alert('Please select a valid file (PDF/DOC/DOCX/JPEG/JPG/PNG/GIF).');
        //         $("#fileInput").val('');
        //         return false;
        //     }
        // });
    });
</script>
<!-- /.content-wrapper -->
@endsection