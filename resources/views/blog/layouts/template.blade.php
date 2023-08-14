<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('favicon.ico') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <script src="{{ asset('assets/dashboard/js/jquery.js') }}"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto judul-logo">
        <img src="{{ asset('assets/img/kabupaten-karawang.png') }}" class="gambar-logo " alt="">
        <div class="child-judul-logo">
          <p class="kab">KABUPATEN KARAWANG</p>
          <P class="des">DESA PAYUNGSARI</P>
        </div>
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>

          <li><a class="nav-link {{ Request::is('pencarian') ? 'active' : '' }}" href="{{ url('pencarian') }}">Informasi Publik</a></li>
          
          <li><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('about') }}">Tentang Desa</a></li>

          <li class="dropdown"><a href="#"><span>Layanan Publik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Pemerintahan</a></li>
              <li><a href="#">Kesehatan</a></li>
              <li><a href="#">Kependudukan</a></li>
              <li><a href="#">Pengaduan</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#">Kontak Kami</a></li>
          <li><a class="getstarted scrollto" href="{{ url('dashboard') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

          @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="social">
      <div class="row">
        <a href="" class="col-md mb-2"><i class="bi bi-telephone-fill"></i> +62 812 XXXX XXXX</a>
        <a href="" class="col-md mb-2"><i class="bi bi-envelope-at-fill"></i> payungsarides@gmail.com</a>
        <a href="" class="col-md"><i class="bi bi-geo-alt-fill"> Jalan Raya Sungaibuntu No.8 Desa Payungsari <br> Kecamatan Pedes Kab.Karawang - Jawa Barat</i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>