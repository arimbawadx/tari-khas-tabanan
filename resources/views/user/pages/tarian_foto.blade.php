@extends('user/layouts/main')
@section('title','Informasi Sanggar')

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-lg-12">
                <div class="card mt-2 card-light text-dark">
                    <div class="card-header text-center">
                        <h2 class="card-title">Foto {{$tarian->nama_tari}}</h2>
                    </div>
                    <div class="card-body">
                        @if(count($tarian->photo)==0)
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger" role="alert">
                                    Belum ada foto
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="sumber_picture">Sumber : {{$tarian->photo[0]->sumber;}}</h5>
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach($tarian->photo as $i => $p)
                                        <div class="carousel-item <?php if ($i == 0) : ?> active <?php endif ?>">
                                            <img src="{{asset('lte/dist/foto/'.$p->file_foto)}}" class="d-block w-100">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="sumbers" sumber="{{$p->sumber}}" index-sumber={{$i+1}}>Sumber : {{$p->sumber}}</h5>
                                            </div>
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
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
</main>
<script>
    $(document).ready(function() {
        $('.sumbers').hide();
        $('#carouselExampleControls').on('slid.bs.carousel', function(e) {
            var value = $('.active .carousel-caption .sumbers').html();
            $('.sumber_picture').html('<h5 class="sumber_picture">' + value + '</h5>');
        });
    });
</script>
@endsection