@extends('layout.app')
@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header">
            <h3 class="p-2">Tambah Data Rak</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('rak.index') }}" class="btn btn-primary ml-3">Kembali</a>
            <form action="{{ route('rak.store') }}" method="post" class="p-4">
                @csrf
                @method('POST')
                <div class="mb-3 row">
                    <label for="kode" class="col-sm-2 col-form-label">Kode Rak</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="kode" name="kode">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="golongan" name="golongan">
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-end">
                    <button class="btn btn-danger mr-2" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection