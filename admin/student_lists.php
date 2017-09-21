<?php
include 'header.php';
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
				<CENTER><h2>LIST OF STUDENTS</h2></CENTER><br><br>
				<!--Search Button-->
				<!--for loop for each student-->

				<?php
						//check for an error
						$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

						if(strpos($url,'message=good')){
							echo 
							"
								<div class='alert alert-success' style='background-color:green; color:white;'>
									<span class='glyphicon glyphicon-ok'></span>
										A new Record has been sucessfully Altered
								</div>
							";
						}

				?>

				<table class="table table-hover">
					<tr>
						<th>Admission no</th>
						<th>Name</th>
						<th>Phone Number</th>
						<th>Year</th>
					</tr>
				
				<?php
					$sql = "SELECT * FROM student ";
					$result = $conn->query($sql);

					if($result->num_rows>0){
						//output each row in a table
						while($row = $result->fetch_assoc()){
							?>
							<tr class="success">
								<td><?php echo $row['student_id']; ?></td>
								<td><?php echo $row['student_name']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['year']; ?></td>
								<form method="post" action="student_lists_ind.php">
									<input type="hidden" name="student_id" value="<?php echo $row['student_id']; ?>">
									<td><button type="submit" class="btn btn-info">View</button></td>
								</form>
							</tr>
						<?php	
						}
					}

				?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>