@extends('blog.layouts.template')

@section('content')

<div class="container">
  <div class="row">

    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Informasi Publik</li>
        </ol>
      </nav>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="{{ url('informasi') }}">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search.." name="key">
            <button class="btn btn-danger" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>

    @if (request('key'))
    @if ($posts->count())
    
    <p class="my-3">Menampilkan Hasil Perncarian : {{ request('key') }}</p>
    @foreach ($posts as $post)
    <div class="col-md-12">
      
      <div class="card mb-3 text-start p-3" style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.13)">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ 'storage/'.$post->gambar }}" class="img-fluid rounded-start" alt="..." width="300px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $post->judul_berita }}</h5>
              <p class="card-text">{{ $post->ringkasan_berita }}</p>
              <p class="card-text"><small class="text-body-secondary">Selasa, 9 Agustus 2023</small></p>
              <a href="{{ url('berita/'.$post->slug) }}" class="btn btn-primary btn-sm text-end"> Baca Selengkapnya...</a>
            </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @else
  <p class="my-3">Tidak Bisa Menemukan : {{ request('key') }}</p>
  @endif
    @else

    @if ($posts->count())
      
      <div class="card mb-3">
        <img src="{{ asset('storage/'.$posts[0]->image) }}" class="card-img-top mt-2" alt="..." width="400" height="400">
        <div class="card-body text-center">
          <h5 class="card-title text-decoration-none text-dark"><a href="#">{{ $posts[0]->title }}</a></h5>
          <p class="card-text"><small class="text-body-secondary">Last updated {{ $posts[0]->created_at->diffForHumans() }}| oleh Admin</small></p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="{{ url('informasi_publik/'.$posts[0]->slug) }}" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>

      <div class="col-md-10">
        <h4>Semua Informasi</h4>
        <hr>
      @foreach ($posts->skip(1) as $post)

            <div class="card mb-3 text-start p-3" style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.13)">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{ 'storage/'.$post->image }}" class="img-fluid rounded-start" alt="..." width="300px">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <p class="card-text"><small class="text-body-secondary">Selasa, 9 Agustus 2023</small></p>
                    <a href="{{ url('informasi_publik/'.$post->slug) }}" class="btn btn-primary btn-sm text-end"> Baca Selengkapnya...</a>
                  </div>
                </div>
              </div>
            </div>
            
            @endforeach
            {{ $posts->links() }}
            @else
            <p>Tidak Ada Postingan</p>
            @endif
          </div>
          @endif
  </div>
</div>

@endsection