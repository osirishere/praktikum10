@extends('mahasiswa.Layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                Edit Mahasiswa
                </div>
                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" id="myForm" enctype="multipart/form-data">
                @csrf
                @method('PUT') 
                <div class="form-group">
                    <label for="Nim">Nim</label>
                    <input type="text" name="Nim" class="form-control" id="Nim" value="{{ $mahasiswa->nim }}" ariadescribedby="Nim" >
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $mahasiswa->nama }}" ariadescribedby="Nama" >
                </div>
                <div class="form-group">
                    <label for="image">Foto</label>
                    <input type="file" class="form-control" required="required" name="Foto" value="{{$mahasiswa->foto}}"
                    >
                </br>
                    <img width="150px" src="{{asset('storage/'.$mahasiswa->foto)}}">
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    {{-- <input type="kelas" name="kelas" class="form-control" id="kelas" value="{{ $mahasiswa->kelas->nama_kelas }}" aria-describedby="kelas" > --}}
                    <select name="kelas" id="kelas" class="form-control">
                        @foreach ($kelas as $kls)
                            <option value="{{$kls->id}}" {{$mahasiswa->kelas_id == $kls->id ? 'selected' : ''}} >{{$kls->nama_kelas}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Jurusan">Jurusan</label>
                    <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" value="{{ $mahasiswa->jurusan }}" ariadescribedby="Jurusan" >
                </div>
                <div class="form-group">
                    <label for="No_Handphone">No_Handphone</label>
                    <input type="No_Handphone" name="No_Handphone" class="form-control" id="No_Handphone" value="{{ $mahasiswa->no_handphone }}" ariadescribedby="No_Handphone" >
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="Email" name="Email" class="form-control" id="Email" value="{{ $mahasiswa->email }}" ariadescribedby="Email" >
                </div>
                <div class="form-group">
                    <label for="Tanggal_Lahir">Tanggal Lahir</label>
                    <input type="date" name="Tanggal_Lahir" class="form-control" id="Tanggal_Lahir" value="{{ $mahasiswa->tanggal_lahir }}" ariadescribedby="Tanggal_Lahir" >
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    @endsection