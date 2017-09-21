<?php
include 'dbh.php';

$cname = $_POST['cname'];
$faculty = $_POST['faculty'];
$period = $_POST['period'];

echo $cname;

$stmt = $conn->prepare("INSERT INTO course(course_name,faculty,period) VALUES (?,?,?)");
$stmt ->bind_param("ssi",$cname,$faculty,$period);
$stmt->execute();

header("location: ../course_registration.php?message=good");
