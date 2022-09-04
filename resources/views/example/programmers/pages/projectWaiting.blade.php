@extends('programmers/layouts/main')

@section('title','BIT-PROGRESS | Projects Waiting')

@section('content-header', 'Projects Waiting')

@section('content')

<section class="content">
  <div class="container">
    @if(count($ProjectWaiting) == 0)
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-info alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-info"></i> Info!</h5>
          Tidak ada project menunggu.
        </div>
      </div>
    </div>
    @endif
    <div class="row">
      @foreach($ProjectWaiting as $pw)
      <div class="col-md-6">
        <a href="/programmers/project/detail/{{$pw -> id}}" class="card">
          <div class="card-header">
            <h3 class="card-title text-truncate" style="max-width: 100%">{{$pw -> project_name}} | Customer {{$pw -> Customers -> name}} | {{$pw -> Customers -> phone_number}}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="progress mb-3">
              <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
              </div>
            </div>
            <small>{{ $pw -> project_progress }}% | Waiting to be taken</small>
          </div>
          <!-- /.card-body -->
        </a>
        <!-- /.card -->
      </div>
      @endforeach
    </div>
  </div>
</section>  

@endsection