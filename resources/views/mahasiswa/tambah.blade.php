@extends('admin.dashboard')
@section('content')

<title>Tambah Data Mahasiswa</title>
<div class="container">
<h1 class="mt-4">Tambah Data Mahasiswa</h1>
        <div class="card">
            <div class="card-body">
            <form method="POST" action="{{ route('createDataPegawai') }}">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nip">NIM</label>
                        <input type="number" class="form-control" id="nip" name="nip" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp" required>
                    </div><br>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    <a href="{{ url('') }}"><button type="button" class="btn btn-danger btn-sm">Batal</button></a>
                </form>
            </div>
        </div>


@endsection