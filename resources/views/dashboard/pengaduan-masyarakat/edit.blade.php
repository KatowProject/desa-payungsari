@extends('dashboard.layouts.template')

@section('content')
<div class="card">
    <h2 class="card-title px-4">
        Pengaduan Masrayakat
    </h2>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" aria-describedby="emailHelp" value="{{ $pengaduan->judul }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <input type="text" name="isi" class="form-control" required value="{{ $pengaduan->isi }}">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" required value="{{ $pengaduan->keterangan }}">
                    </div>
                    <div class="mb-3">
                        <label for="foto_pengaduan" class="form-label">Foto Pengaduan</label>
                        <input type="file" name="foto_pengaduan[]" class="form-control" multiple>
                    </div>

                    <input type="hidden" name="_method" value="PUT">

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection