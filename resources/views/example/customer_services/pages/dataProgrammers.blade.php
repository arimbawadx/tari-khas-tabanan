@extends('customer_services/layouts/main')

@section('title','BIT-Progres | Data Programmer')

@section('content-header', 'Data Programmer')

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">
  <div class="container">
    @error('programmer_name')
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-info"></i>Error!</h5>
          {{$message}}
        </div>
      </div>
    </div>
    @enderror
    @error('programmer_phone')
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-info"></i>Error!</h5>
          {{$message}}
        </div>
      </div>
    </div>
    @enderror
    @error('programmer_email')
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-info"></i>Error!</h5>
          {{$message}}
        </div>
      </div>
    </div>
    @enderror
    <div class="row">
      <div class="col-md-12">
        <button style="margin-bottom: 20px" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#TambahDataProgrammer">
          <i class="fa fa-plus"></i><span>Tambah</span>
        </button>

        <!-- The Modal Tambah Programmer-->
        <div class="modal" id="TambahDataProgrammer">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Programmer</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form method="post" action="/customer-services/data-programmer">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="nama_programmer">Nama Programmer</label>
                    <input autocomplete="off" type="text" class="form-control @error('nama_programmer') is-invalid @enderror" id="nama_programmer" name="nama_programmer" value="{{ old('nama_programmer') }}">
                    @error('nama_programmer')
                    <div class="text-danger">{{$message}}</div>
                    <script type="text/javascript">
                      $('#TambahDataProgrammer').show();
                      $('#spinner').hide();
                    </script>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input autocomplete="off" type="number" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                    @error('no_hp')
                    <div class="text-danger">{{$message}}</div>
                    <script type="text/javascript">
                      $('#TambahDataProgrammer').show();
                      $('#spinner').hide();
                    </script>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input autocomplete="off" type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="text-danger">{{$message}}</div>
                    <script type="text/javascript">
                      $('#TambahDataProgrammer').show();
                      $('#spinner').hide();
                    </script>
                    @enderror
                  </div>            
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 table-responsive">
        <table id="datatables" class="table table-bordered table-striped text-center">
          <thead class="thead-dark">
            <th>No</th>
            <th>Username</th>
            <th>Nama Programmer</th>
            <th>No HP</th>
            <th>Email</th>
            <th width="100px">Aksi</th>
          </thead>


          <tbody>
            @foreach ($Programmers as $i => $p)
            <tr>
              <td>{{$i+1}}</td>
              <td>{{$p->username}}</td>
              <td>{{$p->name}}</td>
              <td>{{$p->phone_number}}</td>
              <td>{{$p->email}}</td>
              <td>
                <a href="/customer-services/data-programmer/{{$p->id}}/projects" class="btn btn-primary">
                  <i class="fas fa-hammer"></i><span></span>
                </a>

                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalUbahDataProgrammer{{$p->id}}">
                  <i class="fa fa-pen"></i><span></span>
                </button>

                @if($Project->where('programmers_id', $p->id)->where('progress_status', 'On Progress')->count() == 0)
                <button programmer-id="{{$p -> id}}" nama-programmer="{{$p -> name}}" class="btn btn-danger delete_programmer">
                  <i class="fa fa-trash"></i><span></span>
                </button>
                @endif
              </td>
            </tr>

            <!-- The Modal Ubah data Programmer-->
            <div class="modal" id="myModalUbahDataProgrammer{{$p->id}}">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Ubah Data Programmer</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form method="post" action="/customer-services/data-programmer/{{$p->id}}">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="programmer_name">Nama Programmer</label>
                        <input autocomplete="off" type="text" class="form-control @error('programmer_name') is-invalid @enderror" id="programmer_name" name="programmer_name" value="{{$p -> name}}">
                      </div>
                      <div class="form-group">
                        <label for="no_hp">No HP </label>
                        <input autocomplete="off" type="number" class="form-control @error('programmer_phone') is-invalid @enderror" id="no_hp" name="programmer_phone" value="{{$p->phone_number}}">
                      </div>
                      <div class="form-group">
                        <label for="email">Email </label>
                        <input autocomplete="off" type="email" class="form-control @error('programmer_email') is-invalid @enderror" id="email" name="programmer_email" value="{{$p->email}}">
                      </div>

                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<!-- /.content-wrapper -->
@endsection