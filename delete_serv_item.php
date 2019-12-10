<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }


  if (isset($_GET['reciept_no'])) {
    
    $reciept_no = $_GET['reciept_no'];

    $get_contact = "SELECT * FROM Service_item WHERE reciept_no = '$reciept_no'";

    $get_Salary = mysqli_query($db, "SELECT * FROM Service_item WHERE reciept_no = '$reciept_no'");

    $row = mysqli_fetch_array($get_Salary);
  }
  if(isset($_GET['reciept_no'])){ //Getting id number on the link
		$reciept_no = $_GET['reciept_no'];

    	
/* Query for selected id to delete */
$query =  "DELETE FROM `Service_item` WHERE `Service_item`.`reciept_no` = '$reciept_no'"; 
$result = mysqli_query($db, $query);
/* link when the process is done */
header("location:service_item.php");
}
?>