@extends('customer_services/layouts/main')

@section('title') BIT-Progres | Project {{$Programmer->name}} @endsection

@section('content-header') Project {{$Programmer->name}} @endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">
  <div class="container">
    <div class="row">
      <!-- ./col -->
      <div class="col-lg-6">
        <!-- small card -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$Project->where('programmers_id', $Programmer->id)->where('progress_status', 'On Progress')->count()}}</h3>

            <p>Sedang Dikerjakan</p>
          </div>
          <div class="icon">
            <i class="fas fa-tachometer-alt"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6">
        <!-- small card -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$Project->where('programmers_id', $Programmer->id)->where('progress_status', 'Selesai')->count()}}</h3>

            <p>Selesai Dikerjakan</p>
          </div>
          <div class="icon">
            <i class="fas fa-calendar-check"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <div class="row">
      <div class="col-md-12 table-responsive">
        <div class="card">
          <div class="card-header">Project Sedang Dikerjakan</div>
          <div class="card-body">
            <table id="datatables" class="table table-bordered table-striped text-center">
              <thead class="thead-dark">
                <th>Nama Project</th>
                <th>Deadline</th>
                <th>Progress</th>
                <th>Customer</th>
                <th>Dikerjakan</th>
              </thead>


              <tbody>
                @foreach($Project as $prj)
                @if($prj->programmers_id == $Programmer->id AND $prj->progress_status == 'On Progress')
                <tr>
                  <td>{{$prj->project_name}}</td>
                  <td>{{$prj->project_deadline}}</td>
                  <td>{{$prj->project_progress}}%</td>
                  <td>{{$prj->Customers->name}}</td>
                  <td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModalUbahTanggungJawab{{$prj->id}}"><i class="fa fa-pen"></i> {{$prj->Programmers->name}}</button></td>
                  <!-- The Modal Ubah Tanggung Jawab-->
                  <div class="modal" id="myModalUbahTanggungJawab{{$prj->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Ubah Tanggung Jawab</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          <form method="post" action="/customer-services/project/{{$prj->id}}/ubah-programmer">
                            {{csrf_field()}}
                            <div class="form-group">
                              <label>Dikerjakan</label>
                              <select name="programmers_id" required="" class="form-control">
                                <option value="">{{$prj->Programmers->name}}</option>
                                @foreach($Programmers as $dev)
                                @if($dev->id != $prj->programmers_id)
                                <option value="{{$dev->id}}">{{$dev->name}} | Sedang Dikerjakan: {{$Project->where('programmers_id', $dev->id)->where('progress_status', 'On Progress')->count()}} | Selesai Dikerjakan: {{$Project->where('programmers_id', $dev->id)->where('progress_status', 'Selesai')->count()}}</option>
                                @endif
                                @endforeach
                              </select>
                            </div>
                            <button type="Submit" class="btn btn-primary">Update</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 table-responsive">
        <div class="card">
          <div class="card-header">Project Selesai Dikerjakan</div>
          <div class="card-body">
            <table id="datatables2" class="table table-bordered table-striped text-center">
              <thead class="thead-dark">
                <th>Nama Project</th>
                <th>Deadline</th>
                <th>Selesai</th>
                <th>Customer</th>
              </thead>


              <tbody>
                @foreach($Project as $prj)
                @if($prj->programmers_id == $Programmer->id AND $prj->progress_status == 'Selesai')
                <tr>
                  <td>{{$prj->project_name}}</td>
                  <td>{{$prj->project_deadline}}</td>
                  <td>{{$prj->project_finished}}</td>
                  <td>{{$prj->Customers->name}}</td>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content-wrapper -->
@endsection