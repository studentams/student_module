<?php
include 'dbh.php';

$unitame =$_POST['uname'];
$u_cost =$_POST['u_cost'];
$courses = $_POST['courses'];
$sem = $_POST['sem'];
$year = $_POST['year'];
$chours = $_POST['chours'];
$status =$_POST['status'];

/*
echo $unitame;
echo $u_cost;
echo $courses;
echo $sem;
echo $year;
echo $chours;
echo $status;
*/

$stmt = $conn->prepare( "INSERT INTO units(`unit_name`, `unit_cost`, `course_id`, `sem`, `year`, `contact_hours`, `unit_state`) VALUES (?,?,?,?,?,?,?)");
$stmt -> bind_param("siiiiis",$unitame,$u_cost,$courses,$sem,$year,$chours,$status);
$stmt->execute();

$stmt->close();
$conn->close();

header("location: ../unit_reg.php?message=good");
