<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('lte/dist/img/favicon.ico') }}">
  <title>@yield('title')</title>

  <!-- <link rel="manifest" href="{{asset('manifest/manifestcustomers.json')}}"> -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="{{ asset('lte/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
  <link rel="icon" type="image/png" href="{{asset('lte/dist/img/AdminLTELogo.png')}}">
  <!-- <link rel="manifest" href="{{asset('manifest/manifest.json')}}"> -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/bootstrap/font/bootstrap-icons.css') }}">
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lte/plugins/popper/popper.min.js') }}"></script>
  <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- jqueri UI CSS-->
  <!-- <link rel="stylesheet" href="{{ asset('lte/plugins/jquery-ui/jquery-ui.min.css') }}"> -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <!-- overlayScrollbars -->
  <script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>
  <!-- html2canvas -->
  <script src="{{ asset('lte/plugins/html2canvas/html2canvas.js') }}" referrerpolicy="no-referrer"></script>
  <!-- datatables -->
  <script src="{{ asset('lte/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('lte/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/select2/css/select2.css')}}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/select2/css//select2-bootstrap4.min.css')}}">


  <script src="{{ asset('lte/plugins/select2/js/select2.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Sweet Alert 2-->
  <script src="{{ asset('lte/plugins/sweetalert2/sweetalert2.all.js') }}"></script>
  <!-- Leaflet Map -->
  <!-- <link rel="stylesheet" href="{{ asset('lte/plugins/leaflet/leaflet.css') }}">
  <script src="{{ asset('lte/plugins/leaflet/leaflet.js') }}"></script> -->
  <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script> -->
  <!-- End Leaflet Map -->

  <!-- gmaplibrabry -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=place"></script> -->

  <!-- jqueri UI -->
  <script type="text/javascript" src="{{ asset('lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

  <!-- YearPicker -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/yearpicker/yearpicker.css') }}">
  <script src="{{ asset('lte/plugins/yearpicker/yearpicker.js') }}" async></script>

  <!-- Loader CSS https://loading.io/asset/445230 -->
  <style type="text/css">
    div#preloader {
      position: fixed;
      left: 0;
      top: 0;
      z-index: 999;
      width: 100%;
      height: 100%;
      overflow: visible;
      background: #ffffff url('{{ asset("lte/plugins/loader/loader7.gif") }}') no-repeat center center;
    }

    .fireworks-container {
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;

    }

    .content-wrapper {
      background-image: url("{{asset('lte/dist/img/background_opc2.jpg')}}") !important;
      background-size: 100% 100%;
      background-position: center;
      background-repeat: no-repeat;
    }

    /* .ui-front {
      z-index: 9999999 !important;
    } */
  </style>
  <script type="text/javascript">
    // loader
    $(window).on('load', function() {
      $('#preloader').fadeOut('slow', function() {
        $(this).remove();
      });
    });
  </script>
</head>

<body id="body" class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <div id="preloader"></div>
    <!--spesial thun baru-->
    <!-- <div class="fireworks-container" style="background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;"></div> -->
    <!--spesial thun baru-->


    <!-- Navbar -->
    @include('admin/layouts/header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin/layouts/sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div style="margin-top: 80px;" class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">@yield('content-header')</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Page of @yield('content-header')</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->

      <div id="content">
        @yield('content')
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-light">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('admin/layouts/footer')
  </div>
  <!-- ./wrapper -->
  <script>
    const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

    // function switchTheme(e) {
    //   if (e.target.checked) {
    //     document.getElementById("body").className = 'hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed';
    //     document.getElementById("sidebarr").className = 'main-sidebar sidebar-dark-primary elevation-4';
    //     document.getElementById("headerr").className = 'main-header navbar navbar-expand navbar-dark';
    //     localStorage.setItem('theme', 'hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed');
    //     localStorage.setItem('themeSideBar', 'main-sidebar sidebar-dark-primary elevation-4');
    //     localStorage.setItem('themeHeader', 'main-header navbar navbar-expand navbar-dark');
    //   } else {
    //     document.getElementById("body").className = 'hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed';
    //     document.getElementById("sidebarr").className = 'main-sidebar sidebar-light-primary elevation-4';
    //     document.getElementById("headerr").className = 'main-header navbar navbar-expand navbar-light';
    //     localStorage.setItem('theme', 'hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed');
    //     localStorage.setItem('themeSideBar', 'main-sidebar sidebar-light-primary elevation-4');
    //     localStorage.setItem('themeHeader', 'main-header navbar navbar-expand navbar-light');
    //   }
    // }
    // toggleSwitch.addEventListener('change', switchTheme, false);

    document.getElementById("body").className = 'hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed';
    document.getElementById("sidebarr").className = 'main-sidebar sidebar-light-primary elevation-4';
    document.getElementById("headerr").className = 'main-header navbar navbar-expand navbar-light';
    localStorage.setItem('theme', 'hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed');
    localStorage.setItem('themeSideBar', 'main-sidebar sidebar-light-primary elevation-4');
    localStorage.setItem('themeHeader', 'main-header navbar navbar-expand navbar-light');

    const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
    const currentThemeSideBar = localStorage.getItem('themeSideBar') ? localStorage.getItem('themeSideBar') : null;
    const currentThemeHeader = localStorage.getItem('themeHeader') ? localStorage.getItem('themeHeader') : null;
    if (currentTheme) {
      document.getElementById("body").className = currentTheme;
      document.getElementById("sidebarr").className = currentThemeSideBar;
      document.getElementById("headerr").className = currentThemeHeader;
      if (currentTheme === 'hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed') {
        toggleSwitch.checked = true;
      }
    }
  </script>

  <!--     // get lat lng by address -->
  <script>
    // $("#alamat_sanggar").click(function() {
    //   var datass = [
    //     "ActionScript",
    //     "AppleScript",
    //     "ASP",
    //     "BASIC",
    //     "C",
    //     "C++",
    //     "Clojure",
    //     "COBOL",
    //     "ColdFusion",
    //     "Erlang",
    //     "Fortran",
    //     "Groovy",
    //     "Haskell",
    //     "Java",
    //     "JavaScript",
    //     "Lisp",
    //     "Perl",
    //     "PHP",
    //     "Python",
    //     "Ruby",
    //     "Scala",
    //     "Scheme"
    //   ];
    //   var alamat = $('#alamat_sanggar').val();
    //   $.ajax({
    //     type: "GET",
    //     url: "https://nominatim.openstreetmap.org/search?q=" + alamat + "&format=json",
    //     // beforeSend: function() {
    //     //   $("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
    //     // },
    //     success: function(data) {

    //       console.log(data)

    //       $("#alamat_sanggar").autocomplete({
    //         source: data.map(lang => lang.display_name)
    //       });
    //     }
    //   });

    //   $('#alamat_sanggar').on('autocompletechange change', function() {
    //     $('#lat').val(this.value);
    //   }).change();
    // });
    // get lat lng by address


    // var map = L.map('map').setView([-8.55162, 115.369], 15);

    // var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //   maxZoom: 19,
    //   attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    // }).addTo(map);

    // var marker = L.marker([-8.55162, 115.369]).addTo(map)
    //   .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();


    // // var popup = L.popup()
    // //   .setLatLng([-8.5430894, 115.3213101])
    // //   .setContent('I am a standalone popup.')
    // //   .openOn(map);

    // function onMapClick(e) {
    //   popup
    //     .setLatLng(e.latlng)
    //     .setContent('You clicked the map at ' + e.latlng.toString())
    //     .openOn(map);
    // }

    // map.on('click', onMapClick);
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $(".modalTambah").on("hidden.bs.modal", function() {
        $(this).find('form').trigger('reset');
      });

      // selectpicker
      $('.selectpicker').select2({
        theme: 'bootstrap4',
      });
      // end selectpicker

      // datatables
      $('.datatables').DataTable();
      // end datatables

      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });

      // logout
      $('.logout').click(function() {
        Swal.fire({
          title: "Yakin Logout ?",
          showDenyButton: true,
          confirmButtonText: 'Yakin',
          denyButtonText: 'Batal',
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire('Berhasil Logout', '', 'success');
            window.location = "/logout";
          } else if (result.isDenied) {
            Swal.fire('Dibatalkan', '', 'error')
          }
        });
      });
      // end logout

    });
  </script>
  @include('sweetalert::alert')
</body>

</html>