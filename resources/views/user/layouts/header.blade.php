<?php

function hari_ini()
{
    $hari = date("D");

    switch ($hari) {
        case 'Sun':
            $hari_ini = "Minggu";
            break;

        case 'Mon':
            $hari_ini = "Senin";
            break;

        case 'Tue':
            $hari_ini = "Selasa";
            break;

        case 'Wed':
            $hari_ini = "Rabu";
            break;

        case 'Thu':
            $hari_ini = "Kamis";
            break;

        case 'Fri':
            $hari_ini = "Jumat";
            break;

        case 'Sat':
            $hari_ini = "Sabtu";
            break;

        default:
            $hari_ini = "Tidak di ketahui";
            break;
    }
    return $hari_ini;
}

?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item dropdown no-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" role="button" data-toggle="dropdown" class="bi bi-list text-white mr-1 dropdown-toggle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
                <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="/login"> Login </a>
                </div>
            </li>
        </ul>
        <small class="text-light">{{hari_ini()}}, {{date('d F Y');}}</small>
    </nav>
    <!-- <div style="background-color: rgba(255, 0, 0, 0.3);" class="container-fluid d-none d-lg-block"> -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row h-100 align-items-center">
            <div class="col-lg-1 text-left"><img src="{{asset('lte/dist/img/Lambang_Kabupaten_Tabanan.png')}}" width="100%" alt=""></div>
            <div class="col-lg-2"><img src="{{asset('lte/dist/img/LogoInstiki.png')}}" width="100%" alt=""></div>
            <div class="col-lg-6 text-center">
                <?php

                use App\Models\setting;

                $setting = setting::first(); ?>
                <h2><strong><em>{{$setting->judul_header}}</em></strong></h2>
            </div>
            <div class="col-lg-3 text-right"><img src="{{asset('lte/dist/img/LogoWebsite.png')}}" width="150px" alt=""></div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand d-block d-sm-none" href="#">Tarian Khas Tabanan</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                    <a class="nav-link" href="/">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>  -->
                        Beranda
                    </a>
                </li>
                <li class="nav-item{{ request()->is('informasi-sanggar') ? ' active' : '' }}{{ request()->is('informasi-sanggar-detail') ? ' active' : '' }}">
                    <a class="nav-link" href="/informasi-sanggar">Informasi Sanggar</a>
                </li>
                <li class="nav-item{{ request()->is('kategori-tarian') ? ' active' : '' }}{{ request()->is('kategori-tarian-detail') ? ' active' : '' }}">
                    <a class="nav-link" href="/kategori-tarian">Ketegori Tarian</a>
                </li>

                <li class="nav-item dropdown{{ Request::url() == route('tarian') ? ' active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Tarian
                    </a>
                    <div class="dropdown-menu">
                        <?php

                        use App\Models\kategori;

                        $kategori = kategori::all();

                        ?>
                        @foreach($kategori as $i => $k)
                        <a class="dropdown-item" href="/tarian?k={{$k->nama_kategori}}">{{$k->nama_kategori}}</a>
                        @endforeach
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0" method="get" action="tarian">
                <input class="form-control mr-sm-2" type="text" autocomplete="off" placeholder="Cari" name="s" aria-label="Search">
                <button class="btn btn-light my-2 my-sm-0" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="dark" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                    Cari
                </button>
            </form>
        </div>
    </nav>
</header>