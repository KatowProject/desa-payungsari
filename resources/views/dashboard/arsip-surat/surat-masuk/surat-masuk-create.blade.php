@extends('dashboard.layouts.template')

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

@section('content')

<div class="card">
    <h2 class="card-title px-4">Form Surat Masuk</h2>
        <div class="card-body">
            <form action="{{ url('surat-masuk') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                  <input type="text" class="" id="nomor_urut" name="nomor_urut" required>
                  <label for="nomor_urut" class="">Nomor Urut</label>
                  
                </div>

                <div class="input-group">
                  <input type="text" id="tanggal_diterima" name="tanggal_diterima" required>
                  <label for="tanggal_diterima" class="">Tanggal Diterima</label>
                  
                </div>

                <div class="input-group">
                  <input type="text" class="" id="nomor_surat" name="nomor_surat" required>
                  <label for="nomor_surat" class="form-label">Nomor Surat</label>
                  
                </div>

                <div class="input-group">
                  <input type="text" class="" id="tanggal_surat" name="tanggal_surat" required>
                  <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                  
                </div>

                <div class="input-group">
                  <input type="text" class="" id="perihal_surat" name="perihal_surat" required>
                  <label for="perihal_surat" class="form-label">Perihal Surat</label>
                  
                </div>

                <div class="input-group">
                  <input type="text" class="" id="asal_surat" name="asal_surat" required>
                  <label for="asal_surat" class="form-label">Asal Surat</label>
                  
                </div>

                <div class="input-group">
                  <input type="text" class="" id="isi_ringkas" name="isi_ringkas" required>
                  <label for="isi_ringkas" class="form-label">Isi Ringkas</label>
                  
                </div>

                <div class="mb-3">
                  <label for="file_surat" class="form-label">File Surat</label>
                  <input class="" type="file" id="file_surat" name="file_surat">
                  <div class="form-text">Upload File Surat</div>
                </div>
                
               
                <button type="submit" class="btn btn-primary">Tambah Surat</button>
              </form>
        </div>
</div>
    
@endsection