@extends('customers/layouts/main')

@section('title','BIT-PROGRESS | Laporan Progress')

@section('content-header', 'Laporan Progress')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <section class="invoice bg-white m-3">
        <!-- title row -->
        <div class="row">
          <div class="col-md-12">
            <p class="m-3 page-header">
              <img style="width: 40px" src="{{ asset('lte/dist/img/logoBit.png') }}">
              <span>PT Bali Internasional Teknologi</span>
              <small class="float-right">Denpasar, {{ date('d F Y', strtotime($progress_reports->first()->report_date)) }}</small>
            </p>
            <div class="text-center">
              <h4 style="margin-top: 0;">
                PT BALI INTERNASIONAL TEKNOLOGI
              </h4>
              <h4 class="font-weight-bolder">
                PROGRESS REPORT {{strtoupper($progress_reports->first()->Projects->project_name)}}
              </h4>
              <h4>PERIODE {{date('d F Y', strtotime($progress_reports->first()->report_period))}} : LAPORAN KE {{$progress_reports->first()->report_to}}</h4>
            </div>
            <hr style="border: 1px solid #ddd">
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            <!-- From
            <address>
              <strong>Admin, Inc.</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              Phone: (804) 123-5432<br>
              Email: info@almasaeedstudio.com
            </address> -->
          </div>

          <div class="col-sm-4 invoice-col">
            <!-- To
            <address>
              <strong>John Doe</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              Phone: (555) 539-1037<br>
              Email: john.doe@example.com
            </address> -->
          </div>
          
          <div class="col-sm-4 invoice-col">
            <br>
            <b>Progress Report Code :</b> {{$progress_reports->first()->report_code}}<br>
            <b>Customer :</b> {{$progress_reports->first()->Customers->name}}<br>
            <b>Programmer :</b> {{$progress_reports->first()->Programmers->name}}<br>
            <br><br>
          </div>
        </div>
        <!-- /.row -->
        
        <!-- print row -->
        <div class="row ml-3">
          <div class="col-md-12">
            <a onclick="window.print();" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
          </div>
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row m-3">
          <div class="col-md-12 table-responsive">
            <table class="table table-striped table-dark text-center">
              <thead class="bg-black">
                <tr>
                  <th>NO</th>
                  <th style="text-align: justify;">MAIN MODUL</th>
                  <th>PROGRESS</th>
                  <th>TIMELINE PENYELESAIAN</th>
                </tr>
              </thead>
              <tbody>
                @foreach($progress_reports as $i => $pr)
                <tr>
                  <td>{{$i+1}}</td>
                  <td style="text-align: justify;">{{$pr->item_name}}</td>
                  <td>{{$pr->item_progress}}%</td>
                  <td>{{$pr->finishing_timeline}}</td>
                </tr>
                @endforeach
                <tr class="bg-black">
                  <th colspan="2">PROGRESS KESELURUHAN</th>
                  <th>{{round($Rata2Presentase)}}%</th>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row"> 
          <div class="col-md-12">
            <p class="text-center">Rata-rata presentase progress telah selesai dikerjakan adalah {{round($Rata2Presentase)}}% (persen) </p>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<!-- /.content-wrapper -->

@endsection