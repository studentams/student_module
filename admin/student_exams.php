<?php
include 'header.php';
$unit_id = $_POST['unit_id'];
$student_id = $_POST['student_id'];
$unit_name = $_POST['unit_name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id='main_content'>
		<div class="container">
			<div class="jumbotron">
			<CENTER><h2><b>UNIT DETAILS</b></h2></CENTER>
				
				<?php
						$sql = "select * from student where student_id=$student_id";
						$result = $conn->query($sql);

						while($row = $result->fetch_assoc()){
							echo "<B>ADMISSION NO: </B> ".$row['student_id'];
							echo '<br><br>';
							echo "<B>STUDENT NAME: </B> ".$row['student_name'];
						}

				?>
				<HR>
				<form method="post" action="includes/student_exams.inc.php">
					
					<?php
						$sql = "SELECT * FROM registered_units where student_id=$student_id and unit_id=$unit_id";
						$result= $conn->query($sql);
						while($row = $result->fetch_assoc()){

							?>

							<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Unit Name:</label>
		  						<input type="text" class="form-control" id="disabledInput" name="uname" size='30' value="<?php echo $unit_name; ?>" disabled>
							</div><br>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Exams:</label>
		  						<input type="text" class="form-control" name="exam" size='30' value="<?php echo $row['exams']; ?>">
							</div><br>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Attendance:</label>
		  						<input type="text" class="form-control" name="attend" size='30' value="<?php echo $row['attendance'];?>">
							</div><br>
						</div>
					</div>


					<input type="hidden" name="unit_id" value="<?php echo $unit_id;?>">
					<input type="hidden" name="student_id" value="<?php echo $student_id?>">

					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<button type="submit" class="btn btn-success">
		  							Submit
		  						</button>
							</div><br>
						</div>
					</div>

							<?php
						}	

					?>

				</form>
			</div>
		</div>
	</div>
</body>
</html>