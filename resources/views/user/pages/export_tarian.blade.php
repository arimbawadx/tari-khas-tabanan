<table>
    <thead>
        <tr>
            <th>Nama Tari</th>
            <th>Pencipta Tari</th>
            <th>Penata Tabuh</th>
            <th>Tahun Cipta</th>
            <th>Jenis Tarian</th>
            <th>Jumlah Penari</th>
            <th>Pakaian</th>
            <th>Properti</th>
            <th>Deskripsi</th>
            <th>Sejarah</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tarian as $s)
        <tr>
            <td>{{ $s->nama_tari }}</td>
            <td>{{ $s->pencipta_tari }}</td>
            <td>{{ $s->penata_tabuh }}</td>
            <td>{{ $s->tahun_cipta }}</td>
            <td>{{ $s->jenis_tarian }}</td>
            <td>{{ $s->jumlah_penari }}</td>
            <td><?php echo $s->pakaian ?></td>
            <td><?php echo $s->properti ?></td>
            <td><?php echo $s->deskripsi ?></td>
            <td><?php echo $s->sejarah ?></td>
        </tr>
        @endforeach
    </tbody>
</table>