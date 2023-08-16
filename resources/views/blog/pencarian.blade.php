@extends('blog.layouts.template')

@section('content')

<div class="container">

        <!-- Slide 1 -->
        <div class="card px-5 py-5" style="background-image: url(assets/img/slide/slide-1.jpg)">
              <div class="row justify-content-center mt-3" id="div-search">
                <div class="col-md-12 text-center">
                  <form action="{{ url('pencarian') }}" class="form-search">
                      <input type="search" class="form-control" placeholder="Masukan kata Kunci Pencarian" name="q" autofocus>
                      <button type="submit" id="tombol-pencarian">Cari Informasi</button>
                  </form>
                </div>
            </div>
        </div>

        @if (request('q'))
        @if ($posts->count())
          
        
        <div class="card">
          <p class="py-2 px-3 border-bottom">
            Menampilkan Hasil Pencarian : <strong>{{ request('q') }}</strong> <br> 
            <small>{{ $posts->count() }} hasil ditemukan</small>
          </p>
          <div class="table-responsive">
            <table class="table table-hover">
              <tbody>
                @foreach ($posts as $post)
              
                <tr>
                  <td>
                    <div class="card p-0 m-0">
                      <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title p-0 m-0">{{ $post->title }}</h5>
                          <p class="card-text p-0 mb-1"><small class="text-body-secondary">diposting {{ $post->created_at->diffForHumans()}}</small></p>
                          <p class="card-text">{{ $post->excerpt }}</p>
                          <a href="{{ url('postingan/'.$post->slug) }}" class="btn btn-primary"><i class="bi bi-eye-fill"></i> Baca Lebih Lanjut</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
        </div>
        
      </div>
      @else

      <div class="card px-lg-5 py-lg-5 text-center">
        <div class="col-md-12">
          <img src="{{ asset('assets/img/search.png') }}" alt="" width="100px">
          <h4 class="my-3">Pencarian untuk "{{ request('q') }}" Tidak ditemukan</h4>
        </div>
      </div>

      @endif
      @else
      
      <div class="card px-lg-5 py-lg-5 text-center">
        <div class="col-md-12 py-4">
          <img src="{{ asset('assets/img/seo.png') }}" alt="" width="100px">
          <h4 class="my-3">Portal Payungsari</h4>
          <p>Masukan kata kunci pencarian untuk menemukan informasi yang kamu butuhkan</p>
        </div>
      </div>

      @endif
      
      <canvas height="100"></canvas>
      
    </div>
    @endsection