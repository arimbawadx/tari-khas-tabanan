@extends('user/layouts/main')
@section('title','Informasi Sanggar')

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-lg-12">
                <div class="card mt-2 card-light text-dark">
                    <div class="card-header text-center">
                        <h2 class="card-title">Detail Data Tari Bungan Sandat Serasi</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <td>Nama Tarian</td>
                                <td>:</td>
                                <td>Tari Bungan Sandat Serasi</td>
                            </tr>
                            <tr>
                                <td>Pencipta</td>
                                <td>:</td>
                                <td>Anonim</td>
                            </tr>
                            <tr>
                                <td>Tahun Cipta</td>
                                <td>:</td>
                                <td>2014</td>
                            </tr>
                            <tr>
                                <td>Kategori Tari</td>
                                <td>:</td>
                                <td>Tari Kreasi</td>
                            </tr>
                            <tr>
                                <td>Jumlah Penari</td>
                                <td>:</td>
                                <td>7 Orang</td>
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