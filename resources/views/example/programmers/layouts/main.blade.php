<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <link rel="icon" type="image/png" href="{{asset('lte/dist/img/bit.png')}}">
  <link rel="manifest" href="{{asset('manifest/manifest.json')}}">
  
</head>
<body onload="preloaderFunction()" id="body" class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    @include('programmers/layouts/header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('programmers/layouts/sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
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
      <div class="d-flex justify-content-center">
        <div id="spinner" class="spinner-border text-primary">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      
      <div style="display: none;" id="content">  
        @yield('content')
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('programmers/layouts/footer')
  </div>
  <!-- ./wrapper -->

  <script>
    var preloader = document.getElementById('spinner');
    var content = document.getElementById('content');
    function preloaderFunction() {
      preloader.style.display = 'none';
      content.style.display = 'block';
    }


    const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
    function switchTheme(e) {
      if (e.target.checked) {
        document.getElementById("body").className = 'hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed';
        localStorage.setItem('theme', 'hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed');
      }
      else {
        document.getElementById("body").className = 'hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed';
        localStorage.setItem('theme', 'hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed');
      }    
    }
    toggleSwitch.addEventListener('change', switchTheme, false);

    const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
    if (currentTheme) {
      document.getElementById("body").className = currentTheme;
      if (currentTheme === 'hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed') {
        toggleSwitch.checked = true;
      }
    }
  </script>
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>
  <!-- datatables -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
      $('#datatables').DataTable();

    // ambil project
    $('.take_project').click(function()
    {
      var project_id=$(this).attr('project-id');
      var nama_project=$(this).attr('nama-project');

      swal({
        title: "Yakin ambil project "+nama_project+" ?",
        text: "Tanggung Jawab terhadap project yang diambil!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location="/programmers/project/detail/take/"+project_id;
          swal(nama_project+" diambil", {
            icon: "success",
          });
        } else {
          swal({
            title: "Anda hampir ambil project "+nama_project+"! Jangan Ragu!",
            icon: "warning",
          });
        }
      });
    });
    // end ambil project

    // Generate Laporan
    $('#generate_report').click(function()
    {
      var project_id=$(this).attr('project-id');
      var nama_project=$(this).attr('project-name');
      var project_progress=$(this).attr('project-progress');
      const today = new Date();
      const month = new Array();
      month[0] = "Januari";
      month[1] = "Februari";
      month[2] = "Maret";
      month[3] = "April";
      month[4] = "Mei";
      month[5] = "Juni";
      month[6] = "Juli";
      month[7] = "Agustus";
      month[8] = "September";
      month[9] = "Oktober";
      month[10] = "November";
      month[11] = "Desember";
      var date = today.getDate()+' '+month[today.getMonth()]+' '+today.getFullYear();

      swal({
        title: "Yakin Generate Report?",
        text: "Laporan Project "+nama_project+" akan dibuat dengan total progress "+project_progress+"% pada "+date,
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location="/programmers/project/detail/generate/"+project_id;
          swal("Laporan telah dibuat", {
            icon: "success",
          });
        } else {
          swal({
            title: "Pembuatan Laporan dibatalkan",
            icon: "warning",
          });
        }
      });
    });
    // end Generate Laporan


    // delete link project
    $('.delete_link_project').click(function()
    {
      var project_id=$(this).attr('project-id');

      swal({
        title: "Yakin hapus URL project ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location="/programmers/project/detail/delete-link-project/"+project_id;
          swal("link URL project dihapus", {
            icon: "success",
          });
        } else {
          swal({
            title: "Anda hampir hapus URL project, jangan Ragu!",
            icon: "warning",
          });
        }
      });
    });
    // end delete link project

    // Logout
    $('.logout').click(function()
    {
      swal({
        title: "Yakin logout?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location="/logout";
          swal("Berhasil Logout", {
            icon: "success",
          });
        } else {
          swal({
            title: "Anda hampir Keluar!",
            icon: "warning",
          });
        }
      });
    });
    // end logout

  });
</script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('lte/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('lte/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('lte/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('lte/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('lte/dist/js/demo.js') }}"></script>
<script src="{{ asset('lte/plugins/sweetalert/sweetalert.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
@include('sweetalert::alert')
</body>
</html>
