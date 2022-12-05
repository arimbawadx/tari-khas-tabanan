@extends('user/layouts/main')
@section('title','Profil Peneliti')

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-12">
                <div class="card my-2 card-light text-dark">
                    <div class="card-body">
                        <div class="bg-danger pb-0 pt-4 mt-n3 mx-n3"></div>
                        <div class="row h-100 align-items-center justify-content-center">
                            <div class="col-lg-3 col-12 text-center">
                                <img class="my-2" src="{{asset('lte/dist/img/profil_peneliti.jpeg')}}" alt="pas_foto" width="250">
                            </div>
                            <div class="col-lg-7 col-12">
                                <table>
                                    <tr style="line-height: 35px;">
                                        <th>Nama</th>
                                        <th class="text-center" width="50px">:</th>
                                        <th>Luh Made Dwi Lestari</th>
                                    </tr>
                                    <tr style="line-height: 35px;">
                                        <th>Alamat</th>
                                        <th class="text-center" width="50px">:</th>
                                        <th>Br. Dakdakan, Desa Abiantuwung, Kec. Kediri, Kab. Tabanan</th>
                                    </tr>
                                    <tr style="line-height: 35px;">
                                        <th>TTL</th>
                                        <th class="text-center" width="50px">:</th>
                                        <th>Tabanan, 11 Mei 2001</th>
                                    </tr>
                                    <tr style="line-height: 35px;">
                                        <th>Telepon</th>
                                        <th class="text-center" width="50px">:</th>
                                        <th>085 947 365 537</th>
                                    </tr>
                                    <tr style="line-height: 35px;">
                                        <th>Email</th>
                                        <th class="text-center" width="50px">:</th>
                                        <th>dwilestari052001@gmail.com</th>
                                    </tr>
                                    <tr style="line-height: 35px;">
                                        <th>Motto</th>
                                        <th class="text-center" width="50px">:</th>
                                        <th>"Lihatlah hal positif setiap harinya, walau terkadang kita harus melihat lebih keras untuk mendapatkannya".</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="bg-danger pb-0 pt-4 mb-n3 mx-n3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection