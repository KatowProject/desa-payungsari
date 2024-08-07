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





<a href="{{ url('create-kegiatan-kades') }}" class="btn btn-danger mb-3"><i class="bi bi-file-earmark-plus"></i> Tambah Surat Masuk</a>

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session::get('success') }}
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger" role="alert">
  {{ Session::get('error') }}
</div>
@endif

<div class="card">
  <h2 class="card-title px-4">
    Arsip Surat masuk
  </h2>
  <div class="card-body">
    <div class="table-responsive-md" style="overflow-y: visible !important;">
      <table class="table" style="vertical-align: middle ">
        <thead>
          <th>NO</th>
          <th>Judul</th>
          <th>Isi</th>
          <th>Keterangan</th>
          <th>Foto Kegiatan</th>
          <th>Action</th>
        </thead>
        <tbody>
          @foreach ($kegiatan as $i => $data )

          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->judul }}</td>
            <td>{{ $data->isi }}</td>
            <td>{{ $data->keterangan }}</td>
            <td>
              @foreach ($data->photos as $photo)
              <img src="{{ asset('storage/' . $photo->photo_path) }}" alt="Foto Kegiatan" style="width: 100px; height: auto;">
              @endforeach
            </td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="{{ asset('detail-kegiatan-kades/' .$data->id)}}"><i class="bi bi-eye"></i> Detail</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ asset('edit-kegiatan-kades/' .$data->id)}}"><i class="bi bi-pencil"></i> Edit</a>
                  </li>
                  <li>
                    <form action="{{ asset('kades/' . $data->id ) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button class="dropdown-item delete-confirm" type="submit"><i class="bi bi-trash"></i> Hapus</button>
                    </form>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>




@endsection