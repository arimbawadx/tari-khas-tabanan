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
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection