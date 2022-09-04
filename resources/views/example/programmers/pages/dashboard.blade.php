@extends('programmers/layouts/main')

@section('title','BIT-PROGRESS | Dashboard')

@section('content-header', 'Dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <!-- small card -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{$jumlahProjectWaitings}}</h3>

            <p>Waiting to be taken</p>
          </div>
          <div class="icon">
            <i class="fas fa-clock"></i>
          </div>
          <a href="/programmers/projects/project-waiting" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4">
        <!-- small card -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$jumlahProjectOnProgress}}</h3>

            <p>On Progress</p>
          </div>
          <div class="icon">
            <i class="fas fa-tachometer-alt"></i>
          </div>
          <a href="/programmers/projects/project-on-progress" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4">
        <!-- small card -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$jumlahProjectFinished}}</h3>

            <p>Finished</p>
          </div>
          <div class="icon">
            <i class="fas fa-calendar-check"></i>
          </div>
          <a href="/programmers/projects/project-finished" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
    </div>

    <div class="card">
      <div class="card-header">
        Project Deadline 3 Minggu
      </div>
      <div class="card-body">
        <div class="row">
          @foreach($projects3Weeks as $pop)

          <?php  
          $origin = new DateTime(date('Y-m-d'));
          $target = new DateTime($pop->project_deadline);
          ?>

          @if($origin->diff($target)->format('%a')<22)
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
              @if($origin->diff($target)->format('%R')=="-")
              <small class="text-danger">{{$pop->project_progress}}% | Project be late {{$origin->diff($target)->format('%a')}} day.</small>
              @else
              <small>{{$pop->project_progress}}% | Must be finished in {{$origin->diff($target)->format('%a')}} day.</small>
              @endif
            </div>
            <!-- /.card-body -->
          </a>
          <!-- /.card -->
        </div>
        @endif
        @endforeach
      </div>
    </div>
  </div>
</div>
</section>
<!-- /.content-wrapper -->
@endsection

