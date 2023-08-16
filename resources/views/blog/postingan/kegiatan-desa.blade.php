@extends('blog.layouts.template')

@section('content')

<div class="container">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Kegiatan Desa</li>
    </ol>
  </nav>
  <div class="row py-2">
    <div class="card px-lg-5 py-lg-5 text-center">
      <div class="col-md-12">
        <img src="{{ asset('assets/img/search.png') }}" alt="" width="100px">
        <h3 class="my-3">Halaman Tidak Ditemukan</h3>
        <a href="{{ url('/') }}"> Kembali ke Beranda</a>
      </div>
    </div>
  </div>
</div>

@endsection