<?php include('assets/session.php'); ?>
<?php include('php/insert_serv.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Services</title>
    <?php include('assets/style.php') ?>
  </head>
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Add Services</h2>
  	</div>
	<form method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	    	<div class="small-12 cell">
	        <label>Service ID
	          <input type="text" name="ServiceID" placeholder="Service Id" required>
	        </label>
	      </div>
	      <div class="small-12 cell">
	        <label> Service Name
	          <input type="text" name="Serv_Name" placeholder="Service Name" required>
	        </label>
	      </div>
	      <div class="small-12 cell">
	        <label> Price
	          <input type="number" name="Price" placeholder="Price" required="">
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