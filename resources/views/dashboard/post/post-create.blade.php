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
  title: 'Postingan Berhasil Ditambahkan',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('postCreate'); ?>
@endif

<a href="{{ url('post') }}" class="btn btn-danger mb-3 mx-3"><i class="bi bi-arrow-left-short"> Kembali</i></a>

<div class="card">
  <div class="card-post-title mt-3 px-3">
    <h4 class="myform-title">Form Add Postingan</h4>
  </div>
  <div class="card-body">
    <form action="{{ url('post') }}" method="POST" enctype="multipart/form-data" id="myform">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Judul Postingan</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
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
      <button class="btn btn-primary submit-confirm" >Publikasi</button>
    </form>
  </div>
</div>
<script>
  $('.submit-confirm').click(function (e) { 
    e.preventDefault();
    let form = $(this).closest('form');
    Swal.fire({
    title: 'Publikasikan Postingan?',
    text: "Pastikan Data Sudah Benar!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: 'blue',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Publikasi'
    }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: 'Sedang Mempublikasikan Postingan',
        html: 'Mohon Tunggu ...',
        timer: 1500,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
        },
      });
        form.submit();
    }
  })
    });
  </script>
<script>
document.addEventListener('trix-file-accept', function(e){
  e.preventDefault();
})
</script>
@endsection