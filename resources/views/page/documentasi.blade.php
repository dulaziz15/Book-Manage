@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header">
                <h3>Documentasi API</h3>
            </div>
            <div class="card-body">
                <div class="my-3">
                    <div class="btn btn-success mb-1"><h4>Book API</h4></div>
                    <div class="btn btn-warning btn-sm"><h6>Version 1.0.0</h6></div>
                </div>
                <p>Ini adalah documentasi mengenai data buku dan rak yang ada pada suatu system informasi Book Manage yang dibuat oleh ABDUL AZIZ</p>
                <div class="row">
                    <div class="col-lg-1">
                        <div class="btn btn-success">GET</div>
                    </div>
                    <div class="col-lg-11 ">
                        <a href="http://localhost:8000/api/buku" class="align-self-center btn btn-outline-secondary">http://localhost:8000/api/buku</a>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-11 ">
                        <img src="{{ url('img/buku.png') }}" alt="" width="700px">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-lg-1">
                        <div class="btn btn-success">GET</div>
                    </div>
                    <div class="col-lg-11 ">
                        <a href="http://localhost:8000/api/rak" class="align-self-center btn btn-outline-secondary">http://localhost:8000/api/rak</a>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-11 ">
                        <img src="{{ url('img/rak.png') }}" alt="" width="700px">
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-lg-1">
                        {{-- <div class="btn btn-success">GET</div> --}}
                    </div>
                    <div class="col-lg-11 d-flex">
                        <div class="">
                            <div class="btn btn-success">Search API</div>
                            <h5 class="mt-5">Dalam search API ini mencari data dari sebuah pencarian yang berdasarkan dari Nama, Penulis, Kode Rak, Penerbit, maupun Tahun</h5>
                            <h6 class="mt-5">Contoh Pengunaan</h6>
                            <div class="row">
                                <div class="col-lg-1">
                                    <div class="btn btn-success">GET</div>
                                </div>
                                <div class="col-lg-11 ">
                                    <form action="{{ route('search') }}" method="get">
                                        @csrf
                                        <div class="align-self-center btn btn-outline-secondary">http://localhost:8000/api/buku/search?cari=
                                            <input type="text" class="form-control" name="cari">
                                            <button type="submit" class="btn btn-success btn-sm mt-3 d-flex justify-content-end">Cari</button>
                                        </div>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-11 ">
                        <img src="{{ url('img/cari.png') }}" alt="" width="700px">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection