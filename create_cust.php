<?php include('assets/session.php'); ?>
<?php include('php/insert_cust.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <?php include('assets/style.php') ?>
  </head>
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Add Customer</h2>
  	</div>
	<form method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	    	<div class="small-12 cell">
	        <label>Customer ID
	          <input type="text" name="customer_id" placeholder="Customer ID" required>
	        </label>
	      </div>
	      <div class="small-4 cell">
	        <label> First Name
	          <input type="text" name="first_name" placeholder="First Name" required>
	        </label>
	      </div>
	      <div class="small-4 cell">
	        <label> Middle Name
	          <input type="text" name="middle_name" placeholder="Middle Name" required="">
	        </label>
	      </div>
	      <div class="small-4 cell">
	        <label> Last Name
	          <input type="text" name="last_name" placeholder="Last Name" required>
	        </label>
	      </div>
	      <div class="small-12 cell">
	        <label> Contact NO.
	          <input type="number" name="Contact_no" placeholder="(+63)9*********" required>
	        </label>
	      </div>
	      <div class="small-6 cell">
	        <label> Purok
	          <input type="text" name="purok" placeholder="Purok" required>
	        </label>
	      </div>
	      <div class="small-6 cell">
	        <label> Barangay
	          <input type="text" name="barangay" placeholder="Baranggay" required>
	        </label>
	      </div>
	      <div class="small-12 cell">
	        <label> City
	          <input type="text" name="city" placeholder="City" required>
	        </label>
	      </div>
	      <div class="small-12 cell">
	        <label> Zip Code
	          <input type="number" name="zipcode" placeholder="Zip Code" required>
	        </label>
	      </div>
	    </div>
	  </div>
	  <button class="button expanded" type="submit" name="submit">Save</button>
	</form>
	<!-- Scripts -->
	<script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/app.js"></script>
</body>	
</html>