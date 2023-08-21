@extends('dashboard.layouts.template')

@section('content')

<div class="card">
    <h2 class="card-title px-4">Form Surat Masuk</h2>
        <div class="card-body">
            <form action="{{ url('surat-masuk') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="nomor_urut" class="form-label">Nomor Urut</label>
                  <input type="text" class="form-control" id="nomor_urut" name="nomor_urut">
                  <div class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                  <label for="tanggal_diterima" class="form-label">Tanggal Diterima</label>
                  <input type="text" class="form-control" id="tanggal_diterima" name="tanggal_diterima">
                  <div class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                  <label for="nomor_surat" class="form-label">Nomor Surat</label>
                  <input type="text" class="form-control" id="nomor_surat" name="nomor_surat">
                  <div class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                  <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                  <input type="text" class="form-control" id="tanggal_surat" name="tanggal_surat">
                  <div class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                  <label for="perihal_surat" class="form-label">Perihal Surat</label>
                  <input type="text" class="form-control" id="perihal_surat" name="perihal_surat">
                  <div class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                  <label for="asal_surat" class="form-label">Asal Surat</label>
                  <input type="text" class="form-control" id="asal_surat" name="asal_surat">
                  <div class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                  <label for="isi_ringkas" class="form-label">Isi Ringkas</label>
                  <input type="text" class="form-control" id="isi_ringkas" name="isi_ringkas">
                  <div class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                  <label for="file_surat" class="form-label">File Surat</label>
                  <input class="form-control" type="file" id="file_surat" name="file_surat">
                  <div class="form-text">Upload File Surat</div>
                </div>
                
               
                <button type="submit" class="btn btn-primary">Tambah Surat</button>
              </form>
        </div>
</div>
    
@endsection