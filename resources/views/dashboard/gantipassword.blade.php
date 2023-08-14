@extends('dashboard.layouts.template')

@section('content')

@if (Request::session()->has('notif'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Password Berhasil Diubah',
  showConfirmButton: false,
  timer: 1500
})
</script>
<?php Request::session()->forget('notif'); ?>
@endif

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Ganti Password</h4>
    <form action="{{ url('gantipassword') }}" method="POST">
      @csrf
      <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
      <div class="form-floating mb-3">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="pb" placeholder="Password" name="password">
        <label for="pb">Masukan Password Baru</label>
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control @error('password2') is-invalid @enderror" id="kpb" placeholder="Password" name="password2">
        <label for="kpb">Konfirmasi Password Baru</label>
        @error('password2')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Ganti Password</button>
    </form>
    </div>
</div>

@endsection