@extends('dashboard.layouts.template')

@section('content')

<a href="{{ url('penduduk') }}" class="btn btn-danger mb-3"><i class="bi bi-chevron-double-left"></i> Kembali</a>

<div class="card">
  <h4 class="card-title" style="margin-left: 3rem;">Hasil Pencarian : </h4>
  <div class="card-body">
    <table class="table" id="mytable" style="vertical-align: middle;">
      <thead>
        <th>No</th>
        <th>Photo</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Tempat, Tgl Lahir</th>
        <th>Dusun</th>
        <th>Features</th>
      </thead>
      <tbody>
        @foreach ($penduduk as $p)
          
        <tr>
          <td>{{ $angka++ }}</td>
          <td><img src="{{ asset('assets/dashboard/img/user.png') }}" alt="" width="100"></td>
          <td>{{ $p->nik }}</td>
          <td>{{ $p->nama_lengkap }}</td>
          <td>{{ $p->tempat_lahir.','.$p->tanggal_lahir }}</td>
          <td>{{ $p->dusun }}</td>
          <td>
            <div class="btn-group">
              <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </button>
              <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="{{ url('penduduk/'.$p->id.'/edit') }}" target="_blank" ><i class="bi bi-eye"></i> Lihat</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{url('penduduk/'.$p->id)}}" ><i class="bi bi-file-earmark-diff"></i> Buat Surat</a>
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

@endsection