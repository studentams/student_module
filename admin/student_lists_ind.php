<?php
include 'header.php';
$student_id = $_POST['student_id'];

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
				<CENTER><h2><b>STUDENT DETAILS</b></h2></CENTER>
				
				<?php
						$sql = "select * from student where student_id=$student_id";
						$result = $conn->query($sql);

						while($row = $result->fetch_assoc()){
							echo "<B>ADMISSION NO: </B> ".$row['student_id'];
							echo '<br><br>';
							echo "<B>STUDENT NAME: </B> ".$row['student_name'];
						}

				?>
				<hr>
				<button class="btn btn-info" data-toggle="collapse" data-target="#demo">Fees Transactions Records</button>
				<h3>Financial Records</h3>
				<div id="demo" class="collapse">
				

				<table class="table table-hover">
					<tr>
						<th>Transaction Id</th>
						<th>Amount Paid</th>
						<th>Payment Method</th>
						<th>Receipt Number</th>
					</tr>
				
					<?php
						$sql = "select * from transactions where student_id=$student_id";
						$result = $conn->query($sql);

						if($result->num_rows>0){
							//output each row
							while($row = $result->fetch_assoc()){
								
								?>
							<tr class="success">
								<td><?php echo $row['transaction_id']; ?></td>
								<td><?php echo $row['amount_paid']; ?></td>
								<td><?php echo $row['payment_method']; ?></td>
								<td><?php echo $row['receipt_no']; ?></td>
							</tr>
						<?php
							}
						}

						$sql1 = "select * from finance where student_id=$student_id";
						$result1 = $conn->query($sql1);

						while($row = $result1->fetch_assoc()){

							?>
							</table>
							<B>Total Amount To Pay: Ksh</B> <?php echo $row['amount_to_pay']; ?>/= <br><br>
							<B>Total Amount Paid: Ksh</B> <?php echo $row['total_amount_paid']; ?>/= <br><br>
							<B>Balance: Ksh</B> <?php echo $row['balance']; ?>/=
							<?php

						}

					?>



				
				</div>


				
				<CENTER><h2><B>REGISTERED UNITS</B></h2></CENTER><hr>
				<table class="table table-hover">
					<tr>
						<th>Unit Id</th>
						<th>Unit Name</th>
						<th>Attendance</th>
						<th>Exams</th>
						<th>Status</th>
						<th>Edit</th>
						<th>Un-Enrol</th>
					</tr>
					<?php
						$sql = "SELECT * FROM registered_units where student_id=$student_id";
						$result = $conn->query($sql);

						while($row = $result->fetch_assoc()){
							$unit_id = $row['unit_id'];
							$attendance = $row['attendance'];
							$exams = $row['exams'];
							$status = $row['status'];
							?>
						<tr class="success">
							<?php
								//$sql1 = "select * from units where unit_id = $row['unit_id']";
								$unit_name;
								$unit_id = $row['unit_id'];
								$sql1 = "SELECT * FROM units where unit_id=$unit_id";
								$result1 = $conn->query($sql1);
									while($row = $result1->fetch_assoc()){
										$unit_name = $row['unit_name'];
									}
									//2 sql combinations
							?>
							<td><?php echo $unit_id ?></td>
							<td><?php echo $unit_name; ?></td>
							<td><?php echo $attendance; ?></td>
							<td><?php echo $exams; ?></td>
							<td><?php echo $status; ?></td>
							<td>
							<form method="post" action="student_exams.php">
								<input type="hidden" name="unit_id" value="<?php echo $unit_id;?>">
								<input type="hidden" name="student_id" value="<?php echo $student_id;?>">
								<input type="hidden" name="unit_name" value="<?php echo $unit_name?>">
								<button type="submit" class="btn btn-success">
									Edit
								</button>
							</form>
							</td>
							<td>
<!--You Can Un- Enrol A student From A Unit-->
								<form method="post" action="">
									<button type="button" class="btn btn-warning">
										Un-Enrol 
									</button>
								</form>
							</td>
						</tr>
						<?php
					
						}
					?>	

				</table>				
			</div>
		</div>
	</div>
</body>
</html>