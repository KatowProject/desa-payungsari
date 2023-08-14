@extends('dashboard.layouts.template')

@section('content')

<a href="{{ url('post') }}" class="btn btn-danger mb-3"><i class="bi bi-arrow-left-short"> Kembali</i></a>
<a href="{{ url('post/'.$post->id.'/edit') }}" class="btn btn-warning mb-3 mx-3"><i class="bi bi-pencil"> Edit Postingan</i></a>

<div class="card mb-3">
  <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title m-0">{{ $post->title }}</h5>
    <small class="text-body-secondary">Last updated 3 {{ $post->created_at->diffForHumans() }}</small>
    {!! $post->body !!}
  </div>
</div>

@endsection