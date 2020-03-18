@extends("layout")

@section("content")
	
	<ul style="background-color: #F9F5F0; margin:unset;">
		<li> ID :{{$data->id}} </li>
		<li> Nama : {{$data->nama}} </li>
		<li> NIK : {{$data->nik}}</li>
		<li> Alamat : {{$data->alamat}} </li>
		<li> Status : {{$data->status}}</li>
		
		 	<a href="/puskesmas-pasien"> Kembali </a>

@endsection