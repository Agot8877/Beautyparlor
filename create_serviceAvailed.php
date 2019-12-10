<?php include('assets/session.php'); ?>


<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Availed Service</title>
    <?php include('assets/style.php') ?>
  </head>
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Add Service Availed</h2>
  	</div>
	<form method="post">
	  <div class="grid-container">
	  	<div class="small-6 cell">
	        <label> Reciept No.
	          <input type="number" name="reciept_no" placeholder="Reciept No" required>
	        </label>
	      </div>
	      <div class="small-12 cell">
	          <label> Customer Name
	            <select name="customer_id">
	             <?php
	              include('php/insert_serviceAvailed.php');
	             	$sql = "SELECT * FROM Customer";
	  				$result = mysqli_query($db, $sql);
			        if(mysqli_num_rows($result)){
			          while($row = mysqli_fetch_array($result)){
			      ?>
			      <option value="<?php echo $row['customer_id'];?>"><?php echo $row['first_name']." ".$row['last_name'];?></option>
			      <?php
			          }
			        }
			      ?>
	            </select>
	          </label>
	        </div>
	  </div>
	  <button class="button expanded" value="submit" type="submit" name="submit" id="submit">Save</button>
	</form>
	<!-- Scripts -->
	<script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/app.js"></script>
</body>	
</html>
