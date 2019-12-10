<?php
	include('php/update_tools_emp.php');

	$tool_id = $_GET['tool_id'];	// refer to tools_employee table
	$id_no   = $_GET['id_no'];		// refer to tools_item table
	
	// get the quantity of tools_item table
	$sql = mysqli_query($db, "SELECT * FROM tools_item where id_no = $id_no");
	$row = mysqli_fetch_array($sql);
	$tools_item_quantity = $row["quantity"];
	// get the quantity of tools_employee table
	$sql = mysqli_query($db, "SELECT * FROM tools_employee where tool_id = $tool_id");
	$row = mysqli_fetch_array($sql);
	$tools_employee_quantity = $row["quantity"];

	// add the quantity of tools_employee and the quantity of tools_item table
	$tools_item_quantity = $tools_item_quantity + $tools_employee_quantity;
			
	// update the quantity of tools_item table
	mysqli_query($db, "UPDATE tools_item SET quantity= $tools_item_quantity WHERE id_no = $id_no ");

	// delete the selected record of tools_employee
	$query = "DELETE FROM Tools_Employee WHERE tool_id = '$tool_id'"; 
	$result = mysqli_query($db, $query);
	if($result)
	{
		header("location:tools_emp.php");
	}else{
		echo "something went wrong";
	}
?>