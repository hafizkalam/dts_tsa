@extends('mahasiswa.layout')

@section('content')
    <div class="container mt-5" enctype="multipart/form-data">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>NIM: </b>{{$Mahasiswa->nim}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Mahasiswa->nama}}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{$Mahasiswa->kelas->nama_kelas}}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{$Mahasiswa->jurusan}}</li>
                    <li class="list-group-item"><b>No_Handphone: </b>{{$Mahasiswa->no_hp}}</li>
                    <li class="list-group-item"><b>Foto: </br><img width="100px" src="{{asset('storage/'.$Mahasiswa->foto)}}"></li>
                </ul>
            </div>
            <div>
                <a class="float-right btn btn-secondary my-4 " href="{{ route('mahasiswa.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
