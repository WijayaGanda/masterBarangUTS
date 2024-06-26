@extends('layouts.app')
@section('content')
<div class="container-sm my-5">
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3 col-xl-4 border">
            <div class="mb-3 text-center">
                <i class="bi bi-boxes fs-2"></i>
                <h4>Detail Produk</h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="firstName" class="form-label">Nama Barang</label>
                    <h5>{{ $barang->nama_barang }}</h5>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="lastName" class="form-label">Harga Barang</label>
                    <h5>{{ $barang->harga_barang }}</h5>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="email" class="form-label">Deskripsi Barang</label>
                    <h5>{{ $barang->deskripsi_barang }}</h5>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="age" class="form-label">Satuan Barang</label>
                    <h5>{{ $barang->satuan->nama_satuan }}</h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 d-grid">
                    <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection