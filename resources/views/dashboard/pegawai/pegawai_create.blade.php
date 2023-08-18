@extends('dashboard.layouts.template')

@section('content')

@if (Request::session()->has('pegawai_create'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Pegawai Berhasil Ditambahkan',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('pegawai_create'); ?>
@endif

<a href="{{ url('pegawai') }}" class="btn btn-danger mb-3"><i class="bi bi-chevron-double-left"></i> Kembali</a>

<div class="card">
  <h4 class="card-title" style="margin-left: 2rem;">
    Form Tambah Pegawai
  </h4>
    <div class="card-body">
      <form action="{{ url('pegawai') }}" method="post" enctype="multipart/form-data" id="form_pegawai">
        @csrf
        <div class="row mb-3">
          <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{ old('nama_pegawai') }}">
          </div>
        </div>

        <div class="row mb-3">
          <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan') }}">
          </div>
        </div>

        <div class="row mb-3">
          <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
          <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" name="pendidikan">
              <option selected>Pilih Pendidikan</option>
              <option>TIDAK/BELUM SEKOLAH</option>
              <option>BELUM TAMAT SD/SEDERAJAT</option>
              <option>TAMAT SD/SEDERAJAT</option>
              <option>SLTP/SEDERAJAT</option>
              <option>SLTA/SEDERAJAT</option>
              <option>DIPLOMA I</option>
              <option>DIPLOMA II</option>
              <option>DIPLOMA III</option>
              <option>DIPLOMA IV/STRATA I</option>
              <option>STRATA II</option>
              <option>STRATA III</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="photo_pegawai" class="col-sm-2 col-form-label">Photo Pegawai</label>
          <div class="col-sm-10">
              <input class="form-control" type="file" name="photo">
            </div>
          </div>

        <div class="tombol-submit col-sm-12 text-end">
          <button id="add_pegawai" class="btn btn-primary"><i class="bi bi-person-plus"></i> Tambahkan Pegawai</button>
        </div>
      </form>
    </div>
</div>

<script>
  $('#add_pegawai').click(function (e) { 
    e.preventDefault();
    Swal.fire({
        title: 'Sedang Menambahkan Pegawai',
        html: 'Mohon Tunggu ...',
        timer: 1500,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
        },
      })
      $('#form_pegawai').submit()
  });
</script>

@endsection