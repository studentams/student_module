<?php
include 'dbh.php';

//hold the data from the form
$student_id = $_POST['student_id'];
$faculty = $_POST['faculty'];

//display
echo $student_id;
echo $faculty;

//SEND TO DATABASE
$stmt = $conn->prepare("insert into graduation(student_id,faculty) values (?,?) ");
$stmt->bind_param('is',$student_id,$faculty);
$stmt->execute();//execute it 


$stmt->close();//close the statement
$conn->close();//close the connection

header("location: ../graduation.php?message=registered");












