@extends('blog.layouts.template')

@section('content')

<style>

#hero{
  width: 100%
}


.kotak-text{
  margin-top: 9vh
}

  .form-search .form-control{
    margin-top: 7vh;
  }

  @media screen and (max-width: 500px){
    #hero{
      height: 60vh;
    }

    .form-search .form-control{
      width: 100%;
      margin-top: 6vh;
      
    }
    
    .carousel-item{
    }
    
    .kotak-text{
      margin-top: 7vh;
      width: 100%;
      
    }
  }
  

</style>




<div class="container">

{{-- Carousel::Begin --}}
<section id="hero">
  <div data-bs-interval="3000" class="" >
    
    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    
    <div class="" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="container">
            <div class="kotak-text">
              <h2 class="animate__animated animate__fadeInDown" style="">Menjawab Kebutuhan Informasi Masyarakat Desa Payungsari</h2>
              <div class="row justify-content-center mt-3" id="div-search">
                <div class="col-md-12 animate__animated animate__fadeInDown">
                  <form action="{{ url('pencarian') }}" class="form-search">
                      <input type="search" class="form-control " placeholder="Pencarian" name="q">
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
      
    </div> --}}
    
    {{-- <a class="carousel-control-prev"  href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>
    
    <a class="carousel-control-next"  href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a> --}}

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
    <div class="col-md-8">
      <h4 class="text-start my-3 border-bottom border-success">Berita Terbaru</h4>
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
      <div class="text-center my-4">
        <a href="{{ url('berita-desa') }}" class="btn btn-success btn-sm"> Lihat Semua Berita</a>
      </div>
    </div>

      <div class="col-md-4 mb-3">
        <h4 class="text-start my-3 border-bottom border-success">Lainnya</h4>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="{{ url('kegiatan-desa') }}"><i class="bi bi-caret-right-fill"></i> Kegiatan Desa</a></li>
          <li class="list-group-item"><a href="{{ url('lembaga-desa') }}"><i class="bi bi-caret-right-fill"></i> Lembaga Desa</a></li>
          <li class="list-group-item"><a href="{{ url('struktur-pemerintah-desa') }}"><i class="bi bi-caret-right-fill"></i> Struktur Pemerintah Desa</a></li>
        </ul>
        </div>

    </div>
  </div>
@endsection