@extends('customer_services/layouts/main')

@section('title','BIT-Progres | Dashboard')

@section('content-header', 'Dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <!-- small card -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3>{{$jumlahCustomers}}</h3>

            <p>Data Customers</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="/customer-services/data-customers" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4">
        <!-- small card -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$jumlahProgrammers}}</h3>

            <p>Data Programmers</p>
          </div>
          <div class="icon">
            <i class="fas fa-code"></i>
          </div>
          <a href="/customer-services/data-programmers" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4">
        <!-- small card -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$jumlahCS}}</h3>

            <p>Data Customer Services</p>
          </div>
          <div class="icon">
            <i class="fas fa-lock"></i>
          </div>
          <a href="/customer-services/data-cs" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </div>
</section>
<!-- /.content-wrapper -->
@endsection