<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>
<div class="container">

<div class="row">
<div class="col-sm-12">
   <h1 class="text-center" style="padding:50px; background:#f4f4f4;border-radius:5%;" >Admin Panel</h1>
</div>

<div class="col-sm-12 jumbo_user"> 
   <h1 class="text-center" >Dashboard</h1>
   <br>
   
<div class="row">
<div class="col-sm-4">
<a class="a_color" href="employee.php?insert_employee=insert_employee"><button type="button" class="btn btn-primary btn-lg">Add New Student</button></a>
   
   <a class="a_color" href="insertadmin.php"><button type="button" class="btn btn-primary btn-lg">Add New Admin</button></a>
   
   
   <a class="a_color" href="employee.php?view_employee=view_employee"><button type="button" class="btn btn-primary btn-lg">View Students' Details</button></a>
</div>
<div class="col-sm-4">
<a class="a_color" href="attendancepanel.php"><button type="button" class="btn btn-primary btn-lg">Take Attendance</button></a>
   
   <a class="a_color" href="viewattendanceadmin.php"><button type="button" class="btn btn-primary btn-lg">Today's attendance</button></a>
   
   
   <a class="a_color" href="viewattendanceadminfull.php"><button type="button" class="btn btn-primary btn-lg">complete attendance</button></a>
</div>

<div class="col-sm-4">
   <a class="a_color" href="logout.php"><button type="button" class="btn btn-danger btn-lg">logout</button></a>
</div>
</div>
   
   
   
   
   
</div>
</div>
  

<?php } ?>



<?php include("footer.php") ?>