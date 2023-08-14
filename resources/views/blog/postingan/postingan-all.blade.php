@extends('blog.layouts.template')

@section('content')

<div class="card mt-4" style="background-image: url(assets/img/slide/slide-3.jpg)">
  <div class="row justify-content-center mt-3">
    <div class="col-md-6">
      <form action="{{ url('/') }}">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukan kata Kunci" name="pencarian">
          <button class="btn btn-danger" type="submit">Cari Informasi</button>
        </div>
      </form>
    </div>
</div>
</div>

@if ($posts->count())

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Menampilkan Hasil Pencarian : {{ request('pencarian') }}</li>
  </ol>
</nav>

@foreach ($posts as $post)
<div class="card mb-2">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid rounded-start" alt="..." width="300px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="p-0" class="card-title">{{ $post->title }}</h5>
        <p class="card-text"><small class="text-body-secondary">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
        <p class="card-text">{{ $post->excerpt }}<br><a href="" style="color: rgb(22, 22, 158)">Baca Selengkapnya</a></p>
      </div>
    </div>
  </div>
</div>
@endforeach

{{ $posts->links() }}
@else

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Tidak ada Postingan dengan kata kunci : {{ request('pencarian') }}</li>
  </ol>
</nav>

@endif
@else

@endsection