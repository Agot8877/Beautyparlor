<?php include('assets/session.php'); ?>
<?php include('php/insert_salary.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Salary</title>
    <?php include('assets/style.php') ?>
  </head>
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Add Salary</h2>
  	</div>
	<form method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	    	<div class="small-12 cell">
	          <label> Employee ID
	            <select name="EmployeeID">
	             <?php 
	             	$sql = "SELECT * FROM Employee";
	  				$result = mysqli_query($db, $sql);
			        if(mysqli_num_rows($result)){
			          while($row = mysqli_fetch_array($result)){
			      ?>
			      <option value="<?php echo $row['EmployeeID'];?>"><?php echo $row['FirstName'];?></option>
			      <?php
			          }
			        }
			      ?>
	            </select>
	          </label>
	        </div>
	      <div class="small-12 cell">
	        <label> Salary
	          <input type="number" name="salary" placeholder="Salary" required>
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