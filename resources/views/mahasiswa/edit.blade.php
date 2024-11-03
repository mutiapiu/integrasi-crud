@extends('admin.dashboard')
@section('content')


<div class="container px-4">
    <h1 class="mt-4">Update Data Mahasiswa</h1>
    <div class="card mb-4">
        <div class="card-body">
        <form method="POST" action="{{ route('updateDataPegawai', $data->id) }}">
            @csrf                
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nip">NIM</label>
                    <input type="number" class="form-control" id="nip" name="nip" value="{{ $data->nip }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" required>{{ $data->alamat }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="no_hp">No Hp</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{ $data->no_hp }}" required>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
                <a href="{{ url('') }}" class="btn btn-danger btn-sm">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection