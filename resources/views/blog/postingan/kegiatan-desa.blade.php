@extends('blog.layouts.template')

@section('content')

<style>


  .child-card{
    position: absolute;
    top: 30vh;
    left: 0;
    right: 0;
    bottom: 0;
    text-align: center;
    transition: top 1s; 
    overflow: hidden;
  }

  button{
    opacity: 0;
  }

  .card:hover button{
    opacity: 1;
  }

  .card:hover .child-card{
    top:60%;
  }


  .kosong{
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(255, 255, 255, 0.158)
  }

  /* .card button{
    opacity: 0;
  }

  .card:hover button {
    opacity: 1;
    top:190px;
  } */


  /* .card button {
    position: absolute;
    top: 230px;
    left: 40px;
    right: 40px;
    opacity: 0;
    transition: top 1s; 
  }
  
  .card p {
    position: absolute;
    left: 100px;
    top: 190px;
    right: 0;
    transition: top 1s; 
  }
  
  .card:hover p{
    top:180px;
  }

  .card:hover button {
    opacity: 1;
    
    top:210px;
  } */




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
        <div class="child-card container">
          <p style="color: white; font-weight:bold; ">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
          <button class="btn btn-success">Lihat detail</button>
        </div>
      </div>
    </div>
    
    <div class="col-4 mb-4">
      <div class="card">
        <div class="kosong"></div>
        <img src="{{ asset('assets/img/example.jpg') }}"  alt="" >
        <div class="child-card container">
          <p style="color: white; font-weight:bold; ">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
          <button class="btn btn-success">Lihat detail</button>
        </div>
      </div>
    </div>

    <div class="col-4 mb-4">
      <div class="card">
        <div class="kosong"></div>
        <img src="{{ asset('assets/img/example.jpg') }}"  alt="" >
        <div class="child-card container">
          <p style="color: white; font-weight:bold; ">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
          <button class="btn btn-success">Lihat detail</button>
        </div>
      </div>
    </div>

    <div class="col-4 mb-4">
      <div class="card">
        <div class="kosong"></div>
        <img src="{{ asset('assets/img/example.jpg') }}"  alt="" >
        <div class="child-card container">
          <p style="color: white; font-weight:bold; ">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
          <button class="btn btn-success">Lihat detail</button>
        </div>
      </div>
    </div>

    <div class="col-4 mb-4">
      <div class="card">
        <div class="kosong"></div>
        <img src="{{ asset('assets/img/example.jpg') }}"  alt="" >
        <div class="child-card container">
          <p style="color: white; font-weight:bold; ">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
          <button class="btn btn-success">Lihat detail</button>
        </div>
      </div>
    </div>

    <div class="col-4 mb-4">
      <div class="card">
        <div class="kosong"></div>
        <img src="{{ asset('assets/img/example.jpg') }}"  alt="" >
        <div class="child-card container">
          <p style="color: white; font-weight:bold; ">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
          <button class="btn btn-success">Lihat detail</button>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection