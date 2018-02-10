<?php 
session_start();

$uid = $_SESSION['id'];

require 'db_connect.php';


if (!isset($_FILES['file'])) {
	echo "file not detected";
	die();
}

$file=$_FILES['file'];
$file_name=$file['name'];
$file_type=$file['type'];
$tmp_name=$file['tmp_name'];
$error=$file['error'];
$file_size=$file['size'];

echo $file_size;

if ($file_size > 1024000000) {
    echo "Sorry, your file is too large.";
    die();
} 

if ($error>0) {
	echo "Error While Uploading File........";
	die();
}

$fp      = fopen($tmp_name, 'r');
$content = fread($fp, filesize($tmp_name));
$content = addslashes($content);
fclose($fp);


$query =
"INSERT INTO files (uid,file_name,file_content,file_type,file_size) VALUES ('$uid','$file_name','$content','$file_type','$file_size')";

$result=mysqli_query($conn,$query);



if ($result) {

	header("Location:http://hostmyfile.xyz/home");
}
else {
	echo "failed Not Uploaded";
	die();
}
?>