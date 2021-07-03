@extends('mahasiswa.Layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
            <h3>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG </h3>
                <h3>KARTU HASIL STUDI (KHS)</h3>
                </div>
                <br><br><br>
                    <ul class="list-group list-group-flush">

                        <table>
                            <tr><strong>NAMA:</strong>{{$nilai->nama}}</tr>
                            <tr><strong>NIM:</strong>{{$nilai->nim}}</tr>
                            <tr><strong>KELAS:</strong>{{$nilai->kelas->nama_kelas}}</tr>
                        </table>
                        <table class="table table-bordered">
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Nilai</th>
                        </tr>
                        @foreach ($nilai->matakuliah as $nl)
                        <tr>
                            <td>{{$nl->nama_matkul}}</td>
                            <td>{{$nl->sks}}</td>
                            <td>{{$nl->semester}}</td>
                            <td>{{$nl->pivot->nilai}}</td>
                        </tr>
                        @endforeach
                        </table>
                    </ul>

                <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
                <p align="center">	<a target="_blank" class="btn btn-danger btn-lg" href="{{url('mahasiswa/cetak_pdf/'.$nilai->nim)}}">CETAK KE PDF</a> </p>
    </div>
    @endsection
