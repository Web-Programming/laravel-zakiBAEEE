@section('content')
    <div class="row pt-4">
        <div class="col">
            <h2>Profil Prodi{{ $prodi->nama }}</h2>
            <div class="table table-stripped">
                <tr>
                    <td>Kode Prodi</td>
                    <td>{{ $prodi->id }}</td>
                </tr>
                <tr>
                    <td>Nama Prodi</td>
                    <td>{{ $prodi->nama }}</td>
                </tr>
            </div>
        </div>
    </div>
@endsection
