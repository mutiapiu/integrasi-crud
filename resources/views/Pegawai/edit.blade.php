@extends('admin.dashboard')
@section('content')

    <div class="container">
        <a href="{{ route('getalldataPegawai') }}" class="btn btn-secondary">Kembali</a>
        <h1 class="text-center">Update Data Pegawai</h1>
        <div class="card">
            <div class="card-header">
                Informasi Pegawai
            </div>
            <div class="card-body">
                <!-- Pastikan action diarahkan ke route update -->
                <form method="POST" action="{{ route('updateDataPegawai', $data->id) }}">
                    @csrf

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip" value="{{ $data->nip }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat">{{ $data->alamat }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
            </div>
        </div>
    </div>

 @endsection