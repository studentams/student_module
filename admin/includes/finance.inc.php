<?php
include 'dbh.php';

$admin_no = $_POST['admin_no'];
$amount = $_POST['amount'];
$payment = $_POST['payment'];
$receipt = $_POST['receipt'];

/*
echo $admin_no;
echo $amount;
echo $payment;
echo $receipt;
*/

//we can select balance from the database 

$sql = "SELECT * FROM student WHERE student_id = $admin_no";
$result = $conn->query($sql);

if(!$row = $result -> fetch_assoc()){
	echo "no student record found";
	//return user to page with error
	header("location: ../finance.php?error=no_record");
}else{
	//student id has been found

	//so we select from finance table
	$sql= "SELECT * FROM finance WHERE student_id = $admin_no";
	$result = $conn->query($sql);

	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			$total_amount = $row['total_amount_paid'];
			$balance = $row['balance'];
			$amount_to_pay = $row['amount_to_pay'];
		}
	}else{
		//if this record is not found then add it since the admision number exists in the database
		$sql = "INSERT INTO finance(student_id,amount_to_pay,total_amount_paid,balance) VALUES ($admin_no,0,0,0)";
		$result = $conn->query($sql);
	}

	$total_amount = $amount + $total_amount;//this is the new amount
	$amount_to_pay = $balance + $amount_to_pay;
	$balance = $amount_to_pay - $total_amount;

//Now we update the finance tabe with the new values
	$sql = " UPDATE finance SET total_amount_paid = $total_amount,balance=$balance WHERE student_id = $admin_no";
	$result = $conn->query($sql);

	//echo $total_amount."\n";
	//echo $balance;

	$stmt = $conn->prepare( "INSERT INTO transactions(student_id,amount_paid,payment_method,receipt_no) VALUES (?,?,?,?)");
	$stmt ->bind_param("iiss",$admin_no,$amount,$payment,$receipt);
	$stmt ->execute();

	header("location: ../finance.php?message=good");
}



