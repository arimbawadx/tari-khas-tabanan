<nav id="headerr" class="main-header navbar navbar-expand navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav h-100 align-items-center">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item ml-5">
      <img src="{{asset('lte/dist/img/Lambang_Kabupaten_Tabanan.png')}}" width="70" alt="">
    </li>
    <li class="nav-item ml-2">
      <img src="{{asset('lte/dist/img/LogoInstiki.png')}}" width="150" alt="">
    </li>
    <li class="nav-item ml-2">
      <img src="{{asset('lte/dist/img/LogoWebsite.png')}}" width="90" alt="">
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link" href="#" role="button">
        <div class="custom-control custom-switch theme-switch">
          <input type="checkbox" class="custom-control-input" id="checkbox1">
          <label class="custom-control-label" for="checkbox1">Dark Mode <i class="fas fa-moon"></i></label>
        </div>
      </a>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link logout" role="button">
        <i class="fas fa-power-off"></i>
      </a>
    </li> -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="profil" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="rounded-circle" width="30" src="{{asset('lte/dist/img/noprofil.jpg')}}"> <span> <strong>Admin</strong></span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profil">
        <a class="dropdown-item logout" href="#"> Logout </a>
      </div>
    </li>
  </ul>
</nav>