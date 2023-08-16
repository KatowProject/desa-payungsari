@extends('dashboard.layouts.template')

@section('content')
<style>
  @media (max-width:450px){
    .img-desktop {
      display: none
    }
  }
</style>

@if (Request::session()->has('penduduk_create'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Penduduk Berhasil Ditambahkan',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('penduduk_create'); ?>
@endif

<div class="card">
  <div class="row mt-4 mb-2">
    <div class="col text-start"><a href="{{ url('penduduk') }}" id="tombol-kembali"><i class="bi bi-chevron-double-left"></i> Kembali</a></div>
    <div class="col text-end" style="margin-right: 20px;"><h4>Tambah Penduduk</h4></div>
  </div>
  <hr class="garis">
  <div class="card-body">
    <form action="{{ url('penduduk') }}" method="POST" enctype="multipart/form-data" class="myform" id="form_penduduk">
      @csrf
      <div class="row">
        <div class="col-2 img-desktop">
          <input type="file" name="photo" style="position: absolute; opacity:0; width:150px; height:210px; cursor:pointer;">
          <img src="{{ asset('assets/dashboard/img/user.png') }}" alt="" width="150px" height="100%" border="1">
        </div>
        <div class="col-10">
          <div class="row g-2 mb-3">
            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nik" value="{{ old('nik') }}">
                <label for="floatingInputGrid">Nomor Induk Kependudukan (NIK)</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nomor_kk" value="{{ old('nomor_kk') }}">
                <label for="floatingInputGrid">Nomor Kartu Keluarga</label>
              </div>
            </div>
          </div>
          <div class="row g-2 mb-3">
            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                <label for="floatingInputGrid">Nama Lengkap</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" name="jenis_kelamin">
                  <option selected></option>
                  <option>Laki-Laki</option>
                  <option>Perempuan</option>
                </select>
                <label for="floatingSelectGrid">Pilih Jenis Kelamin</label>
              </div>
            </div>
          </div>
          <div class="row g-2">
            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                <label for="floatingInputGrid">Tempat Lahir</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" name="tanggal">
                <option selected></option>
                @for ($i=1;$i<=31;$i++)
                <option>{{ $i }}</option>
                @endfor
                </select>
                <label for="floatingSelectGrid">Tanggal Lahir</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" name="bulan">
                  <option selected></option>
                  <option value="01">Januari</option>
                  <option value="02">Februari</option>
                  <option value="03">Maret</option>
                  <option value="04">April</option>
                  <option value="05">Mei</option>
                  <option value="06">Juni</option>
                  <option value="07">Juli</option>
                  <option value="08">Agustus</option>
                  <option value="09">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
                <label for="floatingSelectGrid">Bulan Lahir</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="tahun">
                <label for="floatingInputGrid">Tahun</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-2 mb-2">
          <div class="col-md">
            <div class="form-floating">
              <select class="form-select" id="floatingSelectGrid" name="agama">
                <option selected></option>
                <option>ISLAM</option>
                <option>KRISTEN</option>
                <option>BUDHA</option>
                <option>HINDU</option>
                <option>KATOLIK</option>
                <option>KONGHUCHU</option>
              </select>
              <label for="floatingSelectGrid">Pilih Agama</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <select class="form-select" id="floatingSelectGrid" name="status_perkawinan">
                <option selected></option>
                <option>Belum Kawin</option>
                <option>Sudah Kawin</option>
                <option>Pernah Kawin</option>
                <option>Cerai Mati</option>
                <option>Cerai Hidup</option>
              </select>
              <label for="floatingSelectGrid">Pilih Status Perkawinan</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <select class="form-select" id="floatingSelectGrid" name="pekerjaan">
                <option selected></option>
                <option>Belum/Tidak Bekerja</option>
                <option>Pelajar/Mahasiswa</option>
                <option>Buruh Harian Lepas</option>
                <option>Wiraswasta</option>
                <option>Mengurus Rumah Tangga</option>
                <option>Pegawai Negeri Sipil (PNS)</option>
                <option>Karyawan Swasta</option>
                <option>Nelayan</option>
              </select>
              <label for="floatingSelectGrid">Pilih Pekerjaan</label>
            </div>
          </div>
        </div>
        <div class="row g-2 mb-2">
          <div class="col-md">
            <div class="form-floating">
              <select class="form-select" id="floatingSelectGrid" name="dusun">
                <option selected></option>
                <option>DUSUN PEDES I</option>
                <option>DUSUN PEDES II</option>
                <option>DUSUN BAYUR I</option>
                <option>DUSUN BAYUR II</option>
                <option>DUSUN JATIMUKA</option>
              </select>
              <label for="floatingSelectGrid">Plih Dusun</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <select class="form-select" id="floatingSelectGrid" name="no_rt">
                <option selected></option>
                <option>001</option>
                <option>002</option>
                <option>003</option>
                <option>004</option>
                <option>005</option>
                <option>006</option>
                <option>007</option>
                <option>008</option>
                <option>009</option>
                <option>010</option>
                <option>011</option>
                <option>012</option>
                <option>013</option>
                <option>014</option>
                <option>015</option>
                <option>016</option>
                <option>017</option>
                <option>018</option>
              </select>
              <label for="floatingSelectGrid">Plih RT</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <select class="form-select" id="floatingSelectGrid" name="no_rw">
                <option selected></option>
                <option>001</option>
                <option>002</option>
                <option>003</option>
                <option>004</option>
                <option>005</option>
                <option>006</option>
                <option>007</option>
                <option>008</option>
                <option>009</option>
                <option>010</option>
              </select>
              <label for="floatingSelectGrid">Plih RW</label>
            </div>
          </div>
        </div>

        <div class="row g-2 mb-3">
          <div class="col-md">
            <div class="form-floating">
              <select class="form-select" id="floatingSelectGrid" name="pendidikan">
                <option selected></option>
                <option>TIDAK/BELUM SEKOLAH</option>
                <option>BELUM TAMAT SD/SEDERAJAT</option>
                <option>TAMAT SD/SEDERAJAT</option>
                <option>SLTP/SEDERAJAT</option>
                <option>SLTA/SEDERAJAT</option>
                <option>DIPLOMA I</option>
                <option>DIPLOMA II</option>
                <option>DIPLOMA III</option>
                <option>DIPLOMA IV/STRATA I</option>
                <option>DIPLOMA IV/STRATA II</option>
                <option>DIPLOMA IV/STRATA III</option>
              </select>
              <label for="floatingSelectGrid">Plih Pendidikan Terakhir</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nama_ayah" value="{{ old('nama_ayah') }}">
              <label for="floatingInputGrid">Nama Ayah</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nama_ibu" value="{{ old('nama_ibu') }}">
              <label for="floatingInputGrid">Nama Ibu</label>
            </div>
          </div>
        </div>
        
        <div class="row g-2 mb-3">
          <div class="col-md">
            <div class="form-floating">
              <select class="form-select" id="floatingSelectGrid" name="status_dalam_kk">
                <option selected></option>
                <option>KEPALA KELUARGA</option>
                <option>SUAMI</option>
                <option>ISTRI</option>
                <option>ANAK</option>
                <option>ORANG TUA</option>
                <option>MERTUA</option>
                <option>MENANTU</option>
                <option>CUCU</option>
                <option>KEPONAKAN</option>
              </select>
              <label for="floatingSelectGrid">Pilih Status Hubungan Dalam KK</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <input type="file" class="form-control" id="floatingInputGrid" placeholder="" name="file_ktp">
              <label for="floatingInputGrid">File KTP</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <input type="file" class="form-control" id="floatingInputGrid" placeholder="" name="file_kk">
              <label for="floatingInputGrid">File KK</label>
            </div>
          </div>
        </div>
     
        <div class="col-12 mt-3 text-end" id="div-tombol">
        <button id="tombol-pencarian"><i class="bi bi-person-plus-fill"></i> Add Penduduk</button>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>

<script>
  $('#tombol-pencarian').click(function (e) { 
    e.preventDefault();
    Swal.fire({
        title: 'Sedang Menambahkan Penduduk',
        html: 'Mohon Tunggu ...',
        timer: 1500,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
        },
      })
      $('#form_penduduk').submit()
  });
</script>

@endsection