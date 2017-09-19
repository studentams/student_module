<?php
//create connection
$conn = mysqli_connect("localhost","root","","ams");

if(!$conn){
	die("connection failed".mysqli_connect_error());
}
