@extends('master');

@section('konten');
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Pegawai</th>
        <th scope="col">Pangkat</th>
        <th scope="col">Usia</th>
      </tr>
    </thead>
    <tbody>
        <?= $no = 1?>
        @foreach($pegawai as $p)
          <tr>
            <td><?= $no++ ?></td>
            <td>{{ $p->namaPegawai }}</td>
            <td>{{ $p->pangkat }}</td>
            <td>{{ $p->usia }}</td>
            <td><a href="" class="btn btn-warning">Ubah</a></td>
            <td><a href="" class="btn btn-danger">Hapus</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
  
@endsection