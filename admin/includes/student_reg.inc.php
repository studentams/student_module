<?php
include 'dbh.php';

$fname = $_POST['fname'];
$pass = $_POST['pass1'];
$phone = $_POST['phone'];
$year = $_POST['year'];
$sem = $_POST['sem'];
$mentor = $_POST['mentor'];
$eclass = $_POST['eclass'];
$courses =$_POST['courses'];


/*
echo $fname."\n ";
echo $pass."\n ";
echo $phone. "\n";
echo $year. "\n";
echo $sem ."\n";
echo $mentor."\n";
echo $eclass."\n";
echo $courses;
*/

$stmt=$conn->prepare("INSERT INTO student(`password`, `student_name`, `phone`, `course_id`, `year`, `sem`, `mentor`, `class`) VALUES (?,?,?,?,?,?,?,?)"); 
$stmt->bind_param("ssiiiiss",$pass,$fname,$phone,$courses,$year,$sem,$mentor,$eclass);
$stmt->execute();

$stmt->close();
$conn->close();
echo "new records have been entered";

header("location: ../student.php?message=good");
//header("location: ../admin_reg_page.php?message=good");