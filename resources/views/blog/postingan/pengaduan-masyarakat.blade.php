@extends('blog.layouts.template')

@section('content')

<div class="container">
  <div class="row py-3">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pengaduan Masyarakat</li>
      </ol>
    </nav>
    <h4 class="text-start my-3 border-bottom border-success">Pengaduan Masyarakat</h4>
    <div class="card-body">
      <form action="/pengaduan-store" method="POST">
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" name="judul" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="isi" class="form-label">Isi</label>
          <input type="text" name="isi" class="form-control">
        </div>
        <div class="mb-3">
          <label for="keterangan" class="form-label">Keterangan</label>
          <input type="text" name="keterangan" class="form-control">
        </div>
        <div class="mb-3">
          <label for="foto_pengaduan" class="form-label">Foto Pengaduan</label>
          <input type="file" name="foto_pengaduan" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
</div>
</div>

@endsection