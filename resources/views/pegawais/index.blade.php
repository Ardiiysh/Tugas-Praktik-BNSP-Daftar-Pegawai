@extends('dashboard')
@section('Judul Halaman', 'Pegawai')
@section('dashboard')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pegawais.create') }}"> <i class="fa-solid fa-plus"></i></a>
            </div>
        </div>
    </div>
<br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div  class="table-responsive" >

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <!-- <th>No Telp</th> -->
            <!-- <th>Alamat</th> -->
            <th width="280px">Action</th>
        </tr>

        @foreach ($pegawais as $pegawai)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pegawai->nama }}</td>
            <td>{{ $pegawai->jabatan }}</td>
            <!-- <td>{{ $pegawai->no_telp }}</td> -->
            <!-- <td>{{ $pegawai->alamat }}</td> -->
            <td>
                <form action="{{ route('pegawais.destroy',$pegawai->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pegawais.show',$pegawai->id) }}"> <i class="fa-solid fa-eye" ></i></a>
                    <a class="btn btn-primary" href="{{ route('pegawais.edit',$pegawai->id) }}"> <i class="fas fa-pen" > </i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this {{$pegawai->nama}}  ?');"  > <a class="fas fa-trash"></a> </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

    {!! $pegawais->links() !!}

@endsection