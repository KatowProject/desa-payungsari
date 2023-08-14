@extends('dashboard.layouts.template')

@section('content')
<div class="card mt-3">
  <div class="card-body">
    <div class="table-responsive mt-3">
      <table id="mytable" class="table">
        <thead>
          <th width="5%">No</th>
          <th width="15%">Nomor Indek</th>
          <th width="90%">Perihal</th>
        </thead>
        <tbody>
          @foreach ($indeks as $i)
            <tr>
              <td>{{ $angka++ }}</td>
              <td>{{ $i->nomor }}</td>
              <td>{{ $i->perihal }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection