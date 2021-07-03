@extends('mahasiswa.Layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Mahasiswa
            </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nim: </b>{{$mahasiswa->nim}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$mahasiswa->nama}}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{$mahasiswa->kelas->nama_kelas}}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{$mahasiswa->jurusan}}</li>
                    <li class="list-group-item"><b>No_Handphone: </b>{{$mahasiswa->no_handphone}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$mahasiswa->email}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$mahasiswa->tanggal_lahir}}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection