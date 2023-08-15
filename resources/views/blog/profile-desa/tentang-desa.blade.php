@extends('blog.layouts.template')

@section('content')

<div class="container">
  <div class="row py-5">
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