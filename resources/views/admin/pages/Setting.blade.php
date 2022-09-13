@extends('admin/layouts/main')

@section('title','Setting')

@section('content-header', 'Setting')

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Setting
                    </div>

                    <div class="card-body">
                        <form method="post" action="/admin/setting/{{$d->id}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="judul_header">Judul Header</label>
                                <textarea required class="form-control" class="form-control @error('judul_header') is-invalid @enderror" id="judul_header" name="judul_header" rows="3">{{$d->judul_header}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="tentang_kami">Tentang Kami</label>
                                <textarea required class="form-control" class="form-control @error('tentang_kami') is-invalid @enderror" id="tentang_kami" name="tentang_kami" rows="8">{{$d->tentang_kami}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    // script js disini
</script>
<!-- /.content-wrapper -->
@endsection