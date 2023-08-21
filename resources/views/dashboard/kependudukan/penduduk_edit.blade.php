@extends('dashboard.layouts.template')

@section('content')

@if (Request::session()->has('penduduk_update'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Perubahan Berhasil Di Simpan',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('penduduk_update'); ?>
@endif

<div class="card">
  <div class="row mt-4 mb-2">
    <div class="col text-start"><a href="{{ url('penduduk') }}" id="tombol-kembali"><i class="bi bi-chevron-double-left"></i> Kembali</a></div>
    <div class="col text-end" style="margin-right: 20px;">
    <form action="{{ url('penduduk/'.$penduduk->id) }}" method="POST">
    @method('delete')
    @csrf
      <button class="btn btn-danger delete-confirm"><i class="bi bi-trash-fill"></i></button>
    </form>
    </div>
  </div>
  <hr class="garis">
  <div class="card-body">
    <form action="{{ url('penduduk/'.$penduduk->id) }}" method="POST" enctype="multipart/form-data" class="myform" id="form_penduduk">
      @method('put')
      @csrf
      <div class="row">
        <div class="col-2">
          <input type="file" name="photo" style="position: absolute; opacity:0; width:150px; height:210px; cursor:pointer;">
          <img src="{{ asset('assets/dashboard/img/user.png') }}" alt="" width="150px" height="100%" border="1">
      
        </div>
        <div class="col-10">
          <div class="row g-2 mb-3">
            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nik" value="{{ old('nik',$penduduk->nik) }}">
                <label for="floatingInputGrid">Nomor Induk Kependudukan (NIK)</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nomor_kk" value="{{ old('nomor_kk',$penduduk->nomor_kk) }}">
                <label for="floatingInputGrid">Nomor Kartu Keluarga</label>
              </div>
            </div>
          </div>
          <div class="row g-2 mb-3">
            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nama_lengkap" value="{{ old('nama_lengkap',$penduduk->nama_lengkap) }}">
                <label for="floatingInputGrid">Nama Lengkap</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" name="jenis_kelamin">
                  @if ($penduduk->jenis_kelamin)
                  <option selected>{{ $penduduk->jenis_kelamin }}</option>
                  @endif
                  <option></option>
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
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="tempat_lahir" value="{{ old('tempat_lahir',$penduduk->tempat_lahir) }}">
                <label for="floatingInputGrid">Tempat Lahir</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" name="tanggal">
                @if ($tanggal)
                <option selected>{{ $tanggal }}</option>
                @endif
                <option></option>
                @for ($i=1;$i<=31;$i++)
                <option>{{ $i }}</option>
                @endfor
                </select>
                <label for="floatingSelectGrid">Tanggal Lahir</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" id="bulan_lahir" name="bulan">
                  @if ($bulan)
                  <option value="{{ $bulan }}">{{ $nama_bulan }}</option>
                  @endif
                  <option></option>
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
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="tahun" value="{{ old('tahun',$tahun) }}">
                <label for="floatingInputGrid">Tahun</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-2 mb-2">
          <div class="col-md">
            <div class="form-floating">
              <select class="form-select" id="floatingSelectGrid" name="agama">
                @if ($penduduk->agama)
                <option selected>{{ $penduduk->agama }}</option>
                @endif
                <option></option>
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
                @if ($penduduk->status_perkawinan)
                <option selected>{{ $penduduk->status_perkawinan }}</option>
                @endif
                <option></option>
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
                @if ($penduduk->pekerjaan)
                <option selected>{{ $penduduk->pekerjaan }}</option>
                @endif
                <option></option>
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
                @if ($penduduk->dusun)
                <option selected>{{ $penduduk->dusun }}</option>
                @endif
                <option></option>
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
                @if ($penduduk->no_rt)
                <option selected>{{ $penduduk->no_rt }}</option>
                @endif
                <option></option>
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
                @if ($penduduk->no_rw)
                <option selected>{{ $penduduk->no_rw }}</option>
                @endif
                <option></option>
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
                @if ($penduduk->pendidikan)
                <option selected>{{ $penduduk->pendidikan }}</option>
                @endif
                <option></option>
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
              <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nama_ayah" value="{{ old('nama_ayah',$penduduk->nama_ayah) }}">
              <label for="floatingInputGrid">Nama Ayah</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInputGrid" placeholder="" name="nama_ibu" value="{{ old('nama_ibu',$penduduk->nama_ibu) }}">
              <label for="floatingInputGrid">Nama Ibu</label>
            </div>
          </div>
        </div>
        
        <div class="row g-2 mb-3">
          <div class="col-md">
            <div class="form-floating">
              <select class="form-select" id="floatingSelectGrid" name="status_dalam_kk">
                @if ($penduduk->status_dalam_kk)
                <option selected>{{ $penduduk->status_dalam_kk }}</option>
                @endif
                <option></option>
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
        <button id="tombol-pencarian"><i class="bi bi-sd-card"></i> Simpan Perubahan</button>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>
<script>
  $('.delete-confirm').click(function (e) { 
    e.preventDefault();
    let form = $(this).closest('form');
    Swal.fire({
    title: 'Hapus Penduduk?',
    text: "Penduduk akan di hapus permanen!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus Penduduk!'
    }).then((result) => {
    if (result.isConfirmed) {
        form.submit();
    }
  })
    });
  </script>
<script>
  $('#tombol-pencarian').click(function (e) { 
    e.preventDefault();
    Swal.fire({
        title: 'Sedang Menyimpan Perubahan',
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