@extends('programmers/layouts/main')

@section('title','BIT-PROGRESS | Projects Finished')

@section('content-header', 'Projects Finished')

@section('content')

<!-- Content Wrapper. Contains page content -->
<section class="content">
  <div class="container">
    @if(count($projectFinished) == 0)
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-info alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-info"></i> Info!</h5>
          Tidak ada project yang selesai dikerjakan.
        </div>
      </div>
    </div>
    @endif

    <div class="row">
      @foreach($projectFinished as $pf)
      <div class="col-md-6">
        <a href="/programmers/project/detail/{{$pf->id}}" class="card">
          <div class="card-header">
            <h3 class="card-title text-truncate" style="max-width: 100%">{{$pf->project_name}} | Customer {{$pf->Customers->name}} | {{$pf->Customers->phone_number}}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="progress mb-3">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{$pf->project_progress}}%">
              </div>
            </div>
            <small>{{$pf->project_progress}}% | Your project is finished &#10003</small>
          </div>
          <!-- /.card-body -->
        </a>
        <!-- /.card -->
      </div>
      @endforeach
    </div>
  </div>
</section>  
<!-- /.content-wrapper -->


@endsection