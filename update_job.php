<?php include('assets/session.php') ?>
<?php include('php/update_job.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Update Job</title>
				<?php include('assets/style.php') ?>
	</head>
	
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Update Job</h2>
  	</div>
	<form action="" method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	      <div class="medium-12 cell">
	        <label>Update JobName
	          <input type="text" name="JobName" value="<?php echo $row['JobName']; ?>" placeholder="Job Name">
	        </label>
	      </div>
	      <div class="medium-12 cell">
	        <label>Update Description
	          <input type="text" name="Description" value="<?php echo $row['Description']; ?>" placeholder="Description">
	        </label>
	      </div>
	    </div>
	  </div>
	  <input type="hidden" name="JobID" value="<?php echo $row['JobID'];?>">
	  <button class="button expanded" type="submit" name="update">Update</button>
	</form>
		<!-- Scripts -->
		<script src="foundation/js/vendor/jquery.js"></script>
	    <script src="foundation/js/vendor/what-input.js"></script>
	    <script src="foundation/js/vendor/foundation.js"></script>
	    <script src="foundation/js/app.js"></script>
</body>		
</html>