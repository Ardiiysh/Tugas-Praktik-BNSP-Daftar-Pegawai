@extends('dashboard')
@section('Judul Halaman', 'Show')
  

@section('dashboard')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pegawais.index') }}"> Back</a>
            </div>
            <br>
        </div>
    </div>
    <div  class="table-responsive" >
<div>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">No Telp</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
@php
    $i = 0;
@endphp
  <tbody>
    <tr>
      <td>{{ $pegawai->nama }}</td>
      <td>{{ $pegawai->jabatan }}</td>
      <td>{{ $pegawai->no_telp }}</td>
      <td>{{ $pegawai->alamat }}</td>
    </tr>
  </tbody>
</table>
</div>
</div>

@endsection