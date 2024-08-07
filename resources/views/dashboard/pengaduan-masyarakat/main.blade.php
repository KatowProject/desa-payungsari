@extends('dashboard.layouts.template')

@section('content')

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

<a href="{{ url('pengaduan-masyarakat/create') }}" class="btn btn-danger mb-3"><i class="bi bi-file-earmark-plus"></i> Buat Pengaduan</a>

<div class="card">
    <h2 class="card-title px-4">
        Pengaduan Masyarakat
    </h2>
    <div class="card-body">
        <div class="table-responsive-md" style="overflow-y: visible !important;">
            <table class="table" style="vertical-align: middle ">
                <thead>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Keterangan</th>
                    <th>Foto Pengaduan</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($pengaduan as $i => $data )

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->isi }}</td>
                        <td>{{ $data->keterangan }}</td>
                        <td>
                            @foreach (json_decode($data->foto_pengaduan) as $photo)
                            <img src="{{ asset('storage/' . $photo) }}" alt="Foto Kegiatan" style="width: 100px; height: auto;">
                            @endforeach
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    More
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ url('pengaduan-masyarakat/' . $data->id . '/detail') }}"><i class="bi bi-eye"></i> Detail</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('pengaduan-masyarakat/' . $data->id . '/edit') }}"><i class="bi bi-pencil"></i> Edit</a>
                                    </li>
                                    <li>
                                        <form action="{{ url('pengaduan-masyarakat/' . $data->id ) }}" method="POST">
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