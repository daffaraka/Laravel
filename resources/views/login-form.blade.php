<!DOCTYPE html>
<html>
<head>
	<title>Login Ya</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<style>
		body {
				background-color: #fff;
				border: 0px;
				font-family: Century Gothic;
			}
		.container {
				background-color:#36304a;
				color: white;
				width: 50%;
				padding:20px 55px;
				border: 3px solid;
				border-radius: 20px;
		}
	</style>


	<div class="container" style="margin-top: 50px">
		<div class="row" style="text-align: center;">
			<div class="col-md-12">
				<form action="{{route ('login.login') }}" method="POST">
					@csrf
					<div class="form-group">
						<label class="control-label"> Username </label>
						<input type="text"	class="form-control" name="username">
					</div>
					<div class="form-group">
						<label class="control-label"> Password </label>
						<input type="password"	class="form-control" name="password">
					</div>
					<button type="submit" class="btn btn-primary"> Login </button>
				</form>

				<p> Belum punya akun? 
				<a href="{{route ('register') }}" style="font-size: 20px; "> Daftar </a> </p>

			</div>
		</div>
	</div>







	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>

</body>
</html>