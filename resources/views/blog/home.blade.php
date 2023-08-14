@extends('blog.layouts.template')

@section('content')

<div class="container">

{{-- Carousel::Begin --}}
<section id="hero">
  <div id="heroCarousel" data-bs-interval="3000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    
    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    
    <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Menjawab Kebutuhan Informasi <br> <span>Masyarakat Desa Payungsari</span></h2>
              <div class="row justify-content-center mt-3" id="div-search">
                <div class="col-md-12 animate__animated animate__fadeInDown">
                  <form action="{{ url('pencarian') }}" class="form-search">
                      <input type="search" class="form-control" placeholder="Pencarian" name="q">
                      <button type="submit" id="tombol-pencarian">Cari Informasi</button>
                  </form>
                </div>
            </div>
            </div>
          </div>
        </div>
      {{-- <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)"></div>
      
      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)"></div>
       --}}
    </div>
    
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>
    
    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section>
{{-- Carousel::End --}}

{{-- Breadcrumb::Begin --}}
<nav aria-label="breadcrumb" class="mt-2" style="display: none">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#"><i class="bi bi-house-exclamation-fill"></i> Home</a></li>
  </ol>
</nav>
{{-- Breadcrumb::End --}}

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services section-bg">
    <div class="container">

      <div class="row no-gutters">
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <div class="icon" ><i class="bi bi-check-circle"></i></div>
            <h4 class="title"><a href="">Situs Resmi</a></h4>
            <p class="description" style="text-align: justify">Website Resmi Desa Payungsari Kecamatan Pedes Kabupaten Karawang - Jawa Barat </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-chat-left-text"></i></div>
            <h4 class="title"><a href="">Informasi Publik</a></h4>
            <p class="description" style="text-align: justify">Menyediakan Pelayanan dan Informasi Publik untuk Masyarakat Desa Payungsari </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-globe-asia-australia"></i></div>
            <h4 class="title"><a href="">Global</a></h4>
            <p class="description" style="text-align: justify">Website bersifat global yang bisa di akses dimana saja untuk memberikan kemudahan bagi masyarakat terkait Pelayanan dan Informasi Desa</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="row">
    <div class="col-md-9">
      <h4 class="text-start my-3 border-bottom border-success">Berita Terbaru</h4>
      @foreach ($posts as $post)
      
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
              <a href="{{ url('postingan/'.$post->slug) }}" class="btn btn-primary btn-sm text-end"> Baca Selengkapnya...</a>
            </div>
          </div>
        </div>
      </div>
      
      @endforeach
      <div class="text-center my-4">
        {{ $posts->links() }}
        <a href="{{ url('pencarian') }}" class="btn btn-success btn-sm"> Lihat Semua Berita</a>
      </div>
    </div>

      <div class="col-md-3 mb-3">
        <h4 class="text-start my-3 border-bottom border-success">Lainnya</h4>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="#"><i class="bi bi-caret-right-fill"></i> Kegiatan Desa</a></li>
          <li class="list-group-item"><a href="#"><i class="bi bi-caret-right-fill"></i> Lembaga Desa</a></li>
          <li class="list-group-item"><a href="#"><i class="bi bi-caret-right-fill"></i> Syarat Pembuatan KTP</a></li>
        </ul>
        </div>

    </div>
  </div>
@endsection