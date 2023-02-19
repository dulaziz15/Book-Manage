@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header">
                <h3>Data Buku</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm mb-2">Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Rak</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->penulis }}</td>
                                <td>{{ $data->penerbit }}</td>
                                <td>{{ $data->tahun }}</td>
                                <td>{{ $data->kode_rak }}</td>
                                <td>
                                    <form action="{{ route('buku.destroy', $data->id) }}" method="post">
                                        <a href="{{ route('buku.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                    </form> 
                                </td>
                            </tr>
                            <?php $no++ ?>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection