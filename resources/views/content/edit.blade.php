<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Data Pasien</title>

	<body>
		<style>
			body {
				background-color: #fff;
				border: 0px;
				font-family: Century Gothic;
			}

			.navigation {
			    background-color: #36304a;
			    width: 100%;
			    margin-left: auto;
			    margin-right: auto;
			    font-size: 30px;
			    padding: 15px 15px;
			    font-size: 22px;
			}

			.navigation a {
				color: white;
				text-decoration: none;
				padding: 0 15px;
				margin-right: 5px;
			}

			a.active {
				background: red;
				border-radius: 10px;
			}

			.navigation .logout {
				float: right;
				background: white;
				border-radius: 5px;
				text-decoration: none;
				color: black;
			}

			.formulir {
				background-color: white;
				margin: 40px;
			}
		</style>

		<div class="navigation">
		<a href="{{route('content.index')}}" class="active"> Home </a>
		<a href="#" class="logout"> Logout </a>
	</div>
	
	<form action="{{ route('content.update',['id'=>$data->id]) }}" method="POST" class="form-horizontal">

		@csrf
	<div class="formulir">
		<div class="form-group">
			<label class="control-label"> Nama </label>
			<textarea name="nama" rows="1" class="form-control"> {{$data->nama}} </textarea>
		</div>
		<div class="form-group">
			<label class="control-label"> NIK </label>
			<textarea name="nik" rows="1" class="form-control"> {{$data->nik}} </textarea>
		</div>
		<div class="form-group">
			<label class="control-label"> Alamat </label>
			<textarea name="alamat" rows="1" class="form-control"> {{$data->alamat}} </textarea>
		</div>
		<div class="form-group">
			<label class="control-label"> Status </label>
			<textarea name="status" rows="1" class="form-control"> {{$data->status}} </textarea>
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit"> Simpan Perubahan </button>
			<a href="{{ route('content.index') }}" class="btn btn-danger"> Batal </a>
		</div>
	</form>
</div>
