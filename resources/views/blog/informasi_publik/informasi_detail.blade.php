@extends('blog.layouts.template')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <hr>
    <div class="col-md-10">
      <h2>{{ $post->title }}</h2>
      <p><small>Selasa, 9 Agustus 2023 | Oleh Admin</small></p>

      <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid">
      
      <article class="my-3 fs-5">
        {!! $post->body !!}
        <br>
        <a href="{{ url('informasi_publik') }}" class="my-3">lihat berita lainnya...</a>
      </article>

    </div>
    <div class="col-md-12 text-center mb-4">
      <a href="{{ url('/') }}" class="btn btn-secondary">Kembali ke Home</a>
    </div>
  </div>
</div>

@endsection
