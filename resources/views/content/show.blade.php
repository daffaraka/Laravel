@extends("layout.app")

@section("content")

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detail Pasien</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Kelola Pasien</a></li>
              <li class="breadcrumb-item active">Detail Pasien </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ul style="margin-right: 20px;">
						<label class="control-label">ID</label>
						<li class="form-control"> {{  $data->id }}</li>
						 <label class="control-label">Nama</label>
						<li class="form-control">Nama : {{  $data->nama }}</li>
						 <label class="control-label">NIK</label>
						<li class="form-control">NIM : {{  $data->nik }}</li>
						 <label class="control-label">Alamat</label>
						<li class="form-control">Alamat : {{  $data->alamat }}</li>
						<label class="control-label">Status</label>
						<li class="form-control">Status : {{  $data->status }}</li>
						 <!-- 
						<li class="form-control">File Path : {{ $data->filePath}}</li> -->
					</ul>

						<button type="button" class="btn btn-default" style="float:right; margin-right: 20px;"><a href="{{ route('content.index') }}">Kembali</a></button>

				</div>
			</div>
		</div>
	</section>


	


@endsection