@extends('dashboard.layouts.template')


@section('content')

@if (Request::session()->has('post_destroy'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Postingan Berhasil Dihapus',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('post_destroy'); ?>
@endif

<div class="row">
  <div class="card p-0">
    <div class="col-md-12 pt-3 text-end">
      <a href="{{ url('post/create') }}" class="btn btn-primary mx-3"><i class="bi bi-plus-square-dotted"></i> Tambah Postingan</a>
    </div>
    <div class="table-responsive px-2 py-2">
      <table class="table" style="vertical-align: middle">
    <thead style="text-align: center">
      <th>#</th>
      <th>Gambar Postingan</th>
      <th>Judul postingan</th>
      <th>isi Ringkas</th>
      <th>More</th>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
          <td>{{ $angka++ }}</td>
          <td><img src="{{ asset('storage/'.$post->image) }}" alt="" width="200"></td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->excerpt }}</td>
          <td>
            <div class="btn-group">
              <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              More
              </button>
              <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{ url('edit/'.$post->slug) }}" ><i class="bi bi-pencil"></i> Edit</a>
              </li>
              <li>
                <form action="{{ url('post/'.$post->id) }}" method="POST">
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
  <div class="col-12 justify-content-center">
    {{ $posts->links() }}
  </div>
</div>

</div>
</div>
@endsection