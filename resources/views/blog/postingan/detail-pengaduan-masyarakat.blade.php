@extends('blog.layouts.template')

@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('pengaduan') }}">Pengaduan Masyarakat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Pengaduan Masyarakat</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ $pengaduan->judul }}</h2>
                    <p class="card-text">{{ $pengaduan->isi }}</p>
                    <p class="card-text">{{ $pengaduan->keterangan }}</p>
                    <div class="row g-3">
                        @foreach (json_decode($pengaduan->foto_pengaduan) as $photo)
                        <div class="col">
                            <img src="{{ asset('storage/' . $photo) }}" alt="Foto Pengaduan" style="width: 300px; height: auto;">
                        </div>
                        @endforeach
                    </div>

                    <!-- back button -->
                    <a href="{{ url('pengaduan') }}" class="btn btn-primary mt-3 float-end">
                        <i class="bi bi-arrow-left"></i>
                        Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection