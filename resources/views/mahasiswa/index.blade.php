@extends('admin.dashboard')
@section('content')

<title>Data Mahasiswa</title>
    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>                        
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->nip }}</td>
                        <td>{{ $d->alamat }}</td>
                        <td>{{ $d->no_hp }}</td>
                        <td>
                            <a href="{{ route('getDataByIdPegawai', $d->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('deleteDataPegawai', $d->id) }}" method="POST" style="display:inline;">                                
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>
    </div>

@endsection