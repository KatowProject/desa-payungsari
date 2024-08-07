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

  <link href="{{ asset('assets/dashboard/vendor/DataTables/datatables.min.css') }}" rel="stylesheet" />

  <script src="{{ asset('assets/dashboard/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/jquery.js') }}"></script>

  <style>
    .form-search input {
      box-shadow: none;
      font-size: 20px;
      border-radius: 5;
      font-weight: 300;
      text-align: center;
      font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .form-search input:focus {
      border-color: #4f61fc;
      box-shadow: none;
    }

    .form-search #tombol-pencarian {
      background: #10bb49;
      border: 0;
      padding: 10px 25px;
      color: #fff;
      transition: 0.4s;
      border-radius: 4px;
      margin-top: 1rem;
      font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .form-search #tombol-pencarian:hover {
      background: #5969f3;
    }

    #header {
      background: rgba(255, 255, 255, 0.626);
    }

    .footer .judul-footer {
      font-weight: 600;
    }

    .sosmed i {
      font-size: 25px;
    }

    .footer-0 {
      display: flex;
      justify-content: space-around;
      height: 30vh;
      color: white;
      background-color: #3c3c3c;
      text-align: start;
    }

    .sosmed a {
      font-size: 10px
    }


    .footer-1 {
      display: flex;
      justify-content: space-around;
      justify-items: center;
      align-items: center;
      height: 15vh;
    }

    @media (max-width:500px) {

      .footer-1,
      .footer-0 {
        display: flex;
        flex-direction: column;
        padding-left: 1.2rem;
        text-align: start;
      }

      .footer-0 {
        height: 55vh;
        padding-bottom: 30px;
        gap: 30px;
        padding-left: 1.2rem
      }

      .footer-1 {
        height: 20vh;
      }


    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto judul-logo">
        <img src="{{ asset('assets/img/Kabupaten-Karawang.png') }}" class="gambar-logo " alt="">
        <div class="child-judul-logo">
          <p class="kab">KABUPATEN KARAWANG</p>
          <P class="des">DESA PAYUNGSARI</P>
        </div>

      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>

          <li class="dropdown"><a href="#"><span>Profile Desa</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="{{ Request::is('tentang-desa') ? 'active' : '' }}" href="{{ url('tentang-desa') }}">Tentang Desa</a></li>
              <li><a class="{{ Request::is('perangkat-desa') ? 'active' : '' }}" href="{{ url('perangkat-desa') }}">Perangkat Desa</a></li>
              <li><a class="{{ Request::is('struktur-pemerintah-desa') ? 'active' : '' }}" href="{{ url('struktur-pemerintah-desa') }}">Struktur Perangkat Desa</a></li>
              <li><a class="{{ Request::is('lembaga-desa') ? 'active' : '' }}" href="{{ url('lembaga-desa') }}">Lembaga Desa</a></li>
              <li><a class="{{ Request::is('tentang') ? 'active' : '' }}" href="{{ url('tentang') }}">Tentang</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="{{ Request::is('berita-desa') ? 'active' : '' }}" href="{{ url('berita-desa') }}">Berita Desa</a></li>
              <li><a class="{{ Request::is('kegiatan-desa') ? 'active' : '' }}" href="{{ url('kegiatan-desa') }}">Kegiatan Desa</a></li>
              <li><a class="{{ Request::is('pencarian') ? 'active' : '' }}" href="{{ url('pencarian') }}">Portal Payungsari</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Layanan Publik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a id="kegiatan-kades" class="{{ Request::is('') ? 'active' : '' }}" href="{{ url('/kegiatan-kades') }}">Portal Berita</a></li>
              <li><a id="pengaduan-masyarakat" class="{{ Request::is('') ? 'active' : '' }}" href="{{ url('/pengaduan') }}">Pengaduan Masyarakat</a></li>
            </ul>
          </li>

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
  <footer class="footer-0 py-5">

    {{-- <div class="social">
      <div class="row">
        <a href="" class="col-md mb-2"><i class="bi bi-telephone-fill"></i> +62 812 XXXX XXXX</a>
        <a href="" class="col-md mb-2"><i class="bi bi-envelope-at-fill"></i> payungsarides@gmail.com</a>
        <a href="" class="col-md"><i class="bi bi-geo-alt-fill"> Jalan Raya Sungaibuntu No.8 Desa Payungsari <br> Kecamatan Pedes Kab.Karawang - Jawa Barat</i></a>
      </div>
    </div> --}}

    {{-- <div class="container text-start " style="color: #fff;">
      <div class="row gap-3">
        <div class="col order-first" style="margin-left: 5rem">
          <p class="judul-footer">WEBSITE RESMI</p>
          <p>Desa Payungsari</p>
          <p><a href="" class="col-md"><i class="bi bi-geo-alt-fill"> Jalan Raya Sungaibuntu No.8 Desa Payungsari <br> Kecamatan Pedes Kab.Karawang - Jawa Barat</i></a></p>
        </div>
        <div class="col" style="margin-left: 5rem">
          <p class="judul-footer">Kontak Kami</p>
          <p><a href="" class="col-md mb-3"><i class="bi bi-telephone-fill"></i> +62 812 XXXX XXXX</a></p>
          <p><a href="" class=""><i class="bi bi-envelope-at-fill">kontiol payungsarides@gmail.com</i> </a></p>
        </div>
        <div class="col order-last  sosmed" style="">
          <p class="judul-footer">Social Media</p>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-facebook px-1 "></i></a>
          <a href=""><i class="bi bi-twitter"></i></a>
        </div>
      </div>
    </div> --}}
    <div class="1">
      <h5 style="font-weight: 700">Website Resmi</h5>
      <p>Desa Payungssari </p>
    </div>
    <div class="2">
      <h5 style="font-weight: 600">Kontak Kami</h5>
      <p><a href="" class="col-md mb-3"><i class="bi bi-telephone-fill"></i> +62 812 XXXX XXXX</a></p>
      <p><a href="" class=""><i class="bi bi-envelope-at-fill">payungsarides@gmail.com</i> </a></p>
    </div>
    <div class="3 sosmed">
      <h5 class="judul-footer" style="font-weight: 600">Social Media</h5>
      <a href=""><i class="bi bi-instagram"></i></a>
      <a href=""><i class="bi bi-facebook px-1 "></i></a>
      <a href=""><i class="bi bi-twitter"></i></a>
    </div>

  </footer>

  <div class="footer-1 text-start" style="background-color:#0e0c0cdf; color:#fff;">
    {{-- <div class="first"  style="font-size:2rem;"> 
      <p>PRKP</p>
    </div> --}}
    <div class="mid" style="font-size:0.7rem;">
      <p>© Copyright 2023. All Rights Reserved.</p>
    </div>
    {{-- <div class="last">
      <p>Contact Us</p>
    </div> --}}
  </div>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/vendor/DataTables/datatables.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('#mytable').DataTable();
    });
  </script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('#pelayanan-online').click(function(e) {
        e.preventDefault();
        Swal.fire(
          'Pelayanan Online',
          'Fitur Belum Tersedia untuk saat ini',
          'info'
        )
      });

    });
  </script>

</body>

</html>