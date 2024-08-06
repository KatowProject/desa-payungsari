@extends('blog.layouts.template')

@section('content')

<style>
  #post-image {
    width: 200px
  }
  #post-link {
    display: none;
  }
  @media (max-width:500px){
    #post-image {
    width: 140px
  }
    #post-body {
      display: none;
    }
    #post-published {
      display: none;
    }
    #post-link {
    display:inline;
  }
  #post-detail {
    display: none;
  }
  }
</style>

<div class="container">
  <div class="row justify-content-center">
    <hr>
    <div class="col-md-10">
      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('berita-desa') }}">Berita Desa</a></li>
          <li class="breadcrumb-item active" aria-current="page">detail</li>
        </ol>
      </nav>
      <h2>{{ $post->title }}</h2>
      <p><small>{{ $post->created_at->isoFormat('dddd, D MMMM Y') }} | Oleh Admin</small></p>

      <img src="{{ asset('storage/app/postingan'.$post->image) }}" class="img-fluid">
      
      <article class="my-3 fs-5">
        {!! $post->body !!}
        <br>
      </article>
      <h5 class="text-start my-3 border-bottom border-success">Berita Lainnya</h5>
      <table class="table">
        <tbody>
          @foreach ($posts->skip(3) as $post2)
            
          <tr>
            <td><img src="{{ asset('storage/'.$post2->image) }}" alt="" id="post-image"></td>
            <td>{{ $post2->title }} <br>
              <small id="post-link"><a href="{{ url('postingan/'.$post2->slug) }}">Baca Selengkapnya</a></small>
              <small id="post-published">{{ $post2->created_at->diffForHumans() }}</small> <br>
              <p id="post-body">{{ $post2->excerpt }}</p>
              <a id="post-detail" href="{{ url('postingan/'.$post2->slug) }}">Baca Selengkapnya</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
    <div class="col-md-12 text-center mb-4">
      <a href="{{ url('/') }}" class="btn btn-secondary">Kembali ke Home</a>
    </div>
  </div>
</div>

@endsection
