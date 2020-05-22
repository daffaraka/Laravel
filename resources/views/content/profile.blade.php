@extends("layout.app")


@section("content")
  
<link rel="stylesheet" href="{{ asset ( 'dist/css/profil.css') }} ">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profil</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Profil </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

        



    <section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

        
          <div class="box box-widget widget-user-2">
              <!-- ! — Add the bg color to the header using any of the bg-* classes → -->
               <div class=”widget-user-header bg-yellow”>
                 <div class=”widget-user-image”>
                   <img class="brand-image img-circle elevation-3" src=" {{ asset ('dist/img/avatar5.png') }}" alt=”User Avatar” style="margin-left: auto; margin-right: auto; display: block;">
                 </div>
<!--               <! — /.widget-user-image → -->      
                <br>
                <br>


                  <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                       <h3 class=”widget-user-username”> {{ Auth::user()->namalengkap }}</h3>
                    </div>
                    <div class="profile-usertitle-ttl">
                        <h3 class=”widget-user-username”> {{ Auth::user()->ttl }}</h3>
                    </div>
                    <div class="profile-usertitle-email">
                     <h3 class=”widget-user-username”> {{ Auth::user()->email }}</h3>
                    </div>

                  </div>
                  <!-- END SIDEBAR USER TITLE -->
                  <!-- SIDEBAR BUTTONS -->
          
                  <!-- END SIDEBAR BUTTONS -->
                  <!-- SIDEBAR MENU -->
                  <div class="profile-usermenu">
                    <ul class="nav">
                      <li class="active">
                        <a href="#">
                        <i class="glyphicon glyphicon-home"></i>
                        Overview </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="glyphicon glyphicon-user"></i>
                        Edit Disini Pak </a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                        <i class="glyphicon glyphicon-ok"></i>
                        Tasks </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="glyphicon glyphicon-flag"></i>
                        Help </a>
                      </li>
                    </ul>
                </div>
<!--               <! — /.widget-user — >
 -->
            
              
  <!--   <div class="profil">
                    <h3 class=”widget-user-username”> {{ Auth::user()->namalengkap }}</h3>
                  
                    <h3 class=”widget-user-username”> {{ Auth::user()->email }}</h3>
                  </div>

                </div> -->



				</div>
			</div>
		</div>
	</section>

@endsection

  <!--   <div class=”box-footer no-padding”>
                <ul class=”nav nav-stacked”>
                   <li><a href=”#”>Projects <span class=”pull-right badge bg-blue”>31</span></a></li>
                   <li><a href=”#”>Tasks <span class=”pull-right badge bg-aqua”>5</span></a></li>
                   <li><a href=”#”>Completed Projects <span class=”pull-right badge bg-green”>12</span></a></li>
                   <li><a href=”#”>Followers <span class=”pull-right badge bg-red”>842</span></a></li>
                </ul>
              </div> -->