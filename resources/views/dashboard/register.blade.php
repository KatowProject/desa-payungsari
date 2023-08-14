<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register | Sipedes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card pb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <div class="d-flex justify-content-center mb-2">
                      <a href="/" class="logo d-flex align-items-center w-auto">
                        <img src="{{ asset('assets/img/karawang.png') }}" alt="">
                        <span class="d-none d-lg-block">Sipedes</span>
                      </a>
                    </div><!-- End Logo -->
                    <p class="text-center small">Sistem Informasi Pelayanan Administrasi Desa</p>
                  </div>

                  <form class="row myform" action="" method="POST">
                    @csrf
                    <div class="col-12 mb-3">
                      <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Pengguna" required>
                    </div>
                    <div class="col-12 mb-3">
                      <input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
                    </div>
                    <div class="col-12 mb-3">
                      <input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
                    </div>
                    <div class="col-12 mb-3">
                      <input type="password" name="password2" class="form-control" placeholder="Konfirmasi Password" required>
                    </div>
                    </div>
                    <div class="col-12 text-center">
                      <button class="btn btn-primary" type="submit">Create Account</button>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
              by <a href="#">IDM Developer</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

</body>

</html>