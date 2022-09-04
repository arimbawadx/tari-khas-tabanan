@extends('programmers/layouts/main')

@section('title','BIT-PROGRESS | Projects On Progress')

@section('content-header', 'Projects On Progress')

@section('content')

<!-- Content Wrapper. Contains page content -->
<section class="content">
  <div class="container">
    @if(count($projectOnProgress) == 0)
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-info alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-info"></i> Info!</h5>
          Tidak ada project yang sedang dikerjakan.
        </div>
      </div>
    </div>
    @endif

    <div class="row">
      @foreach($projectOnProgress as $pop)
      <div class="col-md-6">
        <a href="/programmers/project/detail/{{$pop->id}}" class="card">
          <div class="card-header">
            <h3 class="card-title text-truncate" style="max-width: 100%">{{$pop -> project_name}} | Customer {{$pop->Customers->name}} | {{$pop -> Customers -> phone_number}}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="progress mb-3">
              <div class="progress-bar <?php if ($pop->project_progress==0): ?>
              <?php echo "bg-danger" ?>
            <?php elseif($pop->project_progress<50): ?> 
              <?php echo "bg-warning" ?>
            <?php elseif($pop->project_progress<100): ?> 
              <?php echo "bg-primary" ?>
            <?php elseif($pop->project_progress==100): ?> 
              <?php echo "bg-success" ?>
              <?php endif ?> progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{$pop->project_progress}}%">
            </div>
          </div>
          <small>{{$pop->project_progress}}% | Your project is on progress</small>
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