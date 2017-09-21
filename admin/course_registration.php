<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="main_content">
		<div class="container">
			
			<div class="jumbotron">
				<CENTER><h2>COURSE REGISTRATION</h2></CENTER>
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

				<form role='form' action="includes/course.inc.php" method="POST">
					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Course Name:</label>
		  						<input type="text" class="form-control" name="cname" size='30'>
							</div><br>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Faculty:</label>
		  						<select class="form-control" name="faculty" >
		  							<option value="FIT">FIT</option>
		  							<option value="smc">SMC</option>
		  							<option value="Humanities">Humanities</option>
		  						</select>
							</div><br>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Period in Years</label>
		  						<input type="text" class="form-control" name="period" size='30'>
							</div><br>
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
							</div><br>
						</div>
					</div>

				</form>


			</div>
		</div>
	</div>
</body>
