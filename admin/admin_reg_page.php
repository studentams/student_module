<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="common.css">
</head>
<body>
	<div id="main_content">
		<div class="container">
			
			<div class="jumbotron">
				<CENTER><h2>ADMINSTRATOR REGISTRATION</h2></CENTER>
				<?php
						//check for an error
						$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

						if(strpos($url,'message=good')){
							echo 
							"
								<div class='alert alert-success' style='background-color:green; color:white;'>
									<span class='glyphicon glyphicon-ok'></span>
										A new Record has been entered sucessfully
									
								</div>
							";
						}

				?>
				<form role='form' action="includes/reg_admin.inc.php" method="post">
					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Full Name:</label>
		  						<input type="text" class="form-control" name="fname" size='30'>
							</div><br><br>
						</div>
					</div>
					

					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
								<label for='usr'>Phone Number:</label>
								<input type="text" class='form-control' name="phone" maxlength="10">
							</div><br><br>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
								<label for='pwd'>Password:</label>
								<input type="text" class="form-control" name="pass1">
								<span class="help-block">helping text</span>
							</div><br><br>
						</div>
					</div>


					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
								<label for='dpt'>Department:</label>
								<select class="form-control" name="depart">
									<option name="Finance">Finance</option>
									<option name="FIT">FIT</option>
									<option name="Admissions">Admissions</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
								<button type="submit" class="btn btn-success">
									submit
								</button>
							</div>
							<!--validation-->
							<p id="form-message"></p>

						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>