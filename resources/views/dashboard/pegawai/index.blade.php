@extends('dashboard.layouts.template')

@section('content')

@if (Request::session()->has('pegawai_destroy'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Pegawai Berhasil Dihapus',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('pegawai_destroy'); ?>
@endif

<a href="{{ url('pegawai/create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Tambah Pegawai</a>


<div class="card">
  <h4 class="card-title" style="margin-left: 3rem;">Data Pegawai Desa Payungsari</h4>
  <div class="card-body">
    <table class="table" style="vertical-align: middle;">
      <thead>
        <th>No</th>
        <th>Photo</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Pendidikan</th>
        <th>Features</th>
      </thead>
      <tbody>
        @foreach ($pegawai as $p)
          
        <tr>
          <td>{{ $angka++ }}</td>
          <td><img src="{{ asset('assets/dashboard/img/user.png') }}" alt="" width="100"></td>
          <td>{{ $p->nama_pegawai }}</td>
          <td>{{ $p->jabatan }}</td>
          <td>{{ $p->pendidikan }}</td>
          <td>
            <div class="btn-group">
              <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                ...
              </button>
              <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="#" ><i class="bi bi-eye"></i> Detail</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('pegawai/'.$p->id.'/edit') }}" ><i class="bi bi-pencil"></i> Edit</a>
                </li>
                <li>
                    <form action="{{url('pegawai/'.$p->id)}}" method="POST">
                    @method('delete')
                    @csrf
                        <button class="dropdown-item" type="submit" onclick="return confirm('Hapus Pegawai')"><i class="bi bi-trash"></i> Hapus</button>
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

@endsection