<?php include("header.php");?>


<div class="container-fluid view_user">

 <div class="col-sm-12">
  <h2 class="text-center">View Attendance</h2>
  <p class="text-center">Enter your SID and submit.</p>
 </div> 
 <div class="col-sm-12 user_form_color">
 
  <form class="form-inline" action="" method="post">
    <div class="form-group">
      <label for="email">SID:</label>
      <input type="text" class="form-control" name="eid" placeholder="Enter SID" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  
 </div>  
</div>



<?php

 if(isset($_POST['eid'])) {
	 
//make connection
$con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
 ?>	
 <?php 
             $Eid = $_POST['eid'];
	          $con = mysqli_connect('localhost','root','','attendance');
              $result = mysqli_query($con,"SELECT * FROM `attendance_taken` WHERE eid='$Eid'");
			  $row = mysqli_fetch_array($result);
			  $total = $row[0];
			  $today = strval($total);
              if ($total == 0){
				  ?>
			  <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("SID is wrong.Please reconfirm SID then try again ")){window.location = "viewattendanceuser.php";}
   
              </script>	  
			  <?php } 
			  
			  else {
				  ?>
 <div class="container-fluid MT-10" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Attendance can be seen below.</h1>
		   <br>
		    <a class="a_color" href="user.php"><button type="button" class="btn btn-primary btn-lg">User Dashboard</button></a>

		   <br>
<h4 class="text-center">Student can find their SID here and can use SID to view their attendance</h4>

		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>SID</th>
        <th>Name</th>
		<th>Date</th>
		<th>Present/Absent</th>
      </tr>
    </thead>
    <tbody>
		
 <?php 
//select database
$Eid = $_POST['eid'];

$sql="SELECT * FROM `attendance_taken` WHERE eid='$Eid' ORDER BY id ASC";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['eid']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['date']; ?></td>
		<td><?php echo $post['attendance']; ?></td>
	   </tr>
              
      
<?php } ?>    
     </tbody>
    </table>
	</div>
	
	
   
  <?php } ?>
 
 <?php } ?>
 
 <div class="container-fluid">
	  <div class="col-sm-6">
	    <h3>Attendace of three months :</h3><p>( will be updated on completion of three months of classes).</p>. 		
	  </div>
	  
	  <div class="col-sm-6">
	    <h3>total semester attendace :</h3><p>( will be updated on completion of semester.).</p>. 
	  </div>
	</div>



<?php include("footer.php"); ?>
