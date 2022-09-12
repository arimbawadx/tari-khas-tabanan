@extends('user/layouts/main')
@section('title','Informasi Sanggar')

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-lg-12">
                <div class="card mt-2 card-light text-dark">
                    <div class="card-header text-center">
                        <h2 class="card-title">Video {{$tarian->nama_tari}}</h2>
                    </div>
                    <div class="card-body">
                        @if(count($tarian->video)==0)
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger" role="alert">
                                    Belum ada video
                                </div>
                            </div>
                        </div>
                        @endif
                        @foreach($tarian->video as $i => $v)
                        <div class="row mb-5">
                            <div class="col-lg-12">
                                <video width="100%" height="100%" controls>
                                    <source src="{{asset('lte/dist/video/'.$v->file_video)}}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection