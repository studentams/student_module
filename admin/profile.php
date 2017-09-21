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
<?php
	if(isset($_SESSION['admin_id'])){
?>	
	<div id="main_content">
		<div class="container">
			<div class="jumbotron">
				<div class="row">
					<h1><center>Profile</center></h1>
					<div class="col-lg-6">
						<img src="admin_images\loginuser.png" class="img-thumbnail" width="304" height="236">
					</div>
						
					<div class="col-lg-6">
						
						<h2> 
							Name: <?php echo $a_name; ?><br><br>
							Id Number: <?php echo $_SESSION['admin_id'];?> <br><br>
							Phone Number: <?php echo '0'.$phone; ?><br><br>
							Department: <?php echo $department; ?><br><br>
							Category: Adminstrator
						</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}else{
	echo "
	<div class='alert alert-danger'>
		You have to login to view this page
	</div>
	";
}
?>
</body>
</html>