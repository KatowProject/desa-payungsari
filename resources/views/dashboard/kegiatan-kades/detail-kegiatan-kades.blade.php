@extends('dashboard.layouts.template')


@section('content')


<style>
    .form-label {
        font-weight: 500;
        padding-left: 3px;
        font-size: 14px;
        font-family: Arial;
    }

    .form-label span {
        color: red;
    }

    judul {
        text-align: center;
        font-weight: 500;
        background-color: rgb(182, 182, 182);
    }

    .form-control {
        box-shadow: none;
        border-radius: 0;
    }

    .form-select {
        box-shadow: none;
        border-radius: 0;
    }

    .form-control:focus {
        box-shadow: none;
        border-radius: 0;
    }

    .form-select:focus {
        box-shadow: none;
        border-radius: 0;
    }

    .btn-submit {
        border-radius: 5px;
        padding: 10px 30px;
    }

    .btn-back {
        border-radius: 5px;
        padding: 10px 30px;
        margin-left: 10px;
        margin-top: 10px;
    }
</style>




<div class="card">
    <h2 class="card-title px-4">Kegiatan Kepala Desa</h2>
    <div class="card-body">
        <div class="col-md-12">
            <div class="col-md-3">
                <label for="judul" class="form-label">Judul<span>*</span></label>
                <input type="text" class="form-control" name="judul" value="{{ $kegiatan['judul'] }}" readonly>
            </div>
        </div>
        <br>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="isi" readonly>{{ $kegiatan['isi'] }}</textarea>
            <label for="floatingTextarea">Isi</label>
        </div>
        <div class="col-md-6">
            <label for="keterangan" class="form-label">Keterangan <span>*</span></label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" autocomplete="off" value="{{ $kegiatan['keterangan'] }}" readonly>
        </div>

        <div class="col-md-6">
            <label for="formFile" class="form-label">Foto Kegiatan <span>*</span></label>
            <!-- list of photos -->
            <div class="row">
                @foreach ($kegiatan['photos'] as $photo)
                <div class="col-3">
                    <img src="{{ asset('storage/' . $photo['photo_path']) }}" class="img-fluid" alt="...">
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-12 text-end">
            <button class="btn btn-primary" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
                Kembali
            </button>
        </div>
    </div>
</div>

@endsection