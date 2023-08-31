@extends('dashboard.layouts.template')

@section('content')
<style>
  @media (max-width:500px){
    .add-desktop {
      display: none
    }
    .card-body {
      margin-top: 2rem
    }
  }
  @media (min-width:450px){
    .add-mobile {
      display: none
    }
  }
</style>

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
  <div class="add-mobile pt-3 text-center">
  <a href="{{ url('penduduk/create') }}" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i> Tambah Penduduk</a>
  </div>
  <div class="row mt-4 mb-2 border-bottom add-desktop">
    <div class="col-8"><h4 class="judul-form">Kependudukan Desa Payungsari</h4></div>
    <div class="col-4 text-end"><a href="{{ url('penduduk/create') }}" id="tombol-tambah"><i class="bi bi-person-plus-fill"></i> Tambah Penduduk</a></div>
  </div>
  <div class="card-body">
    <form action="{{ url('pencarian_penduduk') }}" method="POST" class="myform">
      @csrf
      <div class="row g-2 mb-3">
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nik" maxlength="16">
            <label for="floatingInputGrid">Nomor Induk Kependudukan (NIK)</label>
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nomor_kk" maxlength="16">
            <label for="floatingInputGrid">Nomor Kartu Keluarga (KK)</label>
          </div>
        </div>
      </div>
      <div class="row g-2 mb-3">
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nama_lengkap">
            <label for="floatingInputGrid">Nama Lengkap</label>
          </div>
        </div>
      </div>

      <div class="row g-2 mb-2">
        <div class="col-md">
          <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid" name="dusun">
              <option selected></option>
              <option>DUSUN PEDES I</option>
              <option>DUSUN PEDES II</option>
              <option>DUSUN BAYUR I</option>
              <option>DUSUN BAYUR II</option>
              <option>DUSUN JATIMUKA</option>
            </select>
            <label for="floatingSelectGrid">Cari Berdasarkan Dusun</label>
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid" name="no_rt">
              <option selected></option>
              <option>001</option>
              <option>002</option>
              <option>003</option>
              <option>004</option>
              <option>005</option>
              <option>006</option>
              <option>007</option>
              <option>008</option>
              <option>009</option>
              <option>010</option>
              <option>011</option>
              <option>012</option>
              <option>013</option>
              <option>014</option>
              <option>015</option>
              <option>016</option>
              <option>017</option>
              <option>018</option>
            </select>
            <label for="floatingSelectGrid">Cari Berdasarkan Nomor RT</label>
          </div>
        </div>
        <div class="col-md">
          <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid" name="no_rw">
              <option selected></option>
              <option>001</option>
              <option>002</option>
              <option>003</option>
              <option>004</option>
              <option>005</option>
              <option>006</option>
              <option>007</option>
              <option>008</option>
              <option>009</option>
              <option>010</option>
            </select>
            <label for="floatingSelectGrid">Cari Berdasarkan Nomor RW</label>
          </div>
        </div>

      </div>

        <div class="col-12 mt-3 text-end" id="div-tombol">
        <button type="submit" id="tombol-pencarian"><i class="bi bi-search"></i> Cari Penduduk</button>
        </div>
      </form>
    </div>
    </div>

    <p style="color: red">Note : Cari Penduduk dengan 1 Kata Kunci Pencarian</p>

{{-- Script Form Pencarian Penduduk --}}
<script>
$(document).ready(function () {

});
</script>

@endsection