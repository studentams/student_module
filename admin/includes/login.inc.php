<?php
session_start();
//include database 
include 'dbh.php';

//we receieve data from the forms
$id = $_POST['uname'];
$pass1 = $_POST['pass'];


//its good to confirm that everything is okay
echo $uname;
echo $pass1;

 $sql =" SELECT * FROM admin WHERE admin_id='$id' and password='$pass1' ";
 $result = $conn->query($sql); //execute it
 
 	//check if everythin matches
	if(!$row = $result->fetch_assoc()){
		//send user to login page because its an error
		echo "Your Password or Username is Incorrect";		
		header("location: ../index.php?error=incorrect");	
	}else{
		echo "Welcome";
		header("location:../profile.php");
		$_SESSION['admin_id']= $id;
		//proceed to the next page
	}