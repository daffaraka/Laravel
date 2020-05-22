<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width",>
	<title> Daftar Pasien</title>

	@stack("style")
</head>
<div class="navigation">
		<a href="{{route('content.index')}}" class="active"> Home </a>
		<a href="{{route('logout')}}" class="logout"> Logout </a>
	</div>
<body>
	
	<body style="font-family: Century Gothic;">
		
		<style>

			
			body {
				background-color: #fff;
				font-family: Century Gothic;
			}

			.navigation {
			    background-color: #36304a;
			    width: 100%;
			    height: 50px;
			    margin-left: auto;
			    margin-right: auto;
			    font-size: 30px;
			    padding: 15px 15px;
			    font-size: 22px;
			    margin: unset;
			}

			.navigation a {
				color: #36304a;
				text-decoration: none;
				padding: 15px 15px;
				margin-right: 5px;
			}

			a.active {
				background: white;
				border-style: solid;
				border-width: 1px;
				float: left;


			}

			.navigation .logout {
				float: right;
				margin: unset;
				background-size: 20px;
				background: white;
				text-decoration: none;
				color: black;
				border-style: solid;
				border-width: 1px;
			}

			.pilihan {
				width: 80%;
				margin-left: auto;
				margin-right: auto;
			}

			.pilihan form {
				float: right;
			}
		</style>


	<div class="container" >
        

        <div class="col-md-15">
            @yield("content")
        </div>
    </div>
	



	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	 
	 @stack("script")
</body>
</html>