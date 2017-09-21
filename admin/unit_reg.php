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
				<CENTER><h2>UNIT REGISTRATION</h2></CENTER>
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
				<form role='form' action="includes/unit_reg.inc.php" method="post">
					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Unit Name:</label>
		  						<input type="text" class="form-control" name="uname" size='30'>
		  					</div><br>
		  				</div>
		  			</div>

		  			<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Unit Cost:</label>
		  						<input type="text" class="form-control" name="u_cost" size='30' required>
		  					</div><br>
		  				</div>
		  			</div>

		  			<div class="row">
						<div class="col-lg-1">

						</div>
			  			<div class="col-lg-4">
								<div class="form-group">
			  						<label for="usr">Course:</label>
			  						<select class="form-control" name="courses" required>
				  						<?php
											$sql = "SELECT course_id, course_name from course";
											$result = $conn->query($sql);

											if($result->num_rows>0){
												//output each row
												while($row = $result->fetch_assoc()){
													
												?>
														<option value= <?php echo $row['course_id'] ;?> > <?php echo $row['course_name'];?></option>
												
												<?php
												}
											}
										?>
									</select>
								</div><br>
							</div>
					</div>

		  			<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Semister:</label>
		  						<input type="text" class="form-control" name="sem" size='30' required>
		  					</div><br>
		  				</div>
		  			</div>

		  			<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Year:</label>
		  						<input type="text" class="form-control" name="year" size='30' required>
		  					</div><br>
		  				</div>
		  			</div>

		  			<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Contact Hours:</label>
		  						<input type="text" class="form-control" name="chours" size='30' required>
		  					</div><br>
		  				</div>
		  			</div>

		  			<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Status:</label>
		  						<select class="form-control" name="status">
		  							<option value="specific">Specific</option>
		  							<option value="common">Common</option>
		  							<option value='special'>Special</option>
		  						</select>
		  					</div><br>
		  				</div>
		  			</div>

		  			<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<button type="submit" class="btn btn-success" required>
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
</html>