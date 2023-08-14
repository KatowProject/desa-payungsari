@extends('dashboard.layouts.template')

@section('content')

@if (Request::session()->has('penduduk_destroy'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Penduduk Berhasil Dihapus',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('penduduk_destroy'); ?>
@endif

<div class="card">
  <div class="row mt-4 mb-2">
    <div class="col-8"><h4 class="judul-form">Kependudukan Desa Payungsari</h4></div>
    <div class="col-4 text-end"><a href="{{ url('penduduk/create') }}" id="tombol-tambah"><i class="bi bi-person-plus-fill"></i> Tambah Penduduk</a></div>
  </div>
  <hr class="garis">
  <div class="card-body">
    <form action="{{ url('pencarian_penduduk') }}" method="POST" class="myform" id="form_pencarian">
      @csrf
      <div class="row">
        <div class="col-4">
          <input type="search" class="form-control @error('search') is-invalid @enderror" placeholder="Cari" name="search">
          @error('search')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="col-4">
          <select class="form-select" name="key">
            <option value="nama_lengkap" selected>Nama Penduduk</option>
            <option value="nik">NIK</option>
            <option value="nomor_kk">Nomor KK</option>
          </select>
        </div>
        <div class="col-4">
          <select class="form-select" name="dusun">
            <option value="" selected>Dusun</option>
            <option value="DUSUN PEDES I">DUSUN PEDES I</option>
            <option value="DUSUN PEDES II">DUSUN PEDES II</option>
            <option value="DUSUN BAYUR I">DUSUN BAYUR I</option>
            <option value="DUSUN BAYUR II">DUSUN BAYUR II</option>
            <option value="DUSUN JATIMUKA">DUSUN JATIMUKA</option>
          </select>
        </div>
        <div class="col-12 mt-3 text-end" id="div-tombol">
        <button id="tombol-pencarian"><i class="bi bi-search"></i> Cari Penduduk</button>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>

{{-- Script Form Pencarian Penduduk --}}
<script>
$(document).ready(function () {
  $('#tombol-pencarian').click(function (e) { 
    e.preventDefault()  
    $('#form_pencarian').submit()
  });
});
</script>

@endsection