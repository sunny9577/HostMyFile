<?php 
session_start();
if (!isset($_SESSION['id'])){
header("Location:http://hostmyfile.xyz/login.php");
die();
}
?>

<?php 
$uid = 9999999999;
session_start();
$name = $_SESSION['name'];
$uid = $_SESSION['id'];

function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta property="og:site_name" content="HostMyFile.xyz">
	<meta property="og:title" content="HostMyFile" />
	<meta property="og:description" content="HostMyFile is a free file hosting with no registration required" />
	<meta property="og:image" content="http://hostmyfile.xyz/logo2.png"/>
	<meta property="og:type" content="website"/>
	<title>HostMyFile</title>
	<link rel="icon" href="../assets/logo.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/mdb.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
</head>
<body>
<header>

    
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
	    <a class="navbar-brand" href="http://hostmyfile.xyz/"><strong>HostMyFile</strong></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav mr-auto">
	            <li class="nav-item">
	                <a class="nav-link" href="http://hostmyfile.xyz/upload">Upload<span class="sr-only">(current)</span></a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="http://hostmyfile.xyz/download">Download</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="mailto:contact@me.com">Contact Us</a>
	            </li>
	        </ul>
	        <ul class="navbar-nav">
	        	<li class="nav-item">
	                <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>   Logout</a>
	            </li>
	        </ul>
	    </div>
	</nav>    
</header>


<div id="upload" style="margin-top: 100px">
	<div class="container-fluid upload" >
		
		<div class="row row1">

			<div class="col-md-6">
				<div class="alert-info alert text-center" style="color:black;">All Files uploaded are public and can be downloaded by anyone with file ID</div>
			</div>

			<div class="col-md-6">
				<form action="../uupload.php" method="POST" enctype="multipart/form-data">
					<input type="file" name="file" required class="btn-info btn">
					<input type="submit" name="upload" value="Upload" class="btn">
				</form>
			</div>

		</div>
		
	</div>
</div>
<div style="bottom: 0px;position: fixed;width: 100%">
</div>

</body>
</html>


<?php  

require '../db_connect.php';

echo "<table border='1' class='table-responsive table-hover table-striped table-bordered table' style='margin-top:0px;margin-bottom:100px;background-color:#3B3738;color:white'>";
echo "<tr>";
echo "<th class='ccc dd'>File ID</th><th class='ccc dd'>File Name</th><th class='ccc dd'>Download</th><th class='ccc dd'>Date Created</th><th class='ccc dd'>File Size</th>";
echo "</tr>";

$query="Select * FROM files where uid = '$uid'";
$result=mysqli_query($conn,$query);

while ($row=mysqli_fetch_assoc($result)) {
	$date=$row['file_date'];
	$fsize=formatSizeUnits($row['file_size']);
	$date=substr($date,0,10);
	$id=$row['id'];
	$link="<a href='../down.php?id=$id' style='color:white'>Download Now</a>";
	echo "<tr>";
	echo "<td class='ccc '>".$row['id']."</td><td class='ccc '>".$row['file_name']."</td><td class='ccc '>".$link."</td><td class='ccc '>".$date."</td><td class='ccc '>".$fsize."</td>";
	echo "</tr>";
}

?>
