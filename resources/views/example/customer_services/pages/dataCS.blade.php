@extends('customer_services/layouts/main')

@section('title','BIT-Progres | Data Customer Service')

@section('content-header', 'Data Customer Service')

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">
  <div class="container">
    @error('cs_name')
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
    @error('cs_phone')
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
    @error('cs_email')
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
        <button style="margin-bottom: 20px" type="button" class="btn btn-primary float-right btnTambahDataCS" data-toggle="modal" data-target="#TambahDataCS">
          <i class="fa fa-plus"></i><span> Tambah</span>
        </button>

        <!-- The Modal Tambah Customer Service-->
        <div class="modal" id="TambahDataCS">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data Customer Service</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form method="post" action="/customer-services/datacs">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="nama_cs">Nama Customer Service</label>
                    <input autocomplete="off" type="text" name="nama_cs" class="form-control @error('nama_cs') is-invalid @enderror" id="nama_cs" value="{{ old('nama_cs') }}">
                    @error('nama_cs')
                    <div class="text-danger">{{$message}}</div>
                    <script type="text/javascript">
                      $('#TambahDataCS').show();
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
                      $('#TambahDataCS').show();
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
                      $('#TambahDataCS').show();
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
            <th>Nama Customer Service</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Aksi</th>
          </thead>


          <tbody>
            @foreach ($CustomerServices as $i => $p)
            <tr>
              <td>{{$i+1}}</td>
              <td>{{$p->username}}</td>
              <td>{{$p->name}}</td>
              <td>{{$p->phone_number}}</td>
              <td>{{$p->email}}</td>
              <td>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalUbahDataCS{{$p->id}}">
                  <i class="fa fa-pen"></i><span></span>
                </button>

                <button cs-id="{{$p -> id}}" nama-cs="{{$p -> name}}" class="btn btn-danger delete_cs">
                  <i class="fa fa-trash"></i><span></span>
                </button>
              </td>
            </tr>

            <!-- The Modal Ubah data cs-->
            <div class="modal" id="myModalUbahDataCS{{$p->id}}">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Ubah Data Customer Service</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form method="post" action="/customer-services/datacs/{{$p->id}}">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="nama_cs">Nama Customer Service</label>
                        <input autocomplete="off" type="text" class="form-control @error('cs_name') is-invalid @enderror" id="nama_cs" name="cs_name" value="{{$p->name}}">
                      </div>
                      <div class="form-group">
                        <label for="no_hp">No HP </label>
                        <input autocomplete="off" type="number" class="form-control @error('cs_phone') is-invalid @enderror" id="no_hp" name="cs_phone" value="{{$p->phone_number}}">
                      </div>
                      <div class="form-group">
                        <label for="email">Email </label>
                        <input autocomplete="off" type="email" class="form-control @error('cs_email') is-invalid @enderror" id="email" name="cs_email" value="{{$p->email}}">
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

