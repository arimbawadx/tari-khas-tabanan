@extends('user/layouts/main')
@section('title','Informasi Sanggar')

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-lg-12">
                <div class="card mt-2 card-light text-dark">
                    <div class="card-header text-center">
                        <img src="{{asset('lte/dist/logo/'.$data->logo)}}" width="250px">
                        <h2 class="card-title">{{$data->nama_sanggar}}</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <td>Pemilik Sanggar</td>
                                <td>:</td>
                                <td>{{$data->pemilik}}</td>
                            </tr>
                            <tr>
                                <td>Tahun Berdiri</td>
                                <td>:</td>
                                <td>{{$data->tahun_berdiri}}</td>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <td>:</td>
                                <td>{{$data->alamat}}</td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td>:</td>
                                <td>{{$data->no_telp}}</td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>:</td>
                                <td>{{$data->deskripsi}}</td>
                            </tr>
                        </table>

                        <div class="row ">
                            <div class="col-lg-12">
                                <div id="map" style="width: 100%; height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
$kordinat = "-8.55162, 115.369"; ?>
<script>
    var kordinat = [<?= $data->titik_kordinat ?>];
    console.log(kordinat);
    // lefleat
    var map = L.map('map').setView(kordinat, 15);

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker(kordinat).addTo(map)
        .bindPopup('<b>Sanggar Tari Putra Ayu</b>').openPopup();

    function onMapClick(e) {
        if (confirm('Buka dengan Google Maps?')) {
            window.open('https://maps.google.com/?q=' + kordinat, '_blank');
        }
    }
    marker.on('click', onMapClick);
    // EndLelfeat
</script>
@endsection