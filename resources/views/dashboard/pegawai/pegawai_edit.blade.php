@extends('dashboard.layouts.template')

@section('content')

@if (Request::session()->has('pegawai_update'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Perubahan Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('pegawai_update'); ?>
@endif

<a href="{{ url('pegawai') }}" class="btn btn-danger mb-3"><i class="bi bi-chevron-double-left"></i> Kembali</a>

<div class="card">
  <h4 class="card-title" style="margin-left: 2rem;">
    Form Tambah Pegawai
  </h4>
    <div class="card-body">
      <form action="{{ url('pegawai/'.$p->id) }}" method="post" enctype="multipart/form-data" id="form_pegawai">
        @method('put')
        @csrf
        <div class="row mb-3">
          <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{ old('nama_pegawai',$p->nama_pegawai) }}">
          </div>
        </div>

        <div class="row mb-3">
          <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan',$p->jabatan) }}">
          </div>
        </div>

        <div class="row mb-3">
          <label for="photo_pegawai" class="col-sm-2 col-form-label">Photo Pegawai</label>
          <div class="col-sm-10">
              <input class="form-control" type="file" id="photo_pegawai">
            </div>
          </div>

        <div class="tombol-submit col-sm-12 text-end">
          <button id="add_pegawai" class="btn btn-primary"><i class="bi bi-sd-card"></i> Simpan Perubahan</button>
        </div>
      </form>
    </div>
</div>

<script>
  $('#add_pegawai').click(function (e) { 
    e.preventDefault();
    Swal.fire({
        title: 'Sedang Menyimpan Perubahan',
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