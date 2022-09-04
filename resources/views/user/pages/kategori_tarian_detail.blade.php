@extends('user/layouts/main')
@section('title','Informasi Sanggar')

@section('content')
<main>
    <div class="container my-3">
        <div class="row" style="background-color: rgba(255, 255, 255, 0.7);">
            <div class="col-lg-12">
                <div class="card mt-2 card-light text-dark" style="background-color: rgba(253, 232, 169, 0.7);">
                    <div class="card-header text-center">
                        <img src="{{asset('lte/dist/img/tarikreasi.jpg')}}" width="250px">
                        <h2 class="card-title">Tari Kreasi</h2>
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit eveniet, corrupti minus ex eaque inventore quos voluptates sapiente dignissimos nam! Necessitatibus vitae nihil nulla, veritatis qui officiis quod recusandae hic. Quos, doloremque dolores officia ea ipsam nostrum eveniet, doloribus pariatur atque quaerat distinctio maiores numquam a incidunt explicabo quae vero.
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection