<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="HostMyFile is a free file hosting with no registration required">
      <meta name="keywords" content="HostMyFile is a free file hosting with no registration required">
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
   <style>
      body{
      font-family: 'Lato', sans-serif;
      color: white;
      background-color: #0045A6;
      background-image: url("assets/bg.png");
      }
   </style>
   <body>
      <?php include_once 'topper.php'; ?>
      <!--Main Layout-->
      <main class="text-center" style="margin-top: 140px;">
         <div style="height: 300px;background-color:rgba(0,0,0,0.2); ;width: 100%">
            <h1 style="margin-bottom: 60px;padding-top: 50px;">File sharing Without Registration</h1>
            <button class="btn btn-success btn-lg hvr-icon-forward " onclick="window.location.href = 'upload.php'">Start Uploading Files for FREE</button>
         </div>
         <?php include_once 'pro.php'; ?>
      </main>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/mdb.min.js"></script>
   </body>
</html>

