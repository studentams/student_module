<?php
include 'dbh.php';

$stat;
$exam = $_POST['exam'];
$attend = $_POST['attend'];

$student_id = $_POST['student_id'];
$unit_id = $_POST['unit_id'];

echo $exam." ";
echo $attend. " ";

echo $student_id. " ";
echo $unit_id." ";

if($exam >= 40){
	$stat = 'passed';
}else{
	$stat = 'failed';
}

echo $stat;

//$sql = "UPDATE registered_units SET exams=$exam,attendance=$attend,status=$status WHERE student_id=$student_id and unit_id=$unit_id";
//$result = $conn->query($sql);

$sql = "select * from registered_units where student_id=10 and unit_id=1000";
$result = $conn->query($sql);

//while($row = $result->fetch_assoc()){
	//$row_id = $row['record_id'];
	$sql = "update registered_units set exams=$exam,attendance=$attend where unit_id=$unit_id and student_id = $student_id";
	$result = $conn->query($sql);

	$sql1 = "update registered_units set status='$stat' where unit_id=$unit_id and student_id = $student_id";
	$result1 = $conn->query($sql1);
	header("location: ../student_lists.php?message=good");
//}

//$stmt = $conn->prepare("UPDATE registered_units SET exams,attendance,status WHERE student_id=? and unit_id=?");
//$stmt ->bind_param('iis',$exam,$attend,$status);

//$stmt->execute();
//$stmt->close();
//$conn->close();

