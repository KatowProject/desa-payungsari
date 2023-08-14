@extends('dashboard.layouts.template')

@section('content')

@if (Request::session()->has('login'))
<input type="text" id="namauser" value="{{ auth()->user()->nama }}" hidden>
<script>
  let nama = $('#namauser').val()
  Swal.fire(
  'Berhasil Login',
  'Selamat Datang '+nama,
  'success'
)
</script>
<?php Request::session()->forget('login'); ?>
@endif

@if (Request::session()->has('home'))
<script>
  Swal.fire({
  icon: 'error',
  title: 'Oops...Anda Sudah Login',
  text: 'Silahkan Logout',
  })
</script>
<?php Request::session()->forget('home'); ?>
@endif


<h4 class="mb-3" style="color: rgb(24, 24, 110);">Dashboard</h4>

<section class="section">
  <div class="row">

    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Pegawai <span>| Desa</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              <h2>{{ $pegawai->count() }}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Penduduk <span>| Desa</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              <h2>{{ $penduduk->count() }}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Dusun <span>| Desa</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div class="ps-3">
              <h2>5</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
<h4 style="color: rgb(24, 24, 110);">Data Laporan Kelahiran, Kematian, Pindah dan Datang (LAMPID)</h4>
    
    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Kelahiran <span>| Bulan ini</span></h5>
          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="ps-3">
              <h2>5</h2>
            </div>
          <a href="" style="margin-left: 4rem;"><i class="bi bi-eye-fill"></i> details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Pindah <span>| Bulan ini</span></h5>
          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="ps-3">
              <h2>5</h2>
            </div>
          <a href="" style="margin-left: 4rem;"><i class="bi bi-eye-fill"></i> details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Datang <span>| Bulan ini</span></h5>
          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="ps-3">
              <h2>5</h2>
            </div>
          <a href="" style="margin-left: 4rem;"><i class="bi bi-eye-fill"></i> details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Kematian <span>| Bulan ini</span></h5>
          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="ps-3">
              <h2>5</h2>
            </div>
          <a href="" style="margin-left: 4rem;"><i class="bi bi-eye-fill"></i> details</a>
          </div>
        </div>
      </div>
    </div>
    
    </div>
  </div>
</section>

@endsection