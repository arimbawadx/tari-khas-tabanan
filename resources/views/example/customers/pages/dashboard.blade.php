@extends('customers/layouts/main')

@section('title','BIT-PROGRESS | Dashboard')

@section('content-header', 'Dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="info-box bg-danger">
          <span class="info-box-icon"><i class="fas fa-clock"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Waiting</span>
            <span class="info-box-number">{{$jumlahProjectWaitings}}</span>

            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              {{$jumlahProjectWaitings}} Menunggu
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-4">
        <div class="info-box bg-primary">
          <span class="info-box-icon"><i class="fas fa-tachometer-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">On Progress</span>
            <span class="info-box-number">{{$jumlahProjectOnProgress}}</span>

            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              {{$jumlahProjectOnProgress}} Sedang Dikerjakan
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-4">
        <div class="info-box bg-success">
          <span class="info-box-icon"><i class="fas fa-check-circle"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Finished</span>
            <span class="info-box-number">{{$jumlahProjectFinished}}</span>

            <div class="progress">
              <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
              {{$jumlahProjectFinished}} Selesai dikerjakan
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    </div>
  </div>
</section>
<!-- /.content-wrapper -->
@endsection

