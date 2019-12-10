<?php include('assets/session.php'); ?>
<?php include('php/insert_emp.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <?php include('assets/style.php') ?>
  </head>
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Add Employee</h2>
  	</div>
	<form method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	      <div class="small-4 cell">
	        <label> Firstname
	          <input type="text" name="FirstName" placeholder="firstname" required>
	        </label>
	      </div>
	      <div class="small-4 cell">
	        <label> Last Name
	          <input type="text" name="LastName" placeholder="lastname" required="">
	        </label>
	      </div>
	      <div class="small-4 cell">
	        <label> Middlename
	          <input type="text" name="MiddleName" placeholder="middlename" required>
	        </label>
	      </div>
	      <div class="small-12 cell">
          <label> Job Name
            <select name="JobID">
             <?php 
             	$sql = "SELECT * FROM Job";
  				$result = mysqli_query($db, $sql);
		        if(mysqli_num_rows($result)){
		          while($row = mysqli_fetch_array($result)){
		      ?>
		      <option value="<?php echo $row['JobID'];?>"><?php echo $row['JobName'];?></option>
		      <?php
		          }
		        }
		      ?>
            </select>
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
  <?php include('assets/down-bar_index.php') ?>