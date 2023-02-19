@extends('layout.app')
@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header">
            <h3>Data Rak</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <a href="{{ route('rak.create') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
                    <tr>
                        <th>No</th>
                        <th>Kode Rak</th>
                        <th>Golongan</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $data->kode_rak }}</td>
                            <td>{{ $data->golongan }}</td>
                            <td>
                                <form action="{{ route('rak.destroy', $data->id) }}" method="post">
                                    <a href="{{ route('rak.edit', $data->id) }}" class="btn btn-warning">Edit</a>
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