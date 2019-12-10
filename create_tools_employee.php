<?php include('assets/session.php'); ?>
<?php include('php/insert_tools_employee.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Tool-Employee</title>
	<?php include('assets/style.php') ?>
</head>

<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
		<h2>Add Tool-Employee</h2>
	</div>
	<form action="" method="post">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<!-- Employee -->
				<div class="small-12 cell">
					<label> Employee ID
						<select name="EmployeeID">
							<?php 
	             	$sql = "SELECT * FROM Employee";
	  						$result = mysqli_query($db, $sql);
								if(mysqli_num_rows($result)):
									while($row = mysqli_fetch_array($result)):
							?>
										<option value="<?php echo $row['EmployeeID'];?>"><?php echo $row['FirstName'];?></option>
							<?php
									endwhile;
								endif;
			      	?>
						</select>
					</label>
				</div>
				<!-- Tool Name -->
				<div class="small-12 cell">
					<label> Tool Name
						<select name="id_no" required>
							<option value="">Select Tool</option>
							<?php 
	             	$sql = "SELECT * FROM Tools_Item";
	  						$result = mysqli_query($db, $sql);
								if(mysqli_num_rows($result)):
									while($row = mysqli_fetch_array($result)):
							?>
										<option value="<?php echo $row['id_no'];?>"><?php echo $row['description'] . ' (' . $row['quantity'] . ' ' .  $row['unit']  .')';?></option>						
							<?php
									endwhile;
								endif;
							?>
						</select>
					</label>
				</div>
				<div class="small-12 cell">
					<label> Quantity
						<input type="number" name="quantity" placeholder="Quantity" required>
					</label>
				</div>
			</div>
		</div>
		<input value="Save" class="button expanded" type="submit" name="insert_tools_employee">
	</form>
	<!-- Scripts -->
	<script src="foundation/js/vendor/jquery.js"></script>
	<script src="foundation/js/vendor/what-input.js"></script>
	<script src="foundation/js/vendor/foundation.js"></script>
	<script src="foundation/js/app.js"></script>
</body>

</html>