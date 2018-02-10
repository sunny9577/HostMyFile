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
      <link rel="icon" href="assets/logo.png" type="image/png" sizes="16x16">
      <link rel="stylesheet" href="css/fontawesome.css">
      <link rel="stylesheet" href="css/mdb.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
   </head>
   </head>
   <body>
      <?php include_once('topper.php') ?>
      <!--Main Layout-->
      <main class="text-center" style="margin-top: 100px">
         <!--maincontainer-->
         <div>
            <?php 
               if(isset($_GET['id'])){
               
               	$id=$_GET['id'];
               	$host=$_SERVER['HTTP_HOST'];
               
               	switch ($id) {
               		case '01':
               		{
               			echo "<div class='alert alert-danger col-md-12' style='margin-top:30px;margin-bottom: -110px'' >
                 			<strong>Failed!</strong>File Upload Error. Try Later.
               			</div>";
               		}break;

                     case '02':
                     {
                        echo "<div class='alert alert-danger col-md-12' style='margin-top:30px;margin-bottom: -110px'' >
                        <strong>Failed!</strong>File Upload Error. File not found.
                        </div>";
                     }break;

                     case '03':
                     {
                        echo "<div class='alert alert-danger col-md-12' style='margin-top:30px;margin-bottom: -110px'' >
                        <strong>Failed!</strong>File Upload Error. Try Later.
                        </div>";
                     }break;

                     case '04':
                     {
                        echo "<div class='alert alert-danger col-md-12' style='margin-top:30px;margin-bottom: -110px'' >
                        <strong>Failed!</strong>File Upload Error. Try Later.
                        </div>";
                     }break;
               		
               		default:{
               			echo "<div class='alert alert-success col-md-12' style='margin-top:30px;margin-bottom: -110px' >
                 			<strong>Success!</strong>Dowload ID of File is $id <br>Dowload Link is http://hostmyfile.xyz/get.php?id=$id
               			</div>";
               		}
               		
               			
               			break;
               	}
               }
               ?>
         </div>
         <div class="container-fluid conta" style="height: 200px;margin-bottom: 60px;">
            <div class="row">
               <!--kk-->
               <div class="col-md-12 col-xs-12 window">
                  <form action="uploads.php" method="post" enctype="multipart/form-data">
                     <h3 style="color: white">Want to Upload file?&nbsp Select and Click Upload</h3>
                     <div class="file-field">
                        <div class="btn btn-primary btn-sm">
                           <span>Choose file</span>
                           <input type="file" name="file"  required >
                        </div>
                        <div class="file-path-wrapper">
                           <input class="file-path validate" type="text" placeholder="Upload your file">
                        </div>
                     </div>
                     <div class="col-md-12 col-xs-12">
                        <br>
                        <button class="btn btn-info"  type="submit" name="UPLOAD" value="UPLOAD" style="margin-top: 30px">UPLOAD &nbsp;<i style="color: " class="fa fa-upload"></i></button>
                     </div>
                  </form>
               </div>
               <!--kk-->
            </div>
         </div>
         <!--maincontainer-->
         <?php include_once 'pro.php'; ?>
      </main>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/mdb.min.js"></script>
   </body>
</html>

