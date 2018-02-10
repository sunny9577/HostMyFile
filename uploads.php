<?php 
   require 'db_connect.php';
   
   if (!isset($_FILES['file'])) {
   	echo "file not detected";
   header("Location:upload/index.php?id=02");
   	die();
   }
   
   $file=$_FILES['file'];
   $file_name=$file['name'];
   $file_type=$file['type'];
   $tmp_name=$file['tmp_name'];
   $error=$file['error'];
   $file_size=$file['size'];
   
   
   if ($error>0) {
   	header("Location:upload.php?id=01");
   	die();
   }
   
   $fp      = fopen($tmp_name, 'r');
   $content = fread($fp, filesize($tmp_name));
   $content = addslashes($content);
   fclose($fp);
   
   
   $query =
   "INSERT INTO files (file_name,file_content,file_type,file_size) VALUES ('$file_name','$content','$file_type','$file_size')";
   
   $result=mysqli_query($conn,$query);
   
   if ($result) {
   
   $query ="SELECT id FROM files WHERE file_name='$file_name' AND file_type='$file_type' AND file_size='$file_size' ";
   
   
   $result=mysqli_query($conn,$query);
   
   }
   else {
   	echo "failed Not Uploaded";
   header("Location:upload.php?id=03");
   	die();
   }
   
   
   if ($result) {
   	
   	$row=mysqli_fetch_assoc($result);
   	$id=$row["id"];
   	header("Location:upload.php?id=$id ");
   }
   else 	{
   	echo "Failed No ID Found";
   header("Location:upload.php?id=04");
   }
   ?>