<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sipedes | Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/dashboard/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/dashboard/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/dashboard/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="{{ asset('assets/dashboard/js/jquery.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    .input-group{
      position: relative;
      margin: 20px 0;
    }
  
    .input-group label{
      position: absolute;
      top: 50%;
      left:5px;
      transform: translateY(-50%);
      font-size:16px;
      color:black;
      padding: 0 5px;
      pointer-events:none; 
      transition: .5s;
    }
  
    .input-group input{
      width: 320px;
      height: 40px;
      font-size: 16px;
      padding: 0 10px;
      background: transparent;
      border: 1.2px solid rgb(91, 129, 255);
      outline: none;
      border-radius: 7px !important;
    }
    
    .input-group input:focus~label{
      font-size: 12px;
      top: 0;
      color: black;
      background: #fff;
    }
  
  
    .input-group input:valid~label {
      font-size: 12px;
      top: 0;
      color: black;
      background: #fff;
      
    }
  
  </style>

</head>

<body>

  <main>
    <div class="container">

      @if (Request::session()->has('gagal'))
        <script>
          Swal.fire({
          icon: 'error',
          title: 'Oops... Login Gagal',
          text: 'Masukan Username dan Password yang benar',
          })
        </script>
        <?php Request::session()->forget('gagal') ?>
      @endif
      @if (Request::session()->has('regist'))
        <script>
          Swal.fire(
          'Registrasi Berhasil',
          'Silahkan Login...',
          'success'
          )
        </script>
        <?php Request::session()->forget('regist') ?>
      @endif

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-4">
                
                <div class="card-body">
                  <div class="d-flex justify-content-center py-4">
                    <a href="#" class="logo d-flex align-items-center w-auto">
                      <img src="assets/dashboard/img/favicon.ico" alt="">
                      <h4 class="d-none d-lg-block">Desa Payungsari</h4>
                    </a>
                  </div><!-- End Logo -->

                  <form class="row g-3 needs-validation" method="POST" action="" id="formlogin">
                    @csrf
                    <div class="col-12">
                      <div class="input-group">
                        <label for="tanggal_diterima" class="">Username</label>
                        <input type="text"class=" @error('username') is-invalid @enderror" placeholder="Masukan Username" name="username" required>
                        @error('username')
                        <div class="invalid-feedback">
                          Username tidak boleh kosong
                        </div>
                        @enderror
                      </div>
                      
                      <div class="input-group  ">
                        <label for="tanggal_diterima" class="">Password</label>
                        <input type="password" id="password" class=" password @error('password') is-invalid @enderror" placeholder="Masukan Password" name="password" required>
                        <button class="btn btn-outline-secondary" id="showpassword" type="button">Show</button>
                        @error('password')
                        <div class="invalid-feedback">
                          Password tidak boleh kosong
                        </div>
                        @enderror
                      </div>
                      
                    </div>

                    
                    <div class="col-12" id="divlogin">
                      <button class="btn btn-primary w-100" type="submit" id="blogin">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0 text-center"><a href="{{ url('/') }}">Kembali Ke Halaman Utama</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->
  <script src="assets/dashboard/js/main.js"></script>

  <script>
    $(document).ready(function () {
      $('#blogin').click(function (e) { 
        e.preventDefault();
        $('#divlogin').html(`<button class="btn btn-primary w-100">Mohon Tunggu... <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></button>`);
        $('#formlogin').submit()
      });
    });
  </script>

  <script>
    $(document).ready(function(){
    $("#showpassword").click(function(){
    $("#password").attr("type", "text")
    $('#showpassword').attr("id","hidepassword")
  });
    // $('#password').focus(function(){
    //   $('.label').show()
    // })
});
  </script>

</body>

</html>