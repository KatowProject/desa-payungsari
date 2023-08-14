@extends('dashboard.layouts.template')

@section('content')

<style>
  trix-toolbar [data-trix-button-group=file-tools] {
    display: none;
  }
</style>

@if (Request::session()->has('postCreate'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Penduduk Berhasil Ditambahkan',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('postCreate'); ?>
@endif
<div class="card">
  <div class="card-post-title mt-3 px-3">
    <h4 class="myform-title">Form Add Postingan</h4>
  </div>
  <div class="card-body">
    <form action="{{ url('post') }}" method="POST" enctype="multipart/form-data" id="myform">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Judul Postingan</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="mb-3">
        <label for="excerpt" class="form-label">Ringkasan Postingan</label>
        <input type="text" class="form-control" id="excerpt" name="excerpt">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Gambar Postingan</label>
        <input type="file" class="form-control" id="image" name="image">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Isi Postingan</label>
        <input id="body" type="hidden" name="body">
        <trix-editor input="body"></trix-editor>
      </div>
      <input type="submit" value="Tambah Postingan" class="btn btn-primary text-bg-success">
    </form>
  </div>
</div>

<script>
document.addEventListener('trix-file-accept', function(e){
  e.preventDefault();
})
</script>
@endsection