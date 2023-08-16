@extends('blog.layouts.template')

@section('content')

<div class="container">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Lembaga Desa</li>
    </ol>
  </nav>
  <h4>Lembaga Desa Payungsari</h4>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nama Lembaga</th>
          <th scope="col">Nama Ketua</th>
          <th scope="col">Alamat Kantor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><h6>Badan Permusyawaratan Desa</h6> <span class="badge text-bg-secondary">BPD</span></td>
          <td>Nama Ketua BPD</td>
          <td>Jalan Raya Sungaibuntu Desa Payungsari,Kecamatan Pedes Kabupaten Karawang</td>
        </tr>
        <tr>
          <td><h6>Badan Usaha Milik Desa</h6> <span class="badge text-bg-secondary">BUMDES</span></td>
          <td>Nama Ketua BUMDES</td>
          <td>Jalan Raya Sungaibuntu Desa Payungsari,Kecamatan Pedes Kabupaten Karawang</td>
        </tr>
        <tr>
          <td><h6>Karang Taruna Desa Payungsari</h6> <span class="badge text-bg-secondary">KTD</span></td>
          <td>Nama Ketua Karang Taruna</td>
          <td>Jalan Raya Sungaibuntu Desa Payungsari,Kecamatan Pedes Kabupaten Karawang</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection