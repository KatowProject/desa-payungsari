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

@if (Request::session()->has('surat_masuk_update'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Perubahan Berhasil Disimpan',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('surat_masuk_update'); ?>
@endif


<div class="card">
  <div>
    <a href="{{ url('surat-masuk') }}" class="btn btn-danger btn-back">Kembali</a>
  </div>
    <h2 class="card-title px-4">Form Edit Surat Masuk</h2>
        <div class="card-body">
            <form action="{{ url('surat-masuk/'.$data->id ) }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @method('put')
                @csrf
                <div class="col-md-12">
                  <div class="col-md-1">
                    <label for="nomor_urut" class="form-label">No Urut <span>*</span></label>
                    <input type="text" class="form-control" id="nomor_urut" name="nomor_urut" value="{{$data->nomor_urut}}" readonly>
                  </div>
                </div>
                <div class="col-md-12">
                    <label for="nomor_surat" class="form-label">No Surat <span>*</span></label>
                    <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" value="{{ old('nomor_surat', $data->nomor_surat) }}" autocomplete="off">
                </div>
                <div class="col-md-6">
                  <label for="tanggal_surat" class="form-label">Tanggal Surat <span>*</span></label>
                  <input type="email" class="form-control" id="tanggal_surat" name="tanggal_surat" value="{{ old('tanggal_surat', $data->tanggal_surat) }}" autocomplete="off">
                </div>
                <div class="col-md-6">
                    <label for="tanggal_diterima" class="form-label">Tanggal Diterima <span>*</span></label>
                    <input type="text" class="form-control" id="tanggal_diterima" name="tanggal_diterima" value="{{ old('tanggal_diterima', $data->tanggal_diterima) }}" autocomplete="off">
                  </div>
                  <div class="col-12">
                    <label for="perihal_surat" class="form-label">Perihal Surat <span>*</span></label>
                    <input type="text" class="form-control" id="perihal_surat" name="perihal_surat" value="{{ old('perihal_surat', $data->perihal_surat) }}" autocomplete="off">
                  </div>
                  <div class="col-md-6">
                    <label for="tanggal_surat" class="form-label">Jenis Surat <span>*</span></label>
                    <select class="form-select" name="jenis_surat">
                    @if ($data->jenis_surat)
                    <option selected>{{ $data->jenis_surat }}</option>
                    @endif
                      <option>Pilih Jenis Surat</option>
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
                        @if ($data->sifat_surat)
                        <option selected>{{ $data->sifat_surat }}</option>
                        @endif
                        <option>Pilih Sifat Surat</option>
                        <option>Biasa</option>
                        <option>Penting</option>
                        <option>Segera</option>
                      </select>
                    </div>
                  <div class="col-12">
                    <label for="asal_surat" class="form-label">Asal Surat <span>*</span></label>
                    <input type="text" class="form-control" id="asal_surat" name="asal_surat" value="{{ old('asal_surat', $data->asal_surat) }}" autocomplete="off">
                  </div>
                  <div class="col-md-6">
                    <label for="formFile" class="form-label">File Surat <span>*</span></label>
                    <input class="form-control" type="file" id="file_surat" name="file_surat">
                  </div>
                  <div class="col-12 text-end">
                    <button class="btn btn-primary btn-submit"><i class="bi bi-file-earmark-plus"></i> Simpan Perubahan </button>
                  </div>        
               
              </form>
        </div>
</div>

<script>
  $('.btn-submit').click(function (e) { 
    e.preventDefault();
    let form = $(this).closest('form');
    Swal.fire({
    title: 'Edit Arsip?',
    text: "Pastikan Data Sudah Benar!",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: 'blue',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Simpan'
    }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: 'Sedang Menyimpan Perubahan',
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