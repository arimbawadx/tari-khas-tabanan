@extends('user/layouts/main')
@section('title','Galeri Penelitian')

@section('content')
<main>
    <div class="container my-3">
        <div class="card-columns" style="background-color: rgba(255, 255, 255, 0.7);">

            <div class="card my-3 card-light text-dark">
                <img src=" {{asset('lte/dist/img/foto_galeri_web/1.jpg')}}" class="card-img-top">
                <div class="card-header text-center">
                    <h5 class="card-title">Dokumentasi kegiatan latihan di Sanggar Tari Bianglala</h5>
                </div>
            </div>


            <div class="card my-3 card-light text-dark">
                <img src=" {{asset('lte/dist/img/foto_galeri_web/2.jpg')}}" class="card-img-top">
                <div class="card-header text-center">
                    <h5 class="card-title">Melakukan ijin penggalian data dengan pembina Tari Legong Andir di Desa Tista Kerambitan Tabanan</h5>
                </div>
            </div>


            <div class="card my-3 card-light text-dark">
                <img src=" {{asset('lte/dist/img/foto_galeri_web/3.jpg')}}" class="card-img-top">
                <div class="card-header text-center">
                    <h5 class="card-title">Melakukan ijin penggalian data kepada Penua dari Tari Leko Desa Tunjuk Marga Kabupaten Tabanan</h5>
                </div>
            </div>


            <div class="card my-3 card-light text-dark">
                <img src=" {{asset('lte/dist/img/foto_galeri_web/4.jpg')}}" class="card-img-top">
                <div class="card-header text-center">
                    <h5 class="card-title">Observasi dan Wawancara ke Sanggar Tari Ayu Tabanan</h5>
                </div>
            </div>


            <div class="card my-3 card-light text-dark">
                <img src=" {{asset('lte/dist/img/foto_galeri_web/5.jpg')}}" class="card-img-top">
                <div class="card-header text-center">
                    <h5 class="card-title">Observasi dan wawancara ke Sanggar Tari Bianglala Tabanan</h5>
                </div>
            </div>


            <div class="card my-3 card-light text-dark">
                <img src=" {{asset('lte/dist/img/foto_galeri_web/6.jpg')}}" class="card-img-top">
                <div class="card-header text-center">
                    <h5 class="card-title">Observasi dan wawancara ke Sanggar Tari Putra Ayu Tabanan</h5>
                </div>
            </div>


            <div class="card my-3 card-light text-dark">
                <img src=" {{asset('lte/dist/img/foto_galeri_web/7.jpg')}}" class="card-img-top">
                <div class="card-header text-center">
                    <h5 class="card-title">Observasi dan Wawancara ke Sanggar Tari Tantra Dewata Tabanan</h5>
                </div>
            </div>


            <div class="card my-3 card-light text-dark">
                <img src=" {{asset('lte/dist/img/foto_galeri_web/8.jpg')}}" class="card-img-top">
                <div class="card-header text-center">
                    <h5 class="card-title">Observasi serta Penggalian Data ke Dinas Kebudayaan Kabupaten Tabanan</h5>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection