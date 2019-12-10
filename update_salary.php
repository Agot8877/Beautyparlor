<?php include('assets/session.php') ?>
<?php include('php/update_salary.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Update Salary</title>
				<?php include('assets/style.php') ?>
	</head>
	
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Update Salary</h2>
  	</div>
	<form action="" method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	      <div class="medium-12 cell">
	        <label>Update Salary
	          <input type="number" name="Salary" value="<?php echo $row['salary']; ?>" placeholder="Salary">
	        </label>
	      </div>
	    </div>
	  </div>
	  <input type="hidden" name="salaryID" value="<?php echo $row['salaryID'];?>">
	  <button class="button expanded" type="submit" name="update">Update</button>
	</form>
		<!-- Scripts -->
		<script src="foundation/js/vendor/jquery.js"></script>
	    <script src="foundation/js/vendor/what-input.js"></script>
	    <script src="foundation/js/vendor/foundation.js"></script>
	    <script src="foundation/js/app.js"></script>
</body>		
</html>