  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? '' : 'collapsed' }}" href="{{ url('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('pegawai') ? '' : 'collapsed' }}" href="{{ url('pegawai') }}">
          <i class="bi bi-people-fill"></i>
          <span>Pegawai</span>
        </a>
      </li><!-- End Penduduk Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('penduduk') ? '' : 'collapsed' }}" href="{{ url('penduduk') }}">
          <i class="bi bi-people-fill"></i>
          <span>Penduduk</span>
        </a>
      </li><!-- End Penduduk Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('indeks_surat') ? '' : 'collapsed' }}" href="{{ url('indeks_surat') }}">
          <i class="bi bi-file-earmark-binary"></i>
          <span>Indeks Surat</span>
        </a>
      </li><!-- End Indeks Surat Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('buatsurat') ? '' : 'collapsed' }}" href="{{ url('buatsurat') }}">
          <i class="bi bi-file-earmark-diff"></i>
            <span>Buat Surat</span>
          </a>
        </li><!-- End Buat Surat Nav -->

        <li class="nav-item">
          <a class="nav-link {{ Request::is('surat-masuk','surat-keluar') ? '' : 'collapsed' }}" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-file-earmark-pdf-fill"></i><span>Kearsipan Surat</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="forms-nav" class="nav-content collapse {{ Request::is('surat-masuk','surat-keluar') ? 'show' : '' }} " data-bs-parent="#sidebar-nav">
            <li>
              <a href="{{ url('surat-masuk') }}" class="{{ Request::is('surat-masuk') ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Surat Masuk</span>
              </a>
            </li>
            <li>
              <a href="{{ url('surat-keluar') }}" class="{{ Request::is('surat-keluar') ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Surat Keluar</span>
              </a>
            </li>
          </ul>
        </li><!-- End Kearsipan Surat -->


      <li class="nav-item">
        <a class="nav-link {{ Request::is('post') ? '' : 'collapsed' }}" href="{{ url('post') }}">
          <i class="bi bi-file-earmark-diff-fill"></i>
            <span>Postingan</span>
          </a>
        </li><!-- End Buat Surat Nav -->

      <li class="nav-heading">More</li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('gantipassword') ? '' : 'collapsed' }}" href="{{ url('gantipassword') }}">
          <i class="bi bi-key"></i>
          <span>Ganti Password</span>
        </a>
      </li><!-- End Ganti Password Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" onclick="Swal.fire(
          'Untuk Bantuan',
          'Silahkan Hubungi Admin di nomor Whatsapp 082122154500',
          'question'
        )">
          <i class="bi bi-question-circle"></i>
          <span>Bantuan</span>
        </a>
      </li><!-- End Bantuan Nav -->

      <li class="nav-item">
        <form action="{{ url('logout') }}" method="POST">
          @csrf
          <button class="nav-link collapsed" type="submit">
            <i class="bi bi-power"></i>
            <span>Logout</span>
          </button>
        </form>
      </li><!-- End Logout Nav -->

    </ul>

  </aside><!-- End Sidebar-->