<?php 
   if(!isset($_GET['id'])){
   	header("Location:404.php");
   	die();
   }
   
   require 'db_connect.php';
   
   $id=$_GET['id'];
   
   $query="SELECT * FROM filepath Where fid = '$id'";
   
   $result=mysqli_query($conn,$query);
   
   $row=mysqli_fetch_assoc($result);
   
   $file_id=$row['fid'];
   
   if ($file_id!=$id) {
   	header("Location:404.php");
   	die();
   }
   $file_down = $row['file_down'];
   $file_down=$file_down+1;
   $file_path = $row['file_path'];
   $file_name = $row['file_name'];
   $file_type = $row['file_type'];
   $file_size = $row['file_size'];
   $query =
   "UPDATE filepath SET file_down = '$file_down' Where fid = '$id'";
   
   $result=mysqli_query($conn,$query);
   
   $file_size=formatSizeUnits($file_size);
   
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
      <base href="/">
      <meta charset="utf-8">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="assets/logo.png" type="image/png" sizes="16x16">
      <!-- Seo Meta Tags -->
      <title><?php echo $file_name;?> - HostMyFile</title>
      <link href='assets/logo.png' rel='icon' type='image/x-icon'/>
      <!-- Twitter Card data -->
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="<?php echo $file_name;?> - HostMyFile" />
      <meta name="twitter:description" content="<?php echo $file_name;?> - HostMyFile" />
      <meta name="twitter:image" content="http://hostmyfile.xyz/assets/logo.png" />
      <!-- Facebook Open Graph data -->
      <meta property="og:title" content="<?php echo $file_name;?> - HostMyFile"/>
      <meta property="og:type" content="article"/>
      <meta property="og:url" content="hostmyfile.xyz" />
      <meta property="og:image" content="http://hostmyfile.xyz/assets/logo.png" />
      <meta property="og:description" content="<?php echo $file_name;?> - HostMyFile" />
      <meta property="og:site_name" content="HostMyFile" />
      <!-- Google+ Meta Tags. -->
      <meta itemprop="name" content="<?php echo $file_name;?> - HostMyFile">
      <meta itemprop="description" content="<?php echo $file_name;?> - HostMyFile">
      <meta itemprop="image" content="assets/logo.png">
      <link rel="stylesheet" href="css/fontawesome.css">
      <link rel="stylesheet" href="css/mdb.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
      <script type="text/javascript">
         function download() {
         
         	var bttn = document.getElementById('downbtn');
         	bttn.value="Starting Download...";
         	setTimeout(myFunction, 1000);
         	location.href = '<?php echo $file_path ?>' ;
         	
         }
         
         function myFunction(){
         	var bttn = document.getElementById('downbtn');
         	bttn.value="Download";
         }
         
      </script>
   </head>
   <body>
      <header>
         <div style="margin-top: 10px;">
            <center>
               <h1><a class="navbar-brand" href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>"><strong style="font-size: 1.5em">HostMyFile</strong></a></h1>
            </center>
         </div>
      </header>
      <div class="container-fluid text-center window" style="padding: 30px; margin-top: 30px; background-color: #b0aac2">
         <div class="row">
            <div class="col-md-6" style="padding: 30px">
               <br><label>File Name:</label>&nbsp&nbsp<?php echo $file_name ?>
               <br><label>File Type&nbsp:</label>&nbsp&nbsp<?php echo $file_type ?>
               <br><label>File Size&nbsp:</label>&nbsp&nbsp<?php echo $file_size ?>
            </div>
            <div class="col-md-6">
               <a ><input type="button" id="downbtn" name="btn" class="btn-success btn btn-lg  center-block downbtn" style="margin-top: 70px;margin-bottom: 40px" onclick="download()" value="Download"></a>
            </div>
         </div>
      </div>
      <div class="container-fluid specs" style="margin-top: 40px;">
         <div class="row">
            <div class="col-sm-4 col-xs-12 pro">
               <i class="fa fa-user-secret" aria-hidden="true"></i>
               <p class="text-center" style="font-size: 25px;">Safe and Anonymous</p>
            </div>
            <div class="col-sm-4 col-xs-12 pro">
               <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
               <p class="text-center" style="font-size: 25px;">Rich File Support</p>
            </div>
            <div class="col-sm-4 col-xs-12 pro">
               <i class="fa fa-globe" aria-hidden="true"></i>
               <p class="text-center" style="font-size: 25px;">No Country Restriction</p>
            </div>
         </div>
      </div>
   </body>
</html>