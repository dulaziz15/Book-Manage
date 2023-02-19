@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h3>Edit Data Buku</h3>
            </div>
            <div class="card-body">
                @foreach ($bukus as $buku)
                <a href="{{ route('buku.index') }}" class="btn btn-primary mb-4">Kembali</a>
                <form action="{{ route('buku.update', $buku->id) }}" method="post" class="mt-2">
                    @csrf
                    @method('PUT')
                        
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 row">
                                <label for="nama" class="">nama</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nama" name="nama" value="{{ $buku->nama }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 row">
                                <label for="rak" class="">Rak</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="rak">
                                        <option selected value="{{ $buku->rak }}" >{{ $buku->kode_rak }}</option>
                                        @foreach ($raks as $rak)
                                            <option value="{{ $rak->id }}" >{{ $rak->kode_rak }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="penulis" class="">penulis</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $buku->penulis }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 row">
                                <label for="tahun" class="">tahun</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="tahun" name="tahun" value="{{ $buku->tahun }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 row">
                                <label for="penerbit" class="">penerbit</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    <div class="mt-5 d-flex justify-content-end">
                        <button type="reset" class="btn btn-danger mr-2">Reset</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection