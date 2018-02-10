<?php 
   session_start();
   
   if (isset($_SESSION['id'])){
   header("Location:http://hostmyfile.xyz/home");
   die();
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
      <link rel="icon" href="assets/logo.png" type="image/png" sizes="16x16">
      <link rel="stylesheet" href="css/fontawesome.css">
      <link rel="stylesheet" href="css/mdb.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
   </head>
   <body>
      <style type="text/css">
         .loginbox{
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%,-50%);
         width: 30%;
         color: white;
         }
         @media only screen and (max-width: 768px) {
         .loginbox{
         width: 100%;
         background-color: transparent;
         }
         }
      </style>
      <?php include_once 'topper.php'; ?>
      <div class="loginbox">
         <form action="signups.php" method="POST">
            <input id="name" type="text" class="form-control" name="name" value="" placeholder="Full Name" required style="background-color: rgba(0,0,0,0.1);">
            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address" required style="background-color: rgba(0,0,0,0.1);">
            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password" required style="background-color: rgba(0,0,0,0.1);">   
            <button type="submit" class="btn btn-primary" style="width: 100%;margin-top: 20px">Signup</button>
         </form>
      </div>
      <div style="bottom: 0px;position: absolute;width: 100%">
         <script src="js/jquery-3.2.1.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/popper.min.js"></script>
         <script src="js/mdb.min.js"></script>
      </div>
   </body>
</html>