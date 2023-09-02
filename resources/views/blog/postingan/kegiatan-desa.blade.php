@extends('blog.layouts.template')

@section('content')

<style>


.card button{
  position: absolute;
  top: 230px;
  left: 40px;
  right: 40px;
  display: none;

}

.card p{
  position: absolute;
  
  display: none;

}

.card:hover button{
  display: block;
}



.kosong{
  position: absolute;
}

.card:hover .kosong{
  left: 0;
  background-color: rgba(255, 255, 255, 0.365);
  right: 0;
  top: 0;
  bottom: 0;
}

.card:hover p{
  right: 0;
  top: 120px;
  bottom: 0;
  left: 120px;
  color: rgb(114, 112, 112);
  font-weight: 600;
  display: block;
}











  



</style>


<div class="container">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Kegiatan Desa</li>
    </ol>
  </nav>
 
  <div class="row">
    <div class="col-4 mb-4">
      <div class="card">
        <div class="kosong"></div>
        <img src="{{ asset('assets/img/example.jpg') }}"  alt="" >
        <p>Lorem ipsum dolor sit amet.</p>
        <button class="btn btn-success">Lihat detail</button>
      </div>
    </div>

    <div class="col-4 mb-4">
      <div class="card">
        <div class="kosong"></div>
        <img src="{{ asset('assets/img/example.jpg') }}"  alt="" >
        <p>Lorem ipsum dolor sit amet.</p>
        <button class="btn btn-success">Lihat detail</button>
      </div>
    </div>

    <div class="col-4 mb-4">
      <div class="card">
        <div class="kosong"></div>
        <img src="{{ asset('assets/img/example.jpg') }}"  alt="" >
        <p>Lorem ipsum dolor sit amet.</p>
        <button class="btn btn-success">Lihat detail</button>
      </div>
    </div>
    
    <div class="col-4 mb-4">
      <div class="card">
        <div class="kosong"></div>
        <img src="{{ asset('assets/img/example.jpg') }}"  alt="" >
        <p>Lorem ipsum dolor sit amet.</p>
        <button class="btn btn-success">Lihat detail</button>
      </div>
    </div>

    <div class="col-4 mb-4">
      <div class="card">
        <div class="kosong"></div>
        <img src="{{ asset('assets/img/example.jpg') }}"  alt="" >
        <p>Lorem ipsum dolor sit amet.</p>
        <button class="btn btn-success">Lihat detail</button>
      </div>
    </div>

    <div class="col-4 mb-4">
      <div class="card">
        <div class="kosong"></div>
        <img src="{{ asset('assets/img/example.jpg') }}"  alt="" >
        <p>Lorem ipsum dolor sit amet.</p>
        <button class="btn btn-success">Lihat detail</button>
      </div>
    </div>

  </div>



    {{-- <div class="card px-lg-5 py-lg-5 text-center">
      <div class="col-md-12 content-img">
        {{-- <img src="{{ asset('assets/img/search.png') }}"  alt="" >
        <p>asdasdasd</p> 
      
      </div>
    </div> --}}
  </div>
</div>

@endsection