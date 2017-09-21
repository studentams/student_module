<?php
	include 'includes/dbh.php';
	session_start();
	$admin_id = $_SESSION['admin_id'];
	$sql = " SELECT * FROM admin WHERE admin_id='$admin_id' ";
	$result = $conn->query($sql); //run the query

	$row = $result->fetch_assoc();
	//fetch each and every column

	$a_name = $row['admin_name'];
	$phone = $row['phone'];
	$department =$row['department'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="common.css">

  <script type="text/javascript" src="C:\Users\Brian Mutinda\Desktop\bootstrap-3.3.7-dist\js\jquery.min.js"></script>
  <script type="text/javascript" src='js\jquery.js'></script>
  <script type="text/javascript" src="js\bootstrap.min.js"></script>
  
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body>
	<!--navigation bar-->
	<nav class="navbar navbar-inverse  navbar-fixed-top" id="main_navbar">
		<div class="container">
		<!--BUTTON COMES WITH THE THREE ITEMS-->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
				<span class="sr-only">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header">
				<a class="navbar-brand" href="#">Adminstrator Portal</a>
			</div>

			<div class="collapse navbar-collapse" id='mynavbar'>
				<ul class="nav navbar-nav">
					<li class="active"><a href="profile.php" >Profile</a></li>
			      		<li class="dropdown">
			      			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Register <b class="caret"></b></a>
			      				<ul class="dropdown-menu">
			      					<li><a href="admin_reg_page.php">Adminstrator</li>
			      					<li><a href="student.php">Student</a></li>
			      					<li><a href="course_registration.php">Course</a></li>
			      					<li><a href="unit_reg.php">Unit</a></li>
			      				</ul>
			      		</li>
			      	<li><a href="finance.php">Finance</a></li>
			      	<li><a href="student_lists.php">Student</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
			      <li><a href="profile.php"><?php echo $a_name; ?></a></li> 
			      <li><a href="includes/logout.inc.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
    			</ul>
			</div>	
		</div>
	</nav>

	
</body>
</html>