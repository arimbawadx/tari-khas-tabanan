@extends('customers/layouts/main')

@section('title','BIT-PROGRESS | Projects')

@section('content-header', 'Projects')

@section('content')

<!-- Content Wrapper. Contains page content -->
<section class="content">
  <div class="container">
    @if(count($allProjects) == 0)
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-info alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-info"></i> Info!</h5>
          Tidak ada project, silahkan tambahkan project terlebih dahulu.
        </div>
      </div>
    </div>
    @endif
    
    <div class="row">
      @foreach ($allProjects as $i => $p)
      @if($p->progress_status == "Menunggu")
      <div class="col-md-6">
        <a href="/customers/project/detail/{{$p->id}}" class="card">
          <div class="card-header">
            <h3 class="card-title text-truncate" style="max-width: 100%">{{$p->project_name}} | Customer {{$p->Customers->name}} | {{$p->Customers->phone_number}}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="progress mb-3">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
              </div>
            </div>
            <small>{{$p->project_progress}}% | Your project waiting to take</small>
          </div>
          <!-- /.card-body -->
        </a>
        <!-- /.card -->
      </div>
      @elseif($p->progress_status == "On Progress")
      <div class="col-md-6">
        <a href="/customers/project/detail/{{$p->id}}" class="card">
          <div class="card-header">
            <h3 class="card-title text-truncate" style="max-width: 100%">{{$p->project_name}} | Customer {{$p->Customers->name}} | {{$p->Customers->phone_number}}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="progress mb-3">
              <div class="progress-bar <?php if ($p->project_progress==0): ?>
              <?php echo "bg-danger" ?>
            <?php elseif($p->project_progress<50): ?> 
              <?php echo "bg-warning" ?>
            <?php elseif($p->project_progress<100): ?> 
              <?php echo "bg-primary" ?>
            <?php elseif($p->project_progress==100): ?> 
              <?php echo "bg-success" ?>
              <?php endif ?>" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{$p->project_progress}}%">
            </div>
          </div>
          <small>{{$p->project_progress}}% | Your project on progress</small>
        </div>
        <!-- /.card-body -->
      </a>
      <!-- /.card -->
    </div>
    @elseif($p->progress_status == "Selesai")
    <div class="col-md-6">
      <a href="/customers/project/detail/{{$p->id}}" class="card">
        <div class="card-header">
          <h3 class="card-title text-truncate" style="max-width: 100%">{{$p->project_name}} | Customer {{$p->Customers->name}} | {{$p->Customers->phone_number}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="progress mb-3">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{$p->project_progress}}%">
            </div>
          </div>
          <small>{{$p->project_progress}}% | Your project is finished &#10003</small>
        </div>
        <!-- /.card-body -->
      </a>
      <!-- /.card -->
    </div>
    @endif
    @endforeach
  </div>
</div>
</section>  
<!-- /.content-wrapper -->
@endsection