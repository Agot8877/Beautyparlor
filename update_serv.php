<?php include('assets/session.php') ?>
<?php include('php/update_serv.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Update Services</title>
				<?php include('assets/style.php') ?>
	</head>
	
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Update Services</h2>
  	</div>
	<form action="" method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	      <div class="medium-12 cell">
	        <label>Update Service Name
	          <input type="text" name="Serv_Name" value="<?php echo $row['Serv_Name']; ?>" placeholder="Service Name">
	        </label>
	      </div>
	      <div class="medium-12 cell">
	        <label>Update Price
	          <input type="number" name="Price" value="<?php echo $row['Price']; ?>" placeholder="Price">
	        </label>
	      </div>
	    </div>
	  </div>
	  <input type="hidden" name="ServiceID" value="<?php echo $row['ServiceID'];?>">
	  <button class="button expanded" type="submit" name="update">Update</button>
	</form>
		<!-- Scripts -->
		<script src="foundation/js/vendor/jquery.js"></script>
	    <script src="foundation/js/vendor/what-input.js"></script>
	    <script src="foundation/js/vendor/foundation.js"></script>
	    <script src="foundation/js/app.js"></script>
</body>		
</html>