<?php include('assets/session.php');
	  include('php/update_cust.php');
?>

<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Update Customer</title>
				<?php include('assets/style.php') ?>
	</head>
	
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Update Customer</h2>
  	</div>
	<form method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	    	<div class="small-4 cell">
		        <label>Update First Name
		          <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" placeholder="">
		        </label>
	      	</div>
	      	<div class="small-4 cell">
		        <label>Update Middle Name
		          <input type="text" name="middle_name" value="<?php echo $row['middle_name']; ?>" placeholder="">
		        </label>
	      	</div>
	      	<div class="small-4 cell">
		        <label>Update Last Name
		          <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" placeholder="">
		        </label>
	      	</div>
	      	<div class="small-12 cell">
		        <label>Update Contact Number
		          <input type="text" name="Contact_no" value="<?php echo $row['Contact_no.']; ?>" placeholder="">
		        </label>
	      	</div>
	      	<div class="small-4 cell">
		        <label>Update Purok
		          <input type="text" name="purok" value="<?php echo $row['purok']; ?>" placeholder="">
		        </label>
	      	</div>
	      	<div class="small-4 cell">
		        <label>Update Barangay
		          <input type="text" name="barangay" value="<?php echo $row['barangay']; ?>" placeholder="">
		        </label>
	      	</div>
	      	<div class="small-4 cell">
		        <label>Update City
		          <input type="text" name="city" value="<?php echo $row['city']; ?>" placeholder="">
		        </label>
	      	</div>
	      	<div class="small-12 cell">
		        <label>Update Zipcode
		          <input type="text" name="zipcode" value="<?php echo $row['zipcode']; ?>" placeholder="">
		        </label>
	      	</div>
	    </div>
	  </div>
	  <input type="hidden" name="customer_id" value="<?php echo $row['customer_id'];?>">
	  <button class="button expanded" type="submit" name="update">Update</button>
	</form>
		<!-- Scripts -->
		<script src="foundation/js/vendor/jquery.js"></script>
	    <script src="foundation/js/vendor/what-input.js"></script>
	    <script src="foundation/js/vendor/foundation.js"></script>
	    <script src="foundation/js/app.js"></script>
</body>		
</html>
