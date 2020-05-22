@extends("layout.app")

@section("content")
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Pasien</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Kelola Pasien </a></li>
              <li class="breadcrumb-item active">Edit Pasien</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>




    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                     <form action="{{ route('pengguna.update',['id'=>$data->id]) }}" method="POST" class="form-horizontal">

                                @csrf
                              <div class="formulir">
                                <div class="form-group">
                                  <label class="control-label"> Username </label>
                                  <textarea name="username" rows="1" class="form-control">{{ Auth::user()->username }} </textarea>
                                </div>
                                <div class="form-group">
                                  <label class="control-label"> Email </label>
                                  <textarea name="email" rows="1" class="form-control"> {{ Auth::user()->email }} </textarea>
                                </div>
                                <div class="form-group">
                                  <label class="control-label"> Nama Lengkap </label>
                                  <textarea name="namalengkap" rows="1" class="form-control"> {{ Auth::user()->namalengkap }} </textarea>
                                </div>
                                <div class="form-group">
                                  <label class="control-label"> TTL </label>
                                  <textarea name="TTL" rows="1" class="form-control"> {{ Auth::user()->ttl }} </textarea>
                                </div>
                                <div class="form-group">
                                  <button class="btn btn-primary" type="submit"> Simpan Perubahan </button>
                                  <a href="{{ route('content.pengguna') }}" class="btn btn-danger"> Batal </a>
                                </div>
                              </div>
                              </form>








               </div>
            </div>
        </div>
    </section>