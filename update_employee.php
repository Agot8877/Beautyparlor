<?php include('assets/session.php');
		include('php/update_employee.php');

$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');
  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  if (isset($_GET['EmployeeID'])) {
    
    $EmployeeID = $_GET['EmployeeID'];

    $get_employee = "SELECT * FROM Employee,Job WHERE Employee.EmployeeID = '$EmployeeID' AND Employee.Employee_JobID = Job.JobID";

    $get_employee = mysqli_query($db, $get_employee);

    $row = mysqli_fetch_array($get_employee);
  ?>

<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Update Employee</title>
				<?php include('assets/style.php') ?>
	</head>
	
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Update Employee</h2>
  	</div>
	<form method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	    	<div class="small-4 cell">
	        <label>Update FirstName
	          <input type="text" name="FirstName" value="<?php echo $row['FirstName']; ?>" placeholder="First Name">
	        </label>
	      </div>
	      <div class="small-4 cell">
	        <label>Update LastName
	          <input type="text" name="LastName" value="<?php echo $row['LastName']; ?>" placeholder="Last Name">
	        </label>
	      </div>
	      <div class="small-4 cell">
	        <label>Update MiddleName
	          <input type="text" name="MiddleName" value="<?php echo $row['MiddleName']; ?>" placeholder="MiddleName">
	        </label>
	      </div>
	      <div class="small-12 cell">
          <label> Job Name
            <select name="JobID">
            	 <option value="<?php echo $row['Employee_JobID'];?>" selected><?php echo $row['JobName'];?></option>
                  <?php
  				  $query = "SELECT * FROM Job";
				  $result = mysqli_query($db, $query);
			      if(mysqli_num_rows($result)){
			          while($row1 = mysqli_fetch_array($result)){
			      ?> 

			      <option value="<?php echo $row1['JobID'];?>"><?php echo $row1['JobName'];?></option>
			      <?php
			          }
			        }
}
			      ?>
            </select>
          </label>
        </div>
	    </div>
	  </div>
	  <input type="hidden" name="EmployeeID" value="<?php echo $row['EmployeeID'];?>">
	  <button class="button expanded" type="submit" name="update">Update</button>
	</form>
		<!-- Scripts -->
		<script src="foundation/js/vendor/jquery.js"></script>
	    <script src="foundation/js/vendor/what-input.js"></script>
	    <script src="foundation/js/vendor/foundation.js"></script>
	    <script src="foundation/js/app.js"></script>
</body>		
</html>