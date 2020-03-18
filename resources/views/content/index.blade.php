	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/gaya.css') }}" />
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
		</style>


	<div class="navigation">
		<a href="{{route('content.index')}}" class="active"> Home </a>
		<a href="#" class="logout"> Logout </a>


	</div>
			<div class="isi">
				<style>
					
					.isi {
						padding: 20px;
					}


				</style>




						<h1 style="text-align: center;" >Daftar Pasien Puskemas</h1>
						<a href="{{route('content.create')}}" class="btn btn-info" style="margin-left: 10%;"> Daftar </a>
						

						<br> <br>

							<table class="table table-hover" style="margin: unset; border: 1px solid #000; width: 80%; margin-left: auto; margin-right: auto;">
								
								
								<thead>
								
									<tr style="background: #36304a; color: white;"> 
										<th> ID </th>
										<th> Nama </th>
										<th> NIK </th>
										<th> Alamat </th>
										<th> Status </th>
										<th> Tanggal Masuk </th>
										<th> Action </th>


									</tr>
						</thead>
						<tbody style="background: white">
							@forelse($pasien as $data)
							<tr style="background: #f7f8f3">
										<td>{{$data->id}}</td>
										<td>{{$data->nama}}</td>
										<td>{{$data->nik}}</td>
										<td>{{$data->alamat}}</td>
										<td>{{$data->status}}</td>
										<td>{{$data->time}} </td>
								<td>
									<a href="{{ route('content.show',['id' => $data->id]) }}" class="btn btn-success"> Detail </a>
									<a href="{{ route('content.edit',['id' => $data->id]) }}" class="btn btn-warning"> Edit </a>
									<a href="{{route('content.tindakan',['id'=> $data->id])}}" class="btn btn-secondary"> Tindakan </a>
									<a onclick="return confirm('Ah dah yakin belum lu?');"href="{{ route('content.destroy',['id' => $data->id]) }}" class="btn btn-danger"> Delete </a>		
								</td>
							</tr>
							@empty
								<tr>
									<td colspan="8" style="font-size: 20px"> Data belum tersedia </td>
								</tr>

							@endforelse
						</tbody>
					</table>
				</div>	
	
</body>