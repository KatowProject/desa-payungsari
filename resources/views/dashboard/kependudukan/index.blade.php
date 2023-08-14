@extends('dashboard.layouts.template')

@section('content')

@if (Request::session()->has('penduduk_destroy'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Penduduk Berhasil Dihapus',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('penduduk_destroy'); ?>
@endif

<a href="{{ url('penduduk/create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Tambah Penduduk</a>

{{-- <div class="card" style="position: relative z-index: 2;">
  <div class="card-body" style="position: relative">
    <div class="table-responsive mt-3" style="position: relative"> --}}
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
          <table class="table" id="mytable" style="position: relative">
            <thead>
              <th>#</th>
              <th>KK</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>RT</th>
              <th>RW</th>
              <th>Action</th>
            </thead>
            <tbody>
            @foreach ($penduduk as $p)
              
            <tr>
              <td>{{ $p->id }}</td>
              <td>{{ $p->nomor_kk }}</td>
              <td>{{ $p->nik }}</td>
              <td>{{ $p->nama_lengkap }}</td>
              <td>{{ $p->tempat_lahir }}</td>
              <td>{{ $p->tanggal_lahir }}</td>
              <td>{{ $p->jenis_kelamin }}</td>
              <td>{{ $p->alamat }}</td>
              <td>{{ $p->no_rt }}</td>
              <td>{{ $p->no_rw }}</td>
              <td >
                <div class="btn-group"  >
                  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >
                    Action
                  </button>
                  <ul class="dropdown-menu "  >
                    <li >
                        <a class="dropdown-item" href="{{url('penduduk/'.$p->id)}}" ><i class="bi bi-file-earmark-diff"></i> Buat Surat</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{url('penduduk/'.$p->id)}}" ><i class="bi bi-eye"></i> Detail</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{url('penduduk/'.$p->id.'/edit')}}" ><i class="bi bi-pencil"></i> Edit</a>
                    </li>
                    <li>
                        <form action="{{url('penduduk/'.$p->id)}}" method="POST">
                        @method('delete')
                        @csrf
                            <button class="dropdown-item" type="submit" onclick="return confirm('Hapus Penduduk?')"><i class="bi bi-trash"></i> Hapus</button>
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
  {{-- </div>
  </div>
</div> --}}

@endsection