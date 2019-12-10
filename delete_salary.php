<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }


  if (isset($_GET['EmployeeID'])) {
    
    $EmployeeID = $_GET['EmployeeID'];

    $get_contact = "SELECT * FROM Salary WHERE EmployeeID = '$EmployeeID'";

    $get_Salary = mysqli_query($db, "SELECT * FROM Salary WHERE EmployeeID = '$EmployeeID'");

    $row = mysqli_fetch_array($get_Salary);
  }
  if(isset($_GET['salaryID'])){ //Getting id number on the link
		$salaryID = $_GET['salaryID'];

    	
/* Query for selected id to delete */
$query =  "DELETE FROM `Salary` WHERE `Salary`.`salaryID` = '$salaryID'"; 
$result = mysqli_query($db, $query);
/* link when the process is done */
header("location:salary.php");
}
?>