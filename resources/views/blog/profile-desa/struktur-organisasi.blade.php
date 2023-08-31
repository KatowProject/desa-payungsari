@extends('blog.layouts.template')

@section('content')

<div class="container">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Struktur Perangkat Desa</li>
    </ol>
  </nav>
  <div class="card-body pt-3">
    <!-- Bordered Tabs -->
    <ul class="nav nav-tabs nav-tabs-bordered nav-justified">

      <li class="nav-item">
        <button class="nav-link {{ Request::is('struktur-pemerintah-desa')? 'active' : '' }}" data-bs-toggle="tab" data-bs-target="#struktur_pemdes">Struktur Pemerintah</button>
      </li>

      <li class="nav-item">
        <button class="nav-link {{ Request::is('perangkat-desa')? 'active' : '' }}" data-bs-toggle="tab" data-bs-target="#perangkat_desa">Perangkat Desa</button>
      </li>

    </ul>
    <div class="tab-content py-2 px-3">

      <div class="tab-pane {{ Request::is('struktur-pemerintah-desa')? 'active' : '' }}" id="struktur_pemdes">
        <h5>Struktur Pemerintah Desa Payungsari</h5>
        <p>Berdasarkan Peraturan Bupati Karawang Nomor 53 Tahun 2015 Tentang Perangkat Desa,
          Pasal 1 Pemerintah Desa adalah Kepala Desa dibantu perangkat Desa sebagai unsur penyelenggara Pemerintahan Desa. 
          Pasal 2 Pemerintah Desa adalah penyelenggara Pemerintahan Desa. 
          Pasal 3 Pemerintah Desa sebagaimana dimaksud dalam Pasal 2 adalah Kepala Desa dan yang dibantu oleh Perangkat Desa. 
          Pasal 4 Perangkat Desa sebagaimana dimaksud dalam Pasal 3 berkedudukan sebagai unsur pembantu Kepala Desa
          dalam melaksanakan tugas dan wewenangnya dan Pasal 9 Perangkat Desa terdiri atas Sekretariat Desa, Pelaksana Teknis 
          dan Pelaksana Kewilayahan.
        </p>
        <div class="img-struktur-desa">
          <img src="{{ asset('assets/img/struktur-pemdes.png') }}" alt="" class="img-fluid">
        </div>
        <div class="mt-4">
          <h4>Tugas Pokok dan Fungsi</h4>
          <h5>Kepala Desa</h5>
          <p>Kepala Desa adalah pemimpin penyelenggaraan
            pemerintahan Desa yang dipilih langsung oleh
            Penduduk Desa dari calon yang memenuhi syarat yang
            ditetapkan dengan keputusan Bupati.</p>
          <h5>Badan Permusyawaratan Desa</h5>
          <p>Berdasarkan Peraturan Menteri Dalam Negeri No.110/2016 Tugas Badan Permusyawaratan Desa (BPD) mempunyai fungsi, 
            membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa, 
            menampung dan menyalurkan aspirasi masyarakat Desa, dan melakukan pengawasan kinerja Kepala Desa.</p>
          <h5>Sekretaris Desa</h5>
          <p>bertugas membantu Kepala Desa dalam
            menyelenggarakan administrasi pemerintahan desa dan
            melaksanakan tugas lain sesuai peraturan perundangundangan yang berlaku.</p>
          <h5>Kepala Urusan Tata Usaha Umum</h5>
          <p>bertugas membantu Sekretaris
            Desa dalam melaksanakan tugas penyelenggaraan
            administrasi Pemerintahan Desa, memberikan pelayanan
            administratif umum dan kepegawaian kepada Kepala
            Desa serta melaksanakan tugas lain sesuai peraturan
            perundang-undangan yang berlaku. </p>
          <h5>Kepala Urusan Keuangan</h5>
          <p>bertugas membantu Sekretaris
            Desa dalam melaksanakan tugas penyelenggaraan
            administrasi pemerintahan desa dan memberikan
            pelayanan administratif keuangan kepada Kepala Desa
            serta melaksanakan tugas lain sesuai peraturan
            perundang-undangan yang berlaku. </p>
          <h5>Kepala Urusan Perencanaan</h5>
          <p> bertugas membantu Sekretaris Desa dalam urusan pelayanan administrasi pendukung pelaksanaan tugas-tugas pemerintahan.</p>
          <h5>Kepala Seksi Pemerintahan</h5>
          <p>bertugas membantu Sekretaris
            Desa dalam melaksanakan tugas penyelenggaraan
            administrasi pemerintahan desa dan memberikan
            pelayanan administratif keuangan kepada Kepala Desa
            serta melaksanakan tugas lain sesuai peraturan
            perundang-undangan yang berlaku. </p>
          <h5>Kepala Seksi Kesejahteraan</h5>
          <p>bertugas membantu Kepala Desa dalam melaksanakan tugas bidang pembangunan dan pemberdayaan masyarakat desa.</p>
          <h5>Kepala Seksi Pelayanan</h5>
          <p>bertugas membantu Kepala Desa dalam pelaksanaan tugas operasional di bidang penguatan partisipasi dan perberdayaan sosial budaya masyarakat.</p>
          <h5>Kepala Dusun</h5>
          <p>bertugas membantu Kepala Desa dalam
            melaksanakan tugas-tugas operasional pemerintahan
            desa dalam wilayah dusun serta melaksanakan tugas lain
            sesuai ketentuan peraturan perundang-undangan yang
            berlaku. </p>
        </div>
      </div>

      <div class="tab-pane {{ Request::is('perangkat-desa')? 'active' : '' }} pt-3" id="perangkat_desa">

        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" style="vertical-align: middle;" id="mytable">
                <thead>
                <th>Photo</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Pendidikan</th>
              </thead>
              <tbody>
                @foreach ($pegawai as $p)
                  
                <tr>
                  <td><img src="{{ asset('storage/'.$p->photo) }}" alt="" width="100"></td>
                  <td>{{ $p->nama_pegawai }}</td>
                  <td>{{ $p->jabatan }}</td>
                  <td>{{ $p->pendidikan }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          </div>
        </div>

      </div>
      <div class="text-center my-3">
        <a href="{{ url('/') }}"> Kembali Ke Halaman Utama</a>
      </div>
    </div><!-- End Bordered Tabs -->

  </div>
</div>

@endsection