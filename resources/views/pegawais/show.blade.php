@extends('home')
@section('Judul Halaman', 'Show')
  

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pegawais.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $pegawai->nama }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jabatan:</strong>
                {{ $pegawai->jabatan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Telp:</strong>
                {{ $pegawai->no_telp }}
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                {{ $pegawai->alamat }}
            </div>
        </div>
    </div>

@endsection