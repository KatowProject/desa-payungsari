@extends('blog.layouts.template')

@section('content')

<div class="container">
  <div class="row py-3">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Berita Desa</li>
      </ol>
    </nav>
    <h4 class="text-start my-3 border-bottom border-success">Semua Berita</h4>
    @foreach ($posts as $post)
    
    <div class="card mb-2 text-start p-1" style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.13)">
      <div class="row g-0 p-0">
        <div class="col-md-4">
          <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body p-3 m-0">
            <h5 class="card-title p-0 mb-0">{{ $post->title }}</h5>
            <small class="text-body-secondary p-0">{{ $post->created_at->diffForHumans()}}</small>
            <p class="card-text mt-1">{{ $post->excerpt }} <a style="color: rgb(84, 84, 231)" href="{{ url('postingan/'.$post->slug) }}">selengkapnya</a></p>
            {{-- <a href="{{ url('postingan/'.$post->slug) }}" class="btn btn-primary btn-sm text-end"> Baca Selengkapnya</a> --}}
          </div>
        </div>
      </div>
    </div>
    
    @endforeach
    <div class="col-md-12 justify-content-center">
      {{ $posts->links() }}
    </div>
  </div>
</div>

@endsection