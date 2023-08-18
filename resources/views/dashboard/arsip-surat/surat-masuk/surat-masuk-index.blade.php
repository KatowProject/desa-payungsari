@extends('dashboard.layouts.template')

@section('content')

@if (Request::session()->has('surat_masuk_destroy'))
<script>
Swal.fire(
  'Berhasil!',
  'Arsip Berhasil Dihapus',
  'success'
)
</script>
<?php Request::session()->forget('surat_masuk_destroy'); ?>
@endif

<a href="{{ url('surat-masuk/create') }}" class="btn btn-danger mb-3"><i class="bi bi-file-earmark-plus"></i> Tambah Surat Masuk</a>

<div class="card" >
    <h2 class="card-title px-4">
        arsip Surat masuk
    </h2>
    <div class="card-body">
      <div class="table-responsiv">
        <table class="table" style="vertical-align: middle ">
            <thead>
                <th>Nomor Urut</th>
                <th>Tanggal Diterima</th>
                <th>Nomor Surat</th>
                <th>Tanggal Surat</th>
                <th>Perihal Surat</th>
                <th>Asal Surat</th>
                <th>File Surat</th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nomor_urut }}</td>
                    <td>{{ $item->tanggal_diterima }}</td>
                    <td>{{ $item->nomor_surat }}</td>
                    <td>{{ $item->tanggal_surat }}</td>
                    <td>{{ $item->nomor_surat }}</td>
                    <td>{{ $item->perihal_surat }}</td>
                    <td>{{ $item->asal_surat }}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              More
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                  <a class="dropdown-item" href="#" ><i class="bi bi-eye"></i> Lihat</a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href="{{ url('surat-masuk/'.$item->id.'/edit') }}" ><i class="bi bi-pencil"></i> Edit</a>
                              </li>
                              <li>
                                  <form action="{{url('surat-masuk/'.$item->id)}}" method="POST">
                                  @method('delete')
                                  @csrf
                                      <button class="dropdown-item delete-confirm"><i class="bi bi-trash"></i> Hapus</button>
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

  <script>
    $('.delete-confirm').click(function (e) { 
      e.preventDefault();
      let form = $(this).closest('form');
      Swal.fire({
      title: 'Hapus Surat Masuk?',
      text: "Arsip akan di hapus permanen!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: 'red',
      cancelButtonColor: 'grey',
      confirmButtonText: 'Hapus Arsip!'
      }).then((result) => {
      if (result.isConfirmed) {
          form.submit();
      }
    })
      });
    </script>
    
@endsection