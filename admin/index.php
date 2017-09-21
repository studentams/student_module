<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

  <script type="text/javascript" src="C:\Users\Brian Mutinda\Desktop\bootstrap-3.3.7-dist\js\jquery.min.js"></script>
  <script type="text/javascript" src='js\jquery.js'></script>
  <script type="text/javascript" src="js\bootstrap.min.js"></script>
  
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body>
<div class="page-header">
			<center><h1>ADMIN LOGIN PAGE</h1></center>
		</div>
<div class="container">
	<div class="jumbotron" text-center>
	<?php
	//check for an error
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	if(strpos($url,'error=incorrect')){
		echo 
		"
			<div class='alert alert-danger'>
				<strong>Incorrect Username or Password</strong>
			</div>

		";
	}else if(strpos($url,'message=logout')){
		echo
		"
			<div class='alert alert-success'>
			 <span class='glyphicon glyphicon-ok' style='color:green'></span>
				You have sucessfully logged Out 
			</div>
		";
	}

	?>
		<form role="form" action="includes\login.inc.php" method="POST">
			<div class="row">
				<div class="col-lg-3">

				</div>

				<div class="col-lg-5">
					<div class="form-group">
						<label for="text">Username:</label>
						<input type="text" name="uname" class="form-control" id="text">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3">
					
				</div>

				<div class="col-lg-5">
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" name="pass" class="form-control" id='pwd'>
					</div>
				</div>

			</div>

			<center>
				<button type="submit" class="btn btn-success btn-lg">
						Login
				</button>
			</center>
		</form>
	</div>
</div>
<!--forms -->
</body>
</html>