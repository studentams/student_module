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
				<CENTER><h2>FINANCE</h2></CENTER>
					<?php
						//check for an error
						$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

						if(strpos($url,'message=good')){
							echo 
							"
								<div class='alert alert-success' style='background-color:green; color:white;'>
									<span class='glyphicon glyphicon-ok'></span>
										Transaction And Finance Records Have been Updated successfully
								</div>
							";
						}

				?>

				<?php
						//check for an error
						$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

						if(strpos($url,'error=no_record')){
							echo 
							"
								<div class='alert alert-danger'>
									<span class='glyphicon glyphicon-info-sign' style='color:blue;'></span>
										The Student Record Does Not Exist
								</div>
							";
						}

				?>
				<form role='form' action="includes/finance.inc.php" method="post">
					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Student Admission No:</label>
		  						<input type="text" class="form-control" name="admin_no" size='30' required>
							</div><br>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Amount Paid:</label>
		  						<input type="text" class="form-control" name="amount" size='30' required>
							</div><br>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Payment Method</label>
		  						<select class="form-control" name="payment">
		  							<option value="mpesa">Mpesa</option>
		  							<option value="bank">Bank</option>
		  							<option value="paypal">Paypal</option>
		  						</select>
							</div><br>
						</div>
					</div>

					
					<div class="row">
						<div class="col-lg-1">

						</div>

						<div class="col-lg-4">
							<div class="form-group">
		  						<label for="usr">Receipt Number:</label>
		  						<input type="text" class="form-control" name="receipt" size='30' required>
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
			</div>
		</div>
	</div>
</body>
</html>