<footer style="background:#cd5c5c;">
  <div class="container">
      <div class="footer-box">
	  <?php 
	        date_default_timezone_set('Africa/Nairobi');
	           $date = date("Y-m-d");
               $newDate = date("d-m-Y", strtotime($date));
      ?>			   
               
        <p>Copyright &copy; <?php echo date("Y"); ?> Kate Muli</p>
		</div>
  </div>
</footer>
</body>
</html>