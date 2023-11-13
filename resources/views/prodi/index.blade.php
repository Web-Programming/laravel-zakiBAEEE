{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th >Nama</th>
      <th >NPM</th>
      <th >Tempat Lahir</th>
      <th>Prodi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($allMahasiswaProdi as $item)
    <tr>

        <td>{{$item->nama}}</td>
        <td>{{$item->npm}}</td>
        <td>{{$item->tempat_lahir}}</td>
        <td>{{$item->nama_prodi}}</td>

    </tr>
    @endforeach

  </tbody>
</table>
</body>
</html> --}}


@extends('layout.master')
@section('title', 'Halaman List Prodi')

@section('content')
    <div class="row pt-4">
        <div class="col">
            <h2>Prodi</h2>
            <div class="d-md-flex justify-content-md-end">
                <a href="{{ route('prodi.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <table class="table table-stripped table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prodis as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <a href="{{ url('prodi/' . $item->id) }}" class="btn btn-warning">Detail</a>
                                <a href="{{ url('prodi/' . $item->id . '/edit') }}" class="btn btn-info">Ubah</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
