<?php
	include('php/update_employee.php');




if(isset($_GET['EmployeeID'])){ //Getting id number on the link
		$EmployeeID = $_GET['EmployeeID'];

    	
/* Query for selected id to delete */
$query = "DELETE FROM `Employee` WHERE `Employee`.`EmployeeID` = '$EmployeeID'"; 
$result = mysqli_query($db, $query);
/* link when the process is done */
header("location:employee.php");
}
?>