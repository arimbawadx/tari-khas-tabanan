<table>
    <thead>
        <tr>
            <th>Logo</th>
            <th>Nama Sanggar</th>
            <th>Pemilik Sanggar</th>
            <th>No HP</th>
            <th>Tahun Berdiri</th>
            <th>Alamat</th>
            <th>Titik Kordinat</th>
            <th>Deskripsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sanggar as $s)
        <tr>
            <td><?php echo url('/lte/dist/logo/' . $s->logo); ?></td>
            <td>{{ $s->nama_sanggar }}</td>
            <td>{{ $s->pemilik }}</td>
            <td>{{ $s->no_telp }}</td>
            <td>{{ $s->tahun_berdiri }}</td>
            <td>{{ $s->alamat }}</td>
            <td>{{ $s->titik_kordinat }}</td>
            <td><?php echo $s->deskripsi ?></td>
        </tr>
        @endforeach
    </tbody>
</table>