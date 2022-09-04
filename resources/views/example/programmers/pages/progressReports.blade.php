@extends('programmers/layouts/main')

@section('title','BIT-PROGRESS | Progress Report')

@section('content-header', 'Progress Report')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="container">
  <div class="row">
    <div class="col-md-12 table-responsive">
      <table id="datatables" class="table table-bordered table-striped text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Action</th>
            <th scope="col">Laporan ID</th>
            <th scope="col">Periode</th>
            <th scope="col">Laporan ke</th>
          </tr>
        </thead>
        <tbody>
          @foreach($progress_reports as $pr)
          <tr>
            <th scope="row"><a href="/programmers/reports/progress-report/detail/{{$pr->first()->report_code}}" class="btn btn-success btn-sm"><span><i class="fas fa-eye"></i></span></a></th>
            <td>{{$pr->first()->report_code}} - {{date('d F Y', strtotime($pr->first()->report_date))}} <br>
              <a href="/programmers/reports/progress-report/detail/{{$pr->first()->report_code}}">Laporan Progress {{$pr->first()->Projects->project_name}} - Customer {{$pr->first()->Customers->name}}</a></td>
              <td>{{date('d F Y', strtotime($pr->first()->report_period))}}</td>
              <td>Laporan ke-{{$pr->first()->report_to}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
  @endsection