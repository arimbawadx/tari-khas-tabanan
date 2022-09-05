@extends('user/layouts/main')
@section('title','Informasi Sanggar')

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-lg-12">
                <div class="card mt-2 card-light text-dark">
                    <div class="card-header text-center">
                        <img src="{{asset('lte/dist/img/SanggarTariPutraAyu.jpg')}}" width="250px">
                        <h2 class="card-title">Sanggar Tari Putra Ayu</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <td>Pemilik Sanggar</td>
                                <td>:</td>
                                <td>I Nyoman Purna</td>
                            </tr>
                            <tr>
                                <td>Tahun Berdiri</td>
                                <td>:</td>
                                <td>2009</td>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <td>:</td>
                                <td>Jln Lorem ipsum dolor sit amet.</td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td>:</td>
                                <td>0897355t173</td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>:</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque accusantium libero est distinctio dolore soluta voluptate non facilis porro magni ducimus quia hic qui fugit, labore magnam itaque exercitationem!</td>
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
    var kordinat = [<?= $kordinat ?>];
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
            window.open('https://maps.google.com/?q=-8.55162, 115.369', '_blank');
        }
    }
    marker.on('click', onMapClick);
    // EndLelfeat
</script>
@endsection