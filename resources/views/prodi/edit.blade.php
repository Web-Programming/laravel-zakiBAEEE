@extends('layout.master')
@section('title', 'Halaman Edit Profil')

@section('content')
    <div class="row pt-4">
        <div class="col">
            <h2>Form Edit Profil</h2>
            @if (session()->get('info'))
                <div class="alert alert-success">
                    {{ session()->get('info') }}
                </div>
            @endif
            <form action="{{ route('prodi.update', ['prodi' => $prodi->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control"
                        value="{{ old('nama') ?? $prodi->nama }}">
                    @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Ubah</button>
                    @enderror
                </div>
            </form>
        </div>
    </div>
@endsection
