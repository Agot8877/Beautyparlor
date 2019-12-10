<?php include('assets/session.php') ?>
<?php include('php/update_tools_emp.php'); ?>
<?php
if(isset($_POST['update'])){
      
	$quantity = $_POST['quantity'];
	$tool_id = $_GET["tool_id"];
	echo $tool_id;

	// mysql query to Update data
	$query = "UPDATE Tools_Employee SET quantity=$quantity where tool_id=" . $tool_id;

	$result = mysqli_query($db, $query);

	if($result)
	{
		echo 'Data Updated';
	}else{
		echo 'Data Not Updated';
	}
	
	header('location: tools_emp.php?tool_id='.$row['tool_id'].'&updated=1'); 

}

 ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Update Tool-Employee</title>
				<?php include('assets/style.php') ?>
	</head>
	
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Update Tool-Employee</h2>
  	</div>
	<form action="" method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	      <div class="medium-12 cell">
	        <label>Update Quantity
	          <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" placeholder="Service Name">
	        </label>
	      </div>
	    </div>
	  </div>
	  <input type="hidden" name="tool_id" value="<?php echo $row['tool_id'];?>">
	  <input type="hidden" name="tool_empID" value="<?php echo $row['tool_empID'];?>">
	  <input type="hidden" name="id_no" value="<?php echo $row['id_no'];?>">
	  <button class="button expanded" type="submit" name="update">Update</button>
	</form>
		<!-- Scripts -->
		<script src="foundation/js/vendor/jquery.js"></script>
	    <script src="foundation/js/vendor/what-input.js"></script>
	    <script src="foundation/js/vendor/foundation.js"></script>
	    <script src="foundation/js/app.js"></script>
</body>		
</html>