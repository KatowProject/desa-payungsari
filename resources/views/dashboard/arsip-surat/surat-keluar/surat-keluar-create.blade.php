@extends('dashboard.layouts.template')


@section('content')

<style>

  
.form-label{
  font-weight: 500;
  padding-left: 3px;
  font-size: 14px;
  font-family: Arial;
}

.form-label span{
  color: red;
}

#nomor_urut{
  text-align: center;
  font-weight: 500;
  background-color: rgb(182, 182, 182);
}

.form-control{
  box-shadow: none;
  border-radius: 0; 
}

.form-select{
  box-shadow: none;
  border-radius: 0; 
}

.form-control:focus{
  box-shadow: none;
  border-radius: 0; 
}

.form-select:focus{
  box-shadow: none;
  border-radius: 0; 
}

.btn-submit{
  border-radius: 5px;
  padding: 10px 30px;
}

.btn-back{
  border-radius: 5px;
  padding: 10px 30px;
  margin-left: 10px;
  margin-top: 10px;
}


</style>

@if (Request::session()->has('surat_keluar_create'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Arsip Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('surat_keluar_create'); ?>
@endif


<div class="card">
  <div>
    <a href="{{ url('surat-keluar') }}" class="btn btn-danger btn-back">Batal</a>
  </div>
    <h2 class="card-title px-4">Form Surat Keluar</h2>
        <div class="card-body">
            <form action="{{ url('surat-keluar') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-12">
                  <div class="col-md-1">
                    <label for="nomor_urut" class="form-label">No Urut <span>*</span></label>
                    <input type="text" class="form-control" id="nomor_urut" name="nomor_urut" value="{{$nomor_urut}}" readonly>
                  </div>
                </div>
                <div class="col-md-12">
                    <label for="nomor_surat" class="form-label">No Surat <span>*</span></label>
                    <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" value="{{ old('nomor_surat') }}" autocomplete="off">
                </div>
                <div class="col-md-6">
                  <label for="tanggal_surat" class="form-label">Tanggal Surat <span>*</span></label>
                  <input type="email" class="form-control" id="tanggal_surat" name="tanggal_surat" value="{{ old('tanggal_surat') }}" autocomplete="off">
                </div>
                <div class="col-md-6">
                    <label for="tanggal_dikirim" class="form-label">Tanggal Dikirim <span>*</span></label>
                    <input type="text" class="form-control" id="tanggal_dikirim" name="tanggal_dikirim" value="{{ old('tanggal_diterima') }}" autocomplete="off">
                  </div>
                  <div class="col-12">
                    <label for="perihal_surat" class="form-label">Perihal Surat <span>*</span></label>
                    <input type="text" class="form-control" id="perihal_surat" name="perihal_surat" value="{{ old('perihal_surat') }}" autocomplete="off">
                  </div>
                  <div class="col-md-6">
                    <label for="tanggal_surat" class="form-label">Jenis Surat <span>*</span></label>
                    <select class="form-select" name="jenis_surat">
                      <option selected>Pilih Jenis Surat</option>
                      <option>Surat Biasa</option>
                      <option>Surat Undangan</option>
                      <option>Surat Pengantar</option>
                      <option>Surat Tugas</option>
                      <option>Berita Acara</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                      <label for="tanggal_dikirim" class="form-label">Sifat Surat <span>*</span></label>
                      <select class="form-select" name="sifat_surat">
                        <option selected>PIlih Sifat Surat</option>
                        <option>Biasa</option>
                        <option>Penting</option>
                        <option>Segera</option>
                      </select>
                    </div>
                  <div class="col-12">
                    <label for="tujuan_surat" class="form-label">Tujuan Surat <span>*</span></label>
                    <input type="text" class="form-control" id="tujuan_surat" name="tujuan_surat" value="{{ old('tujuan_surat') }}" autocomplete="off">
                  </div>
                  <div class="col-md-6">
                    <label for="formFile" class="form-label">File Surat <span>*</span></label>
                    <input class="form-control" type="file" id="file_surat" name="file_surat">
                  </div>
                  <div class="col-12 text-end">
                    <button class="btn btn-primary btn-submit"><i class="bi bi-file-earmark-plus"></i> Tambah Surat </button>
                  </div>        
               
              </form>
        </div>
</div>

<script>
  $('.btn-submit').click(function (e) { 
    e.preventDefault();
    let form = $(this).closest('form');
    Swal.fire({
    title: 'Tambahkan Arsip?',
    text: "Pastikan Data Sudah Benar!",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: 'blue',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Tambah'
    }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: 'Sedang Menyimpan Arsip',
        html: 'Mohon Tunggu ...',
        timer: 1500,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
        },
      });
        form.submit();
    }
  })
    });
  </script>
    
@endsection