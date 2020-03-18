@extends("layout")
@section("content")


<form action="{{ route('biodata.updatetindakan',['id'=>$data->id]) }}" method="POST" class="form-horizontal">

		@csrf

		<div class="form-group">
			<label class="control-label"> Nama </label>
			<textarea rows="1"  name="name"  class="form-control"> "{{$data->name}} </textarea>
		</div>
		<div class="form-group">
			<label class="control-label"> NIK </label>
			<textarea rows="1" name="nim" class="form-control">{{$data->nim}} </textarea>
		</div>
		<div class="form-group">
			<label class="control-label"> Alamat </label>
			<textarea name="address" rows="1" class="form-control"> {{$data->address}} </textarea>
		</div>
		<div class="form-group">
			<label class="control-label"> Status </label>
			<textarea name="status" rows="1" class="form-control"> {{$data->status}} </textarea>
		</div>
		<div class="form-group">
			<label class="control-label"> Tindakan </label>
			<input type="text" rows="1" name="nim" value="{{$data->tindakan}}" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit"> Simpan </button>
			<a href="{{ route('biodata.index') }}" class="btn btn-danger"> Batal </a>
		</div>
	</form>

@endsection