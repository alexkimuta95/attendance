<?php

include ("header.php");

?>

<?php
date_default_timezone_set("Africa/Nairobi");


$date = date('m/d/Y h:i:s a', time());
echo $date;


?>
<div class="container-fluid jumbo">
 <h1 class="text-center">Students Attendance System</h1>
 <div class="mb-2">
 <h3 class="text-center ">An online attendance system for students</h3>
 </div>
  <br>
  <br>
 <div class="container-fluid mx-auto">
 <div class="rows">
 
  <div class="col-sm-6 color_white col-sm-6-mod">
    <h3 class="text-center">Admin Dashboard</h3>
	<br>
     <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Space</button></a>
  
  </div>
  <div class="col-sm-6 color_white col-sm-6-mod">
   <h3 class="text-center">Student Dashboard</h3>
	<br>
    <a class="a_color" href="user.php"><button type="button" class="btn btn-primary btn-lg">Student Space</button></a>
	 
  </div>
  
 </div>
 
 </div>
   
</div>



<?php

include ("footer.php"); 

?>