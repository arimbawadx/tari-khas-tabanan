@extends('user/layouts/main')
@section('title','Beranda')

@section('content')
<main>
    <div class="container my-3">
        <div class="row">
            <div class="col-lg-4">
                @foreach($tarians as $i => $tarian)
                <div class="row no-gutters">
                    <div class="col-11">
                        <a href="/tarian/{{$tarian->id}}" class="card mt-2 card-light text-dark text-decoration-none">
                            <div class="card-body">
                                <div style="width: 30px; padding:3px; margin-top: -20px; margin-left: -20px;" class="bg-danger text-center text-white">
                                    <h5>{{$i+1}}</h5>
                                </div>
                                <h4>{{$tarian->nama_tari}}</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-1 mt-3">
                        <a href="/tarian/foto/{{$tarian->id}}" class="btn btn-light rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                            </svg>
                        </a>
                        <a href="/tarian/video/{{$tarian->id}}" class="btn btn-light mt-1 rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-4 mt-2">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($carausels as $i =>$carausel)
                        <div class="carousel-item <?php if ($i == 0) : ?> active <?php endif ?>">
                            <img src="{{asset('lte/dist/banner/'.$carausel->file_foto)}}" class="d-block w-100" alt="...">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-4">
                <div href="#" class="card mt-2 card-light text-dark">
                    <div class="card-header text-center">
                        <h4>Tentang Kami</h4>
                    </div>
                    <div class="card-body text-center">
                        <p style="max-width: 15004px;">{{substr($setting->tentang_kami, 0, 300)}}<span id="dots">...</span><span id="more">{{substr($setting->tentang_kami, 300)}}</span></p><button class="btn btn-primary btn-sm" onclick="readMoreFunc()" id="myBtnReadStatus">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection