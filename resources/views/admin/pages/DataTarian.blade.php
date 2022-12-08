@extends('admin/layouts/main')

@section('title','Data Tarian')

@section('content-header', 'Data Tarian')

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: rgba(245, 245, 245, 0.8);">
                    <div class="card-header">
                        Kelola Data Tarian
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModalTambahDataTarian">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                    Tambah</button>
                            </div>
                            <!-- The Modal Tambah data Tarian-->
                            <div class="modal modalTambah" id="myModalTambahDataTarian">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Form Tambah Data Tarian <br>
                                                <p class="text-sm">Kelola Tambah Data Tarian</p>
                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form method="post" action="/admin/tarian">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="nama_tarian">Nama Tarian</label>
                                                    <input required autocomplete="off" type="text" class="form-control @error('nama_tarian') is-invalid @enderror" id="nama_tarian" name="nama_tarian" placeholder="Masukan Nama Tarian">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pencipta_tarian">Pencipta</label>
                                                    <input required autocomplete="off" type="text" class="form-control @error('pencipta_tarian') is-invalid @enderror" id="pencipta_tarian" name="pencipta_tarian" placeholder="Masukan Pencipta Tarian">
                                                </div>
                                                <div class="form-group">
                                                    <label for="penata_tabuh">Penata Tabuh</label>
                                                    <input autocomplete="off" type="text" class="form-control @error('penata_tabuh') is-invalid @enderror" id="penata_tabuh" name="penata_tabuh" placeholder="Masukan Pencipta Tarian">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tahun_cipta">Tahun Cipta</label>
                                                    <input required autocomplete="off" type="number" class="form-control @error('tahun_cipta') is-invalid @enderror yearpicker" id="tahun_cipta" name="tahun_cipta" placeholder="Masukan Tahun Cipta Tarian">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jumlah_penari">Jumlah Penari</label>
                                                    <input required autocomplete="off" type="text" class="form-control @error('jumlah_penari') is-invalid @enderror" id="jumlah_penari" name="jumlah_penari" placeholder="Masukan Jumlah Penari">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pakaian">Pakaian</label>
                                                    <textarea class="form-control" class="form-control @error('pakaian') is-invalid @enderror" id="pakaian" name="pakaian" placeholder="Masukan Pakaian Tarian" rows="3"><ol>
                                                        <li>Kamen : </li>
                                                        <li>Angkid : </li>
                                                        <li>Pending : </li>
                                                        <li>Badong : </li>
                                                    </ol>
                                                </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="properti_tarian">Properti</label>
                                                    <textarea required class="form-control" class="form-control @error('properti_tarian') is-invalid @enderror" id="properti_tarian" name="properti_tarian" placeholder="Masukan Properti" rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kategori_tari">Kategori</label>
                                                    <select required name="kategori_tari" class="form-control @error('kategori_tari') is-invalid @enderror" id="kategori_tari">
                                                        <option value="">Pilih</option>
                                                        @foreach($kategoris as $i => $k)
                                                        <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label for="deskripsi_tarian">Deskripsi</label>
                                                    <textarea required class="form-control" class="form-control @error('deskripsi_tarian') is-invalid @enderror" id="deskripsi_tarian" name="deskripsi_tarian" placeholder="Masukan Deskripsi Tarian" rows="3"></textarea>
                                                </div> -->
                                                <div class="form-group">
                                                    <label for="deskripsi_tarian">Deskripsi</label>
                                                    <textarea class="form-control" class="form-control @error('deskripsi_tarian') is-invalid @enderror" id="deskripsi_tarian" name="deskripsi_tarian" placeholder="Masukan Deskripsi Tarian" rows="3"><ol>
                                                        <li></li>
                                                    </ol>
                                                </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sejarah_tarian">Sejarah</label>
                                                    <textarea class="form-control" class="form-control @error('sejarah_tarian') is-invalid @enderror" id="sejarah_tarian" name="sejarah_tarian" placeholder="Masukan Sejarah Tarian" rows="3"></textarea>
                                                </div>


                                                <button type="button" class="btn btn-secondary float-right ml-1" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Kembali</button>
                                                <button type="submit" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-hover table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr class="d-flex">
                                            <th class="col-1">ID Tari</th>
                                            <th class="col-2">ID Kategori</th>
                                            <th class="col-2">Nama Tarian</th>
                                            <th class="col-2">Pencipta</th>
                                            <th class="col-2">Penata Tabuh</th>
                                            <th class="col-2">Tahun Cipta</th>
                                            <th class="col-2">Jenis Tari</th>
                                            <th class="col-2">Jumlah Penari</th>
                                            <th class="col-10">Pakaian</th>
                                            <th class="col-6">Properti</th>
                                            <th class="col-10">Deskripsi</th>
                                            <th class="col-1">Sejarah</th>
                                            <th class="col-1">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <tr>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>Tari Bungan Sandat</td>
                                            <td>I Nyoman Purna</td>
                                            <td>1999</td>
                                            <td>Tari Kreasi</td>
                                            <td>7 Orang</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, iusto eos minus totam ab recusandae laudantium quisquam incidunt! Totam officiis animi aperiam ex quidem quia deserunt dignissimos tenetur perferendis dolore cupiditate vel cum pariatur officia eos, earum possimus sit molestias.</td>
                                            <td class="text-center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalUbahDataTarian1">
                                                    <i class="fa fa-pen"></i><span></span>
                                                </button>
                                                <button tarian-id="1" nama-tarian="test" class="btn btn-danger delete_tarian">
                                                    <i class="fa fa-trash"></i><span></span>
                                                </button>
                                            </td>
                                        </tr> -->

                                        @foreach($data as $i => $d)
                                        <tr class="d-flex">
                                            <td class="col-1">{{$d->id}}</td>
                                            <td class="col-2">{{$d->kategori_id}}</td>
                                            <td class="col-2">{{$d->nama_tari}}</td>
                                            <td class="col-2">{{$d->pencipta_tari}}</td>
                                            <td class="col-2">{{$d->penata_tabuh}}</td>
                                            <td class="col-2">{{$d->tahun_cipta}}</td>
                                            <td class="col-2">{{$d->jenis_tarian}}</td>
                                            <td class="col-2">{{$d->jumlah_penari}}</td>
                                            <td class="col-10"><?php echo $d->pakaian ?></td>
                                            <td class="col-6">{{$d->properti}}</td>
                                            <td class="col-10"><?php echo $d->deskripsi ?></td>
                                            <td class="col-1">{{$d->sejarah}}</td>
                                            <td class="col-1 text-center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalUbahDataTarian{{$d->id}}">
                                                    <i class="fa fa-pen"></i><span></span>
                                                </button>
                                                <button tarian-id="{{$d->id}}" nama-tarian="{{$d->nama_tari}}" class="btn btn-danger delete_tarian">
                                                    <i class="fa fa-trash"></i><span></span>
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- The Modal Ubah data Tarian-->
                                        <div class="modal" id="myModalUbahDataTarian{{$d->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Form Ubah Data Tarian <br>
                                                            <p class="text-sm">Kelola Ubah Data Tarian</p>
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <form method="post" action="/admin/tarian/{{$d->id}}">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label for="nama_tarian">Nama Tarian</label>
                                                                <input required autocomplete="off" type="text" class="form-control @error('nama_tarian') is-invalid @enderror" id="nama_tarian" name="nama_tarian" value="{{$d->nama_tari}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pencipta_tarian">Pencipta</label>
                                                                <input required autocomplete="off" type="text" class="form-control @error('pencipta_tarian') is-invalid @enderror" id="pencipta_tarian" name="pencipta_tarian" value="{{$d->pencipta_tari}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="penata_tabuh">Penata Tabuh</label>
                                                                <input autocomplete="off" type="text" class="form-control @error('penata_tabuh') is-invalid @enderror" id="penata_tabuh" name="penata_tabuh" value="{{$d->penata_tabuh}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tahun_cipta">Tahun Cipta</label>
                                                                <input required autocomplete="off" type="number" class="form-control @error('tahun_cipta') is-invalid @enderror" id="tahun_cipta" name="tahun_cipta" value="{{$d->tahun_cipta}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="jumlah_penari">Jumlah Penari</label>
                                                                <input required autocomplete="off" type="text" class="form-control @error('jumlah_penari') is-invalid @enderror" id="jumlah_penari" name="jumlah_penari" value="{{$d->jumlah_penari}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pakaian">Pakaian</label>
                                                                <textarea class="form-control" class="form-control @error('pakaian') is-invalid @enderror" id="pakaian" name="pakaian" rows="3">{{$d->pakaian}}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="properti_tarian">Properti</label>
                                                                <textarea required class="form-control" class="form-control @error('properti_tarian') is-invalid @enderror" id="properti_tarian" name="properti_tarian" rows="3">{{$d->properti}}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="kategori_tari">Kategori</label>
                                                                <select required name="kategori_tari" class="form-control @error('kategori_tari') is-invalid @enderror" id="kategori_tari">
                                                                    <option value="{{$d->kategori_id}}" selected>{{$d->jenis_tarian}}</option>
                                                                    @foreach($kategoris as $i => $k)
                                                                    @if($k->id != $d->kategori_id)
                                                                    <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                                                                    @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <!-- <div class="form-group">
                                                                <label for="deskripsi_tarian">Deskripsi</label>
                                                                <textarea required class="form-control" class="form-control @error('deskripsi_tarian') is-invalid @enderror" id="deskripsi_tarian" name="deskripsi_tarian" rows="3">{{$d->deskripsi}}</textarea>
                                                            </div> -->
                                                            <div class="form-group">
                                                                <label for="deskripsi_tarian">Deskripsi</label>
                                                                <textarea class="form-control" class="form-control @error('deskripsi_tarian') is-invalid @enderror" id="deskripsi_tarian" required name="deskripsi_tarian" rows="3">{{$d->deskripsi}}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sejarah_tarian">Sejarah</label>
                                                                <textarea class="form-control" class="form-control @error('sejarah_tarian') is-invalid @enderror" id="sejarah_tarian" name="sejarah_tarian" rows="3">{{$d->sejarah}}</textarea>
                                                            </div>

                                                            <button type="button" class="btn btn-secondary float-right ml-1" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Kembali</button>
                                                            <button type="submit" class="btn btn-primary float-right"><i class="fa fa-pen"></i> Ubah</button>
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
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        $(".yearpicker").yearpicker();

        // delete tarian
        $('.delete_tarian').click(function() {
            var tarian_id = $(this).attr('tarian-id');
            var nama_tarian = $(this).attr('nama-tarian');

            Swal.fire({
                title: "Yakin hapus " + nama_tarian + " ?",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'Hapus',
                denyButtonText: `Batal`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location = "/admin/tarian/" + tarian_id;
                    Swal.fire('Data terhapus!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Jangan Ragu!', '', 'warning')
                }
            })
        });
        // end delete tarian
    });
</script>
<!-- /.content-wrapper -->
@endsection