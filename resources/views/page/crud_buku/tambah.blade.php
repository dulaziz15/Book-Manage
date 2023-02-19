@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h3>Tambah Data Buku</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('buku.index') }}" class="btn btn-primary mb-4">Kembali</a>
                <form action="{{ route('buku.store') }}" method="post" class="mt-2">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 row">
                                <label for="nama" class="">nama</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 row">
                                <label for="rak" class="">Rak</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="rak">
                                        <option>Pilih Letak Buku</option>
                                        @foreach ($datas as $data)
                                            <option value="{{ $data->id }}" >{{ $data->kode_rak }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="penulis" class="">penulis</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" id="penulis" name="penulis">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 row">
                                <label for="tahun" class="">tahun</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="tahun" name="tahun">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 row">
                                <label for="penerbit" class="">penerbit</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="penerbit" name="penerbit">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-5 d-flex justify-content-end">
                        <button type="reset" class="btn btn-danger mr-2">Reset</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection