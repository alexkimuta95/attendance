<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online class Attendance Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <link rel="stylesheet" href="assets/main.css">
  <link rel="icon" href="assets/icon.jpg">
  <link rel="stylesheet" href="assets/fontawesome.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" style="background:#cd5c5c;border:none;position:sticky;top:0;z-index:10;height:5em;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img src="assets/icon.jpg" alt="" style="height:40px;padding-left:30px;float:left;margin-bottom:20px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="float:right;font-size:20px;padding-left:30px;margin-top:10px;" >
        <li><a href="user.php" style="color:#fff;text-decoration:700;float:right;"> Student Space</a></li>
        <li><a href="admin.php" style="color:#fff">Admin Space</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
    <!--    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>  -->
    <!--    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>  -->
      </ul>
    </div>
  </div>
</nav>
<script  type="text/javascript">
          $('.attend').on('change',function()(
            $('.attend').not(this).prop('checked',false);
          ));
    </script>
</body>
</html>