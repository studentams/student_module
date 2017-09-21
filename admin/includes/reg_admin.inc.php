<?php
include 'dbh.php';

//here we register adminstrators
//for security reasons we will use prepared statements
$fname = $_POST['fname'];
$phone =$_POST['phone'];
$pass1 = $_POST['pass1'];
$depart =$_POST['depart'];

/* making a confirmation
echo $fname;
echo $phone;
echo $pass1;
echo $depart;
*/

//bind to ensure no sql injections
$stmt = $conn->prepare("INSERT INTO admin (password, admin_name,phone,department) VALUES (?,?,?,?)");
$stmt->bind_param("ssis",$pass1,$fname,$phone,$depart);
$stmt->execute();

echo "new records have been entered";

$stmt->close();
$conn->close();

header("location: ../admin_reg_page.php?message=good");