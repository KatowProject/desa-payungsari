@extends('blog.layouts.template')

@section('content')

  {{-- Menu --}}
  <div class="container text-center " style="margin-bottom: 120px">
    <div class="row" >
      <div class="col-md-4" style="padding-top:30px;">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#struktur-organisasi-desa" aria-expanded="false" aria-controls="flush-collapseOne">
                Struktur Organisasi Desa Payungsari
              </button>
            </h2>
            <div id="struktur-organisasi-desa" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body text-start">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#" id="menu1"><i class="bi bi-caret-right-fill"></i> Struktur Organisasi Desa</a></li>
                    <li class="list-group-item"><a href="#" id="menu2"><i class="bi bi-caret-right-fill"></i> Kepala Desa</a></li>
                    <li class="list-group-item"><a href="#" id="menu3"><i class="bi bi-caret-right-fill"></i> Sekretaris Desa</a></li>
                    <li class="list-group-item"><a href="#" id="menu4"><i class="bi bi-caret-right-fill"></i> Kasi Pemerintahan</a></li>
                    <li class="list-group-item"><a href="#" id="menu5"><i class="bi bi-caret-right-fill"></i> Kasi Trantib</a></li>
                  </ul>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dusun-desa" aria-expanded="false" aria-controls="flush-collapseOne">
              Dusun Desa Payungsari
              </button>
            </h2>
            <div id="dusun-desa" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body text-start">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#" id="dusun1"><i class="bi bi-geo-alt-fill"></i> DUSUN PEDES I</a></li>
                    <li class="list-group-item"><a href="#" id="dusun2"><i class="bi bi-geo-alt-fill"></i> DUSUN PEDES II</a></li>
                    <li class="list-group-item"><a href="#" id="dusun3"><i class="bi bi-geo-alt-fill"></i> DUSUN BAYUR I</a></li>
                    <li class="list-group-item"><a href="#" id="dusun4"><i class="bi bi-geo-alt-fill"></i> DUSUN BAYUR II</a></li>
                    <li class="list-group-item"><a href="#" id="dusun4"><i class="bi bi-geo-alt-fill"></i> DUSUN JATIMUKA</a></li>
                  </ul>
              </div>
            </div>
          </div>

        </div>
      </div>

      {{-- end Menu --}}

      {{-- Kepala Desa --}} 
      <div class="col-md-8  text-start" id="div2" style="display:none;padding-top:30px;">
        <table class="table d-flex">
          
          <tr>
            <th>Nama Pejabat</th>
            <td>:</td>
            <td>AHMAD SATIBI, S.Sos</td>
          </tr>
          <tr >
            <th class="">Jabatan</th>
            <td>:</td>
            <td>Kepala Desa</td>
          </tr>
          <tr>
            <th>NIP</th>
            <td>:</td>
            <td>1234512345124542</td>
          </tr>
        </table>
        <div class="Tugas">
          <p class="child-tugas mb-3">Secara eksplisit Pasal 26 ayat (1) mengatur empat tugas utama Kepala Desa yaitu:</p>
          <ol>
            <li>Menyelenggarakan pemerintahan desa</li>
            <li>Melaksanakan pembangunan desa</li>
            <li>Melaksanakan pembinaan masyarakat desa</li>
            <li>Memberdayakan masyarakat desa</li>
          </ol>
        </div>
      </div>

        
      {{-- end Kepala Desa --}}




      {{-- Badan Permusyawaratan Desa --}}
      <div class="col-md-8  text-start" id="div3" style="display:none;padding-top:30px;">
        <table class="table d-flex">
          <tr>
            <th>Nama Pejabat</th>
            <td>:</td>
            <td>Bisri</td>
          </tr>

          <tr >
            <th class="">Jabatan</th>
            <td>:</td>
            <td>Sekretaris Desa</td>
          </tr>

          <tr>
            <th>NIP</th>
            <td>:</td>
            <td>-</td>
          </tr>
        </table>
        <div class="Tugas">
          <p class="child-tugas mb-3"><strong>Badan Permusyawaratan Desa (BPD)</strong> dalam Permendagri No.110/2016 Tugas Badan Permusyawaratan Desa (BPD) mempunyai fungsi, membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa, menampung dan menyalurkan aspirasi masyarakat Desa, dan melakukan pengawasan kinerja Kepala Desa. Selain melaksanakan fungsi diatas, Badan Permusyawaratan Desa juga mempunyai tugas sebagai berikut. Tugas Badan Permusyawaratan Desa:</p>
          <ol>
            <li>Menggali aspirasi masyarakat</li>
            <li>Menampung aspirasi masyarakat</li>
            <li>Mengelola aspirasi masyarakat</li>
            <li>Menyalurkan aspirasi masyarakat</li>
            <li>Menyelenggarakan musyawarah Tugas Badan Permusyawaratan Desa (BPD)</li>
            <li>Menyelenggarakan musyawarah Desa</li>
            <li>Membentuk panitia pemilihan Kepala Desa</li>
            <li>Menyelenggarakan musyawarah Desa khusus untuk pemilihan Kepala Desa antarwaktu</li>
            <li>Membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa</li>
            <li>Melaksanakan pengawasan terhadap kinerja Kepala Desa</li>
            <li>Melakukan evaluasi laporan keterangan penyelenggaraan Pemerintahan Desa</li>
            <li>Menciptakan hubungan kerja yang harmonis dengan Pemerintah Desa dan lembaga Desa lainnya; dan melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan.</li>
          </ol>
        </div>
      </div>
 
      {{-- end Badan Permusyawaratan Desa --}}




      {{-- Kaur Pemerintah --}}
      <div class="col-md-8  text-start" id="div4" style="display:none;padding-top:30px;">
        <table class="table d-flex">
          <tr >
            <th class="">Jabatan</th>
            <td>:</td>
            <td>Alias</td>
          </tr>

          <tr>
            <th>Nama Pejabat</th>
            <td>:</td>
            <td>Alias</td>
          </tr>
          <tr>
            <th>NIP</th>
            <td>:</td>
            <td>1234512345124542</td>
          </tr>
        </table>
        <div class="Tugas">
          <p class="child-tugas mb-3"><strong>Badan Permusyawaratan Desa (BPD)</strong> dalam Permendagri No.110/2016 Tugas Badan Permusyawaratan Desa (BPD) mempunyai fungsi, membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa, menampung dan menyalurkan aspirasi masyarakat Desa, dan melakukan pengawasan kinerja Kepala Desa. Selain melaksanakan fungsi diatas, Badan Permusyawaratan Desa juga mempunyai tugas sebagai berikut. Tugas Badan Permusyawaratan Desa:</p>
          <ol>
            <li>Menggali aspirasi masyarakat</li>
            <li>Menampung aspirasi masyarakat</li>
            <li>Mengelola aspirasi masyarakat</li>
            <li>Menyalurkan aspirasi masyarakat</li>
            <li>Menyelenggarakan musyawarah Tugas Badan Permusyawaratan Desa (BPD)</li>
            <li>Menyelenggarakan musyawarah Desa</li>
            <li>Membentuk panitia pemilihan Kepala Desa</li>
            <li>Menyelenggarakan musyawarah Desa khusus untuk pemilihan Kepala Desa antarwaktu</li>
            <li>Membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa</li>
            <li>Melaksanakan pengawasan terhadap kinerja Kepala Desa</li>
            <li>Melakukan evaluasi laporan keterangan penyelenggaraan Pemerintahan Desa</li>
            <li>Menciptakan hubungan kerja yang harmonis dengan Pemerintah Desa dan lembaga Desa lainnya; dan melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan.</li>
          </ol>
        </div>
      </div>
      {{-- end Kaur Pemerintah --}}
      



      {{-- Kaur Pembangunan --}}
      <div class="col-md-8  text-start" id="div5" style="display:none;padding-top:30px;">
        <table class="table d-flex">
          <tr >
            <th class="">Jabatan</th>
            <td>:</td>
            <td>Alias</td>
          </tr>

          <tr>
            <th>Nama Pejabat</th>
            <td>:</td>
            <td>Alias</td>
          </tr>
          <tr>
            <th>NIP</th>
            <td>:</td>
            <td>1234512345124542</td>
          </tr>
        </table>
        <div class="Tugas">
          <p class="child-tugas mb-3"><strong>Badan Permusyawaratan Desa (BPD)</strong> dalam Permendagri No.110/2016 Tugas Badan Permusyawaratan Desa (BPD) mempunyai fungsi, membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa, menampung dan menyalurkan aspirasi masyarakat Desa, dan melakukan pengawasan kinerja Kepala Desa. Selain melaksanakan fungsi diatas, Badan Permusyawaratan Desa juga mempunyai tugas sebagai berikut. Tugas Badan Permusyawaratan Desa:</p>
          <ol>
            <li>Menggali aspirasi masyarakat</li>
            <li>Menampung aspirasi masyarakat</li>
            <li>Mengelola aspirasi masyarakat</li>
            <li>Menyalurkan aspirasi masyarakat</li>
            <li>Menyelenggarakan musyawarah Tugas Badan Permusyawaratan Desa (BPD)</li>
            <li>Menyelenggarakan musyawarah Desa</li>
            <li>Membentuk panitia pemilihan Kepala Desa</li>
            <li>Menyelenggarakan musyawarah Desa khusus untuk pemilihan Kepala Desa antarwaktu</li>
            <li>Membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa</li>
            <li>Melaksanakan pengawasan terhadap kinerja Kepala Desa</li>
            <li>Melakukan evaluasi laporan keterangan penyelenggaraan Pemerintahan Desa</li>
            <li>Menciptakan hubungan kerja yang harmonis dengan Pemerintah Desa dan lembaga Desa lainnya; dan melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan.</li>
          </ol>
        </div>
      </div>
      {{-- end Kaur Pembangunan --}}

      {{-- Kaur Pemberdayaan Masyarakat --}}
      <div class="col-md-8  text-start" id="div6" style="display:none;padding-top:30px;">
        <table class="table d-flex">
          <tr >
            <th class="">Jabatan</th>
            <td>:</td>
            <td>Alias</td>
          </tr>

          <tr>
            <th>Nama Pejabat</th>
            <td>:</td>
            <td>Alias</td>
          </tr>
          <tr>
            <th>NIP</th>
            <td>:</td>
            <td>1234512345124542</td>
          </tr>
        </table>
        <div class="Tugas">
          <p class="child-tugas mb-3"><strong>Badan Permusyawaratan Desa (BPD)</strong> dalam Permendagri No.110/2016 Tugas Badan Permusyawaratan Desa (BPD) mempunyai fungsi, membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa, menampung dan menyalurkan aspirasi masyarakat Desa, dan melakukan pengawasan kinerja Kepala Desa. Selain melaksanakan fungsi diatas, Badan Permusyawaratan Desa juga mempunyai tugas sebagai berikut. Tugas Badan Permusyawaratan Desa:</p>
          <ol>
            <li>Menggali aspirasi masyarakat</li>
            <li>Menampung aspirasi masyarakat</li>
            <li>Mengelola aspirasi masyarakat</li>
            <li>Menyalurkan aspirasi masyarakat</li>
            <li>Menyelenggarakan musyawarah Tugas Badan Permusyawaratan Desa (BPD)</li>
            <li>Menyelenggarakan musyawarah Desa</li>
            <li>Membentuk panitia pemilihan Kepala Desa</li>
            <li>Menyelenggarakan musyawarah Desa khusus untuk pemilihan Kepala Desa antarwaktu</li>
            <li>Membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa</li>
            <li>Melaksanakan pengawasan terhadap kinerja Kepala Desa</li>
            <li>Melakukan evaluasi laporan keterangan penyelenggaraan Pemerintahan Desa</li>
            <li>Menciptakan hubungan kerja yang harmonis dengan Pemerintah Desa dan lembaga Desa lainnya; dan melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan.</li>
          </ol>
        </div>
      </div>
      {{-- end Kaur Pemberdayaan Masyarakat --}}




      {{-- Kaur  Kesejahteraan Rakyat --}}
      <div class="col-md-8  text-start" id="div7" style="display:none;padding-top:30px;">
        <table class="table d-flex">
          <tr >
            <th class="">Jabatan</th>
            <td>:</td>
            <td>Alias</td>
          </tr>

          <tr>
            <th>Nama Pejabat</th>
            <td>:</td>
            <td>Alias</td>
          </tr>
          <tr>
            <th>NIP</th>
            <td>:</td>
            <td>1234512345124542</td>
          </tr>
        </table>
        <div class="Tugas">
          <p class="child-tugas mb-3"><strong>Badan Permusyawaratan Desa (BPD)</strong> dalam Permendagri No.110/2016 Tugas Badan Permusyawaratan Desa (BPD) mempunyai fungsi, membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa, menampung dan menyalurkan aspirasi masyarakat Desa, dan melakukan pengawasan kinerja Kepala Desa. Selain melaksanakan fungsi diatas, Badan Permusyawaratan Desa juga mempunyai tugas sebagai berikut. Tugas Badan Permusyawaratan Desa:</p>
          <ol>
            <li>Menggali aspirasi masyarakat</li>
            <li>Menampung aspirasi masyarakat</li>
            <li>Mengelola aspirasi masyarakat</li>
            <li>Menyalurkan aspirasi masyarakat</li>
            <li>Menyelenggarakan musyawarah Tugas Badan Permusyawaratan Desa (BPD)</li>
            <li>Menyelenggarakan musyawarah Desa</li>
            <li>Membentuk panitia pemilihan Kepala Desa</li>
            <li>Menyelenggarakan musyawarah Desa khusus untuk pemilihan Kepala Desa antarwaktu</li>
            <li>Membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa</li>
            <li>Melaksanakan pengawasan terhadap kinerja Kepala Desa</li>
            <li>Melakukan evaluasi laporan keterangan penyelenggaraan Pemerintahan Desa</li>
            <li>Menciptakan hubungan kerja yang harmonis dengan Pemerintah Desa dan lembaga Desa lainnya; dan melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan.</li>
          </ol>
        </div>
      </div>
      {{-- end Kaur  Kesejahteraan Rakyat --}}




      {{-- Kaur  Keuangan --}}
      <div class="col-md-8  text-start" id="div8" style="display:none;padding-top:30px;">
        <table class="table d-flex">
          <tr >
            <th class="">Jabatan</th>
            <td>:</td>
            <td>Alias</td>
          </tr>

          <tr>
            <th>Nama Pejabat</th>
            <td>:</td>
            <td>Alias</td>
          </tr>
          <tr>
            <th>NIP</th>
            <td>:</td>
            <td>1234512345124542</td>
          </tr>
        </table>
        <div class="Tugas">
          <p class="child-tugas mb-3"><strong>Badan Permusyawaratan Desa (BPD)</strong> dalam Permendagri No.110/2016 Tugas Badan Permusyawaratan Desa (BPD) mempunyai fungsi, membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa, menampung dan menyalurkan aspirasi masyarakat Desa, dan melakukan pengawasan kinerja Kepala Desa. Selain melaksanakan fungsi diatas, Badan Permusyawaratan Desa juga mempunyai tugas sebagai berikut. Tugas Badan Permusyawaratan Desa:</p>
          <ol>
            <li>Menggali aspirasi masyarakat</li>
            <li>Menampung aspirasi masyarakat</li>
            <li>Mengelola aspirasi masyarakat</li>
            <li>Menyalurkan aspirasi masyarakat</li>
            <li>Menyelenggarakan musyawarah Tugas Badan Permusyawaratan Desa (BPD)</li>
            <li>Menyelenggarakan musyawarah Desa</li>
            <li>Membentuk panitia pemilihan Kepala Desa</li>
            <li>Menyelenggarakan musyawarah Desa khusus untuk pemilihan Kepala Desa antarwaktu</li>
            <li>Membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa</li>
            <li>Melaksanakan pengawasan terhadap kinerja Kepala Desa</li>
            <li>Melakukan evaluasi laporan keterangan penyelenggaraan Pemerintahan Desa</li>
            <li>Menciptakan hubungan kerja yang harmonis dengan Pemerintah Desa dan lembaga Desa lainnya; dan melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan.</li>
          </ol>
        </div>
      </div>
      {{-- end Kaur  Keuangan --}}



      {{-- Kaur  Umum --}}
      <div class="col-md-8  text-start" id="div9" style="display:none;padding-top:30px;">
        <table class="table d-flex">
          <tr >
            <th class="">Jabatan</th>
            <td>:</td>
            <td>Alias</td>
          </tr>

          <tr>
            <th>Nama Pejabat</th>
            <td>:</td>
            <td>Alias</td>
          </tr>
          <tr>
            <th>NIP</th>
            <td>:</td>
            <td>1234512345124542</td>
          </tr>
        </table>
        <div class="Tugas">
          <p class="child-tugas mb-3"><strong>Badan Permusyawaratan Desa (BPD)</strong> dalam Permendagri No.110/2016 Tugas Badan Permusyawaratan Desa (BPD) mempunyai fungsi, membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa, menampung dan menyalurkan aspirasi masyarakat Desa, dan melakukan pengawasan kinerja Kepala Desa. Selain melaksanakan fungsi diatas, Badan Permusyawaratan Desa juga mempunyai tugas sebagai berikut. Tugas Badan Permusyawaratan Desa:</p>
          <ol>
            <li>Menggali aspirasi masyarakat</li>
            <li>Menampung aspirasi masyarakat</li>
            <li>Mengelola aspirasi masyarakat</li>
            <li>Menyalurkan aspirasi masyarakat</li>
            <li>Menyelenggarakan musyawarah Tugas Badan Permusyawaratan Desa (BPD)</li>
            <li>Menyelenggarakan musyawarah Desa</li>
            <li>Membentuk panitia pemilihan Kepala Desa</li>
            <li>Menyelenggarakan musyawarah Desa khusus untuk pemilihan Kepala Desa antarwaktu</li>
            <li>Membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa</li>
            <li>Melaksanakan pengawasan terhadap kinerja Kepala Desa</li>
            <li>Melakukan evaluasi laporan keterangan penyelenggaraan Pemerintahan Desa</li>
            <li>Menciptakan hubungan kerja yang harmonis dengan Pemerintah Desa dan lembaga Desa lainnya; dan melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan.</li>
          </ol>
        </div>
      </div>
      {{-- end Kaur  Umum --}}



      {{-- Kaur  Kepala Dusun --}}
      <div class="col-md-8 text-start" id="div10" style="display:none;padding-top:30px;">
        <table class="table d-flex">
          <tr >
            <th class="">Jabatan</th>
            <td>:</td>
            <td>Alias</td>
          </tr>

          <tr>
            <th>Nama Pejabat</th>
            <td>:</td>
            <td>Alias</td>
          </tr>
          <tr>
            <th>NIP</th>
            <td>:</td>
            <td>1234512345124542</td>
          </tr>
        </table>
        <div class="Tugas">
          <p class="child-tugas mb-3"><strong>Badan Permusyawaratan Desa (BPD)</strong> dalam Permendagri No.110/2016 Tugas Badan Permusyawaratan Desa (BPD) mempunyai fungsi, membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa, menampung dan menyalurkan aspirasi masyarakat Desa, dan melakukan pengawasan kinerja Kepala Desa. Selain melaksanakan fungsi diatas, Badan Permusyawaratan Desa juga mempunyai tugas sebagai berikut. Tugas Badan Permusyawaratan Desa:</p>
          <ol>
            <li>Menggali aspirasi masyarakat</li>
            <li>Menampung aspirasi masyarakat</li>
            <li>Mengelola aspirasi masyarakat</li>
            <li>Menyalurkan aspirasi masyarakat</li>
            <li>Menyelenggarakan musyawarah Tugas Badan Permusyawaratan Desa (BPD)</li>
            <li>Menyelenggarakan musyawarah Desa</li>
            <li>Membentuk panitia pemilihan Kepala Desa</li>
            <li>Menyelenggarakan musyawarah Desa khusus untuk pemilihan Kepala Desa antarwaktu</li>
            <li>Membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa</li>
            <li>Melaksanakan pengawasan terhadap kinerja Kepala Desa</li>
            <li>Melakukan evaluasi laporan keterangan penyelenggaraan Pemerintahan Desa</li>
            <li>Menciptakan hubungan kerja yang harmonis dengan Pemerintah Desa dan lembaga Desa lainnya; dan melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan.</li>
          </ol>
        </div>
      </div>
      {{-- end Kaur  Kepala Dusun --}}
      
      {{-- Struktur Organisasi --}}
      <div class="col-md-8 col-sm-9  text-start" style="display: none" id="div1">
        <h2 >Struktur Organisasi</h2>
        <div class="gambar-organisasi">
          <img src="{{ asset('assets/img/Struktur_organisasi_pemerintah_d.png')}}" alt="">
        </div>
      </div>
      {{-- End Struktur Organisasi --}}
    </div>
  </div>
  
<script>
  $(document).ready(function () {
    $('#menu1').click(function (e) { 
      e.preventDefault();
      $('#div2').hide()
      $('#div3').hide()
      $('#div4').hide()
      $('#div5').hide()
      $('#div6').hide()
      $('#div7').hide()
      $('#div8').hide()
      $('#div9').hide()
      $('#div10').hide()
      $('#div1').show()
    });
    $('#menu2').click(function (e) { 
      e.preventDefault();
      $('#div1').hide()
      $('#div3').hide()
      $('#div4').hide()
      $('#div5').hide()
      $('#div6').hide()
      $('#div7').hide()
      $('#div8').hide()
      $('#div9').hide()
      $('#div10').hide()
      $('#div2').show()
    });
    $('#menu3').click(function (e) { 
      e.preventDefault();
      $('#div1').hide()
      $('#div2').hide()
      $('#div4').hide()
      $('#div5').hide()
      $('#div6').hide()
      $('#div7').hide()
      $('#div8').hide()
      $('#div9').hide()
      $('#div10').hide()
      $('#div3').show()
    });
    $('#menu4').click(function (e) { 
      e.preventDefault();
      $('#div1').hide()
      $('#div2').hide()
      $('#div3').hide()
      $('#div5').hide()
      $('#div6').hide()
      $('#div7').hide()
      $('#div8').hide()
      $('#div9').hide()
      $('#div10').hide()
      $('#div4').show()
    });
    $('#menu5').click(function (e) { 
      e.preventDefault();
      $('#div1').hide()
      $('#div2').hide()
      $('#div3').hide()
      $('#div4').hide()
      $('#div6').hide()
      $('#div7').hide()
      $('#div8').hide()
      $('#div9').hide()
      $('#div10').hide()
      $('#div5').show()
    });
    $('#menu6').click(function (e) { 
      e.preventDefault();
      $('#div1').hide()
      $('#div2').hide()
      $('#div3').hide()
      $('#div4').hide()
      $('#div5').hide()
      $('#div7').hide()
      $('#div8').hide()
      $('#div9').hide()
      $('#div10').hide()
      $('#div6').show()
    });
    $('#menu7').click(function (e) { 
      e.preventDefault();
      $('#div1').hide()
      $('#div2').hide()
      $('#div3').hide()
      $('#div4').hide()
      $('#div5').hide()
      $('#div6').hide()
      $('#div8').hide()
      $('#div9').hide()
      $('#div10').hide()
      $('#div7').show()
    });
    $('#menu8').click(function (e) { 
      e.preventDefault();
      $('#div1').hide()
      $('#div2').hide()
      $('#div3').hide()
      $('#div4').hide()
      $('#div5').hide()
      $('#div6').hide()
      $('#div7').hide()
      $('#div9').hide()
      $('#div10').hide()
      $('#div8').show()
    });
    $('#menu9').click(function (e) { 
      e.preventDefault();
      $('#div1').hide()
      $('#div2').hide()
      $('#div3').hide()
      $('#div4').hide()
      $('#div5').hide()
      $('#div6').hide()
      $('#div7').hide()
      $('#div8').hide()
      $('#div10').hide()
      $('#div9').show()
    });
    $('#menu10').click(function (e) { 
      e.preventDefault();
      $('#div1').hide()
      $('#div2').hide()
      $('#div3').hide()
      $('#div4').hide()
      $('#div5').hide()
      $('#div6').hide()
      $('#div7').hide()
      $('#div8').hide()
      $('#div9').hide()
      $('#div10').show()
    });

  });
</script>

@endsection