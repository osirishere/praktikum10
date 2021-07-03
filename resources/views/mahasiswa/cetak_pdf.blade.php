@extends('mahasiswa.Layout')
@section('content')
<div class="row">
	<div class="col-lg-12margin-tb">
		<div class="pull-leftmt-2">
			<h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
		</div>
		<p align="center">KARTU HASIL STUDI</p>
		<p align="center">{{$mhs->nama}}</p>
</div>
</div>


<table class="table table-bordered">

<tr>
	<th>Mata Kuliah</th>
	<th>SKS</th>
	<th>Jam</th>
	<th>Semester</th>
	<th>Nilai</th>
</tr>
@foreach($mhs->matakuliah as $mhs)
<tr>
	<td>{{$mhs->nama_matkul}}</td>
	<td>{{$mhs->sks}}</td>
	<td>{{$mhs->jam}}</td>
	<td>{{$mhs->semester}}</td>
	<td>{{$mhs->pivot->nilai}}</td>
</tr>
@endforeach
</table>
@endsection