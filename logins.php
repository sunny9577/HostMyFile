<?php 
session_start();
$email = $_POST['email'];
$pass = $_POST['password'];
include_once 'db_connect.php';

$query="Select * From users where uemail = '$email' AND upass = '$pass'";
$result = mysqli_query($conn,$query);
if(!$result) die();
$row = mysqli_fetch_assoc($result);

if ($row>0) {

	$_SESSION['id'] = $row['uid'];
	$_SESSION['name'] = $row['uname'];
	$_SESSION['email'] = $row['uemail'];

	header("Location:http://hostmyfile.xyz/home");


}
else header("Location:http://hostmyfile.xyz/login.php");
?>