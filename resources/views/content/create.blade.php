@extends("layout.app")

@section("content")

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Data Pasien</title>

	<body>
<!-- 		<style>
			/*body {
				background-color: #fff;
				border: 0px;
				font-family: Century Gothic;
			}*/

		/*	.navigation {
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
			}*/

		/*	a.active {
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
			}*/
		</style>
 -->

	<!-- <div class="navigation">
		<a href="{{route('content.index')}}" class="active"> Home </a>
		<a href="#" class="logout"> Logout </a>
	</div>
 -->

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Pasien</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Kelola Pasien</a></li>
              <li class="breadcrumb-item active">Tambah Pasien</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-md-12">
 				<form action="{{ route('content.masukkan') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">

		@csrf
	<div class="formulir">
			<div class="form-group">
				<label class="control-label"> Nama </label>
				<input type="text" rows="1"  name="nama"  class="form-control">
			</div>
			<div class="form-group">
				<label class="control-label"> NIK </label>
				<input type="text" rows="1" name="nik" class="form-control">
			</div>
			<div class="form-group">
				<label class="control-label"> Alamat </label>
				<textarea name="alamat" rows="1" class="form-control"> </textarea>
			</div>
			<div class="form-group">
				<label class="control-label"> Status </label>
				<textarea name="status" rows="1" class="form-control"> </textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit"> Simpan </button>
				<a href="{{ route('content.index') }}" class="btn btn-danger"> Batal </a>
			</div>
		</form>
	</div>	

 		</div>
 	</div>
 </section>
	

</body>	

@endsection