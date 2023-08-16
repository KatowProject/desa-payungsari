@extends('dashboard.layouts.template')

@section('content')

<style>
  trix-toolbar [data-trix-button-group=file-tools] {
    display: none;
  }
</style>

@if (Request::session()->has('postUpdate'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Perubahan Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('postUpdate'); ?>
@endif

<a href="{{ url('post') }}" class="btn btn-danger mb-3"><i class="bi bi-arrow-left-short"> Kembali</i></a>
<a href="{{ url('post/'.$post->id) }}" class="btn btn-success mb-3 mx-3"><i class="bi bi-eye"> Lihat Postingan</i></a>

<div class="card">
  <div class="card-post-title mt-3 px-3">
    <h4 class="myform-title">Form Add Postingan</h4>
  </div>
  <div class="card-body">
    <form action="{{ url('post/'.$post->id) }}" method="POST" enctype="multipart/form-data" id="myform">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Judul Postingan</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title',$post->title) }}">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Gambar Postingan</label>
        <input type="file" class="form-control" id="image" name="image">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Isi Postingan</label>
        <input id="body" type="hidden" name="body" value="{{ old('body',$post->body) }}">
        <trix-editor input="body"></trix-editor>
      </div>
      <input type="submit" value="Simpan Perubahan" class="btn btn-primary text-bg-success">
    </form>
  </div>
</div>

<script>
document.addEventListener('trix-file-accept', function(e){
  e.preventDefault();
})
</script>
@endsection