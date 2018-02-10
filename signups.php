<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

include_once 'db_connect.php';

$query="insert into users (uname,uemail,upass) VALUES ('$name','$email','$pass') ";
mysqli_query($conn,$query);

$query="Select * From users where uemail = '$email' AND upass = '$pass'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

if ($row>0) {

	$_SESSION['id'] = $row['uid'];
	$_SESSION['name'] = $row['uname'];
	$_SESSION['email'] = $row['uemail'];

	header("Location:http://http://hostmyfile.xyz/login.php");


}

else echo "failed"


?>