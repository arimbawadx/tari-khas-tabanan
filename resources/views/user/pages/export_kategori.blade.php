<table>
    <thead>
        <tr>
            <th>ID Ketegori</th>
            <th>Nama Kategori</th>
            <th>Deskripsi</th>
            <th>File</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kategori as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->nama_kategori }}</td>
            <td><?php echo $s->deskripsi ?></td>
            <td><?php echo url('/lte/dist/img/' . $s->gambar); ?></td>
        </tr>
        @endforeach
    </tbody>
</table>