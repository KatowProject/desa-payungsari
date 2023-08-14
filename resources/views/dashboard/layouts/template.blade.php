<!DOCTYPE html>
<html lang="en">

<head>
 @include('dashboard.layouts.head')
</head>

<body>

@include('dashboard.layouts.header')

@include('dashboard.layouts.sidebar')

  <main id="main" class="main">

    {{-- <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav>
    </div><!-- End Page Title --> --}}

    @yield('content')

  </main><!-- End #main -->

@include('dashboard.layouts.footer')

</body>

</html>