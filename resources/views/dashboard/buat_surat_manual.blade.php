@extends('dashboard.layouts.template')

@section('content')
{{-- Pilihan Jenis Surat --}}
<div class="card">
  <div class="card-body">
    <select class="form-select mt-4" aria-label="Default select example" id="pilihansurat">
      <option value="0" selected>Pilih Jenis Surat</option>
      <option value="1">Surat Keterangan Desa Domisili</option>
      <option value="2">Surat Keterangan Usaha/Dagang</option>
      <option value="3">Surat Keterangan Tidak Mampu</option>
    </select>
  </div>
</div>

{{-- Surat Keterangan Domisili --}}
<div class="card" id="formskdd" style="display: none;">
  <div class="card-body">
    <h4 class="card-title">Form Surat Keterangan Desa Domisili</h4>
    <form action="{{ url('buatsurat/skdd') }}" method="post" target="_blank">
      @csrf
      <div class="row mb-2">
        <label for="nama" class="col-sm-2 col-form-label col-form-label-sm">Nomor Surat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="nomor_surat">
        </div>
      </div>
      <div class="row mb-2">
        <label for="nik" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="nama">
        </div>
      </div>
      <div class="row mb-2">
        <label for="nama" class="col-sm-2 col-form-label col-form-label-sm">NIK</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="nik">
        </div>
      </div>
      <div class="row mb-2">
        <label for="pekerjaan" class="col-sm-2 col-form-label col-form-label-sm">Tempat,Tgl Lahir</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="ttl">
        </div>
      </div>
      <div class="row mb-2">
        <label for="pekerjaan" class="col-sm-2 col-form-label col-form-label-sm">Jenis Kelamin</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="jenis_kelamin">
        </div>
      </div>
      <div class="row mb-2">
        <label for="pekerjaan" class="col-sm-2 col-form-label col-form-label-sm">Pekerjaan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="pekerjaan">
        </div>
      </div>
      <div class="row mb-2">
        <label for="pekerjaan" class="col-sm-2 col-form-label col-form-label-sm">Agama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="agama">
        </div>
      </div>
      <div class="row mb-2">
        <label for="pekerjaan" class="col-sm-2 col-form-label col-form-label-sm">Status Perkawinan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="status_perkawinan">
        </div>
      </div>
      <div class="row mb-2">
        <label for="alamat" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="alamat">
        </div>
      </div>
      <div class="row mb-2">
        <label for="alamat" class="col-sm-2 col-form-label col-form-label-sm">Keperluan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="keperluan">
        </div>
      </div>
      
      <div class="row mb-2">
        <label for="alamat" class="col-sm-2 col-form-label col-form-label-sm">Atas Nama Kepala Desa</label>
        <div class="col-sm-10">
          <input type="checkbox" name="an_kades">
        </div>
      </div>
      
      <div class="row mb-2">
        <label for="alamat" class="col-sm-2 col-form-label col-form-label-sm">Tanggal TTD</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" name="tanggal_ttd">
        </div>
      </div>
      <div class="row mb-2">
        <label for="alamat" class="col-sm-2 col-form-label col-form-label-sm">Penandatangan</label>
        <div class="col-sm-10">
          <select class="form-select" aria-label="Default select example" name="penandatangan">
            <option selected>Pilih Penandatangan</option>
            @foreach ($pegawai as $pg)
            <option>{{ $pg->nama_pegawai.' - '.$pg->jabatan }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-outline-primary mt-2" >Buat Surat</button>
    </form>
  </div>
</div>

{{-- Surat Keterangan usaha --}}
<div class="card" id="formsku" style="display: none;">
  <div class="card-body">
    <h4 class="card-title">Form Surat Keterangan Usaha/Dagang</h4>
    <form action="{{ url('buatsurat/sku') }}" method="post" target="_blank">
      @csrf
      <div class="row mb-2">
        <label for="nama" class="col-sm-2 col-form-label col-form-label-sm">Nomor Surat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="nomor_surat">
        </div>
      </div>
      <div class="row mb-2">
        <label for="nama" class="col-sm-2 col-form-label col-form-label-sm">NIK</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="nik">
        </div>
      </div>
      <div class="row mb-2">
        <label for="nik" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="nama">
        </div>
      </div>
      <div class="row mb-2">
        <label for="pekerjaan" class="col-sm-2 col-form-label col-form-label-sm">Tempat,Tgl Lahir</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="ttl">
        </div>
      </div>
      <div class="row mb-2">
        <label for="pekerjaan" class="col-sm-2 col-form-label col-form-label-sm">Jenis Kelamin</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="jenis_kelamin">
        </div>
      </div>
      <div class="row mb-2">
        <label for="pekerjaan" class="col-sm-2 col-form-label col-form-label-sm">Status Perkawinan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="status_perkawinan">
        </div>
      </div>
      <div class="row mb-2">
        <label for="alamat" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="alamat">
        </div>
      </div>
      <div class="row mb-2">
        <label for="nama_usaha" class="col-sm-2 col-form-label col-form-label-sm">Nama Perusahaan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama_usaha" placeholder="" name="nama_usaha">
        </div>
      </div>
      <div class="row mb-2">
        <label for="jenis_usaha" class="col-sm-2 col-form-label col-form-label-sm">Jenis Usaha</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="jenis_usaha" placeholder="" name="jenis_usaha">
        </div>
      </div>
      <div class="row mb-2">
        <label for="jenis_usaha" class="col-sm-2 col-form-label col-form-label-sm">Alamat Usaha</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="jenis_usaha" placeholder="" name="alamat_usaha">
        </div>
      </div>
      <div class="row mb-2">
        <label for="mulai_usaha" class="col-sm-2 col-form-label col-form-label-sm">Mulai Usaha</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="mulai_usaha" placeholder="" name="mulai_usaha">
        </div>
      </div>
      <button type="submit" class="btn btn-outline-primary mt-2" >Buat Surat</button>
    </form>
  </div>
</div>

{{-- Surat Percobaan --}}
<div class="card" id="formsktm" style="display: none;">
  <div class="card-body">
    <h4 class="card-title">Form Surat Keterangan Tidak Mampu</h4>
    <form action="{{ url('buatsurat/coba') }}" method="post" target="_blank">
      @csrf
      <div class="row mb-2">
        <label for="nama" class="col-sm-2 col-form-label col-form-label-sm">Nomor Surat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="nomor_surat">
        </div>
      </div>
      <div class="row mb-2">
        <label for="nama" class="col-sm-2 col-form-label col-form-label-sm">NIK</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="nik">
        </div>
      </div>
      <div class="row mb-2">
        <label for="nik" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="nama">
        </div>
      </div>
      <div class="row mb-2">
        <label for="pekerjaan" class="col-sm-2 col-form-label col-form-label-sm">Tempat,Tgl Lahir</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="ttl">
        </div>
      </div>
      <div class="row mb-2">
        <label for="pekerjaan" class="col-sm-2 col-form-label col-form-label-sm">Jenis Kelamin</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="jenis_kelamin">
        </div>
      </div>
      <div class="row mb-2">
        <label for="pekerjaan" class="col-sm-2 col-form-label col-form-label-sm">Status Perkawinan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="status_perkawinan">
        </div>
      </div>
      <div class="row mb-2">
        <label for="alamat" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="" name="alamat">
        </div>
      </div>
      <div class="row mb-2">
        <label for="nama_usaha" class="col-sm-2 col-form-label col-form-label-sm">Nama Perusahaan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama_usaha" placeholder="" name="nama_usaha">
        </div>
      </div>
      <div class="row mb-2">
        <label for="jenis_usaha" class="col-sm-2 col-form-label col-form-label-sm">Jenis Usaha</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="jenis_usaha" placeholder="" name="jenis_usaha">
        </div>
      </div>
      <div class="row mb-2">
        <label for="jenis_usaha" class="col-sm-2 col-form-label col-form-label-sm">Alamat Usaha</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="jenis_usaha" placeholder="" name="alamat_usaha">
        </div>
      </div>
      <div class="row mb-2">
        <label for="mulai_usaha" class="col-sm-2 col-form-label col-form-label-sm">Mulai Usaha</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="mulai_usaha" placeholder="" name="mulai_usaha">
        </div>
      </div>
      <button type="submit" class="btn btn-outline-primary mt-2" >Buat Surat</button>
    </form>
  </div>
</div>

{{-- Script Pembuatan Surat --}}
<script>
  $(document).ready(() => {
    $('#pilihansurat').on('change', function(){
    const selected = $('#pilihansurat').val();

    if(selected == '0'){
      $('#formskdd').hide()
      $('#formsku').hide()
      $('#formsktm').hide()
    }

  if(selected == '1'){
        Swal.fire({
        title: 'Sedang Menyiapkan Form',
        html: 'Mohon Tunggu ...',
        timer: 1000,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
        },
      }).then((result) => {
        $('#formsku').hide()
        $('#formsktm').hide()
        $('#formskdd').show()
      })
      }

  if(selected == '2'){
        Swal.fire({
        title: 'Sedang Menyiapkan Form',
        html: 'Mohon Tunggu ...',
        timer: 1000,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
        },
      }).then((result) => {
        $('#formskdd').hide()
        $('#formsktm').hide()
        $('#formsku').show()
      })
      }

  if(selected == '3'){
        Swal.fire({
        title: 'Sedang Menyiapkan Form',
        html: 'Mohon Tunggu ...',
        timer: 1000,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
        },
      }).then((result) => {
        $('#formskdd').hide()
        $('#formsku').hide()
        $('#formsktm').show()
      })
      }

    })
	})
</script>

@endsection
